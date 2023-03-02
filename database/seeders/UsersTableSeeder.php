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
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$in4ihjOXgtWtaDMWcr2BeOlMUXhIjyXaat16fhsoy4r0J173TwJy2',
                'remember_token' => NULL,
                'created_at' => '2023-02-25 10:31:27',
                'updated_at' => '2023-02-25 10:31:27',
                'role_as' => 0,
            ),
        ));
        
        
    }
}