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
                'id' => 1,
                'floornumber' => '1st Floor',
                'floordes' => 'Wet and Dry Market',
                'created_at' => '2023-05-13 04:59:12',
                'updated_at' => '2023-05-13 04:59:12',
            ),
            1 => 
            array (
                'id' => 2,
                'floornumber' => '2nd Floor',
                'floordes' => 'Necessities',
                'created_at' => '2023-05-13 04:59:19',
                'updated_at' => '2023-05-13 04:59:19',
            ),
        ));
        
        
    }
}