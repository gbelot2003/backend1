<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();

        \App\Models\User::factory(10)->create();

        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Gerardo A. Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SoewPfOWBoopOy33c1MOYuLyB1bANnBTBAptcD4CTTefOswy7eqQa',
                'remember_token' => NULL,
                'current_team_id' => 1,
                'profile_photo_path' => 'profile-photos/oSReAQyUVu1gCgGoE7kWYClpXWAF9aq4ZXCkXXDH.jpg',
                'created_at' => '2021-02-04 00:05:55',
                'updated_at' => '2021-02-04 00:08:31',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
            ),
        ));
        
    }

    
}