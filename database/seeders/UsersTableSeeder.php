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
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$axMUZ1O5ZZVlp.cBYV5VO.eiPMvI2El2HEH/0R5p1N9WW0AHpobRa',
                'remember_token' => NULL,
                'created_at' => '2023-05-13 04:54:31',
                'updated_at' => '2023-05-13 11:16:00',
                'role_as' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Franzene',
                'email' => 'btssvtenhatxt12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8nwKigKkJOxfeK1AsPUYdOZXUBmT82NVlt49Yo.HC8z6ShQm8/RCS',
                'remember_token' => NULL,
                'created_at' => '2023-05-13 04:55:24',
                'updated_at' => '2023-05-13 04:55:24',
                'role_as' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Atasha',
                'email' => 'atasha@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$53rthOFQb4hBQbxsPnxD6.RO7TUZ/CzO.F8IfBDwv0BjXtpiAj.VK',
                'remember_token' => NULL,
                'created_at' => '2023-05-13 04:56:23',
                'updated_at' => '2023-05-13 04:56:23',
                'role_as' => 0,
            ),
        ));
        
        
    }
}