<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('floors')->delete();
        
        \DB::table('floors')->insert(array (
            0 => 
            array (
                'created_at' => '2023-03-23 09:30:10',
                'floordes' => 'Wet and Dry Market',
                'floornumber' => '1st Floor',
                'id' => 1,
                'updated_at' => '2023-03-23 09:30:10',
            ),
            1 => 
            array (
                'created_at' => '2023-03-23 10:39:15',
                'floordes' => 'Necessities',
                'floornumber' => '2nd Floor',
                'id' => 2,
                'updated_at' => '2023-03-23 10:39:15',
            ),
            2 => 
            array (
                'created_at' => '2023-03-23 11:18:04',
                'floordes' => 'Others',
                'floornumber' => '3rd Floor',
                'id' => 3,
                'updated_at' => '2023-03-23 11:18:04',
            ),
        ));
        
        
    }
}