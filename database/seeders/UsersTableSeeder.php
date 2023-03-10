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
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Louisse',
                'email' => 'louisse@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k1iVDE7qIWw1EKZjc2835OJMCGCgXU1mBrOP2I/TBh6dMfsATAso6',
                'remember_token' => NULL,
                'created_at' => '2023-02-26 08:46:36',
                'updated_at' => '2023-02-26 08:46:36',
                'role_as' => 0,
            ),
        ));
        
        
    }
}