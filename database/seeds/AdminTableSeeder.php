<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table( 'users' )->insert([
            'first_name'    => 'Jesús',
            'last_name'     => 'García',
            'full_name'     => 'Jesús García',
            'email'         => 'jesus.garciav@me.com',
            'password'      => \Hash::make( 'secret' ),
            'type'          => 'admin'
        ]);
    }
}
