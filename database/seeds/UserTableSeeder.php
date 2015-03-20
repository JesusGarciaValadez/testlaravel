<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
        $faker  = Faker::create();

        for ( $i = 0; $i < 99; $i++ )
        {
            $id = \DB::table( 'users' )->insertGetID( [
                'first_name'    => $faker->firstName,
                'last_name'     => $faker->lastName,
                'full_name'     => $faker->firstName . ' ' . $faker->lastName,
                'email'         => $faker->unique()->email,
                'password'      => \Hash__make( '123456' ),
                'type'          => 'user'
            ] );

            \DB::table( 'user_profiles' )->insert( [
                'user_id'   => $id,
                'bio'       => $faker->paragraph( rand( 2, 5 ) ),
                'website'   => 'http://www.' . $faker->domainName,
                'twitter'   => 'https://www.twitter.com/' . $faker->userName,
                'birthdate' => $faker->dateTimeBetween( '-45 years', '-15 years' )->format( 'Y-m-d' )
            ] );
        }
	}

}
