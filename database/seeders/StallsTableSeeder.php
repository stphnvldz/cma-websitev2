<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StallsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stalls')->delete();
        
        \DB::table('stalls')->insert(array (
            0 => 
            array (
                'created_at' => '2023-04-01 15:50:43',
                'floornumber' => '1st Floor',
                'id' => 1,
                'stallnumber' => '1-001',
                'updated_at' => '2023-04-01 15:50:43',
            ),
            1 => 
            array (
                'created_at' => '2023-04-01 15:50:49',
                'floornumber' => '1st Floor',
                'id' => 2,
                'stallnumber' => '1-002',
                'updated_at' => '2023-04-01 15:50:49',
            ),
            2 => 
            array (
                'created_at' => '2023-04-01 15:50:54',
                'floornumber' => '1st Floor',
                'id' => 3,
                'stallnumber' => '1-003',
                'updated_at' => '2023-04-01 15:50:54',
            ),
            3 => 
            array (
                'created_at' => '2023-04-01 15:50:58',
                'floornumber' => '2nd Floor',
                'id' => 4,
                'stallnumber' => '2-001',
                'updated_at' => '2023-04-01 15:50:58',
            ),
            4 => 
            array (
                'created_at' => '2023-04-01 15:51:03',
                'floornumber' => '2nd Floor',
                'id' => 5,
                'stallnumber' => '2-002',
                'updated_at' => '2023-04-01 15:51:03',
            ),
            5 => 
            array (
                'created_at' => '2023-04-01 15:51:07',
                'floornumber' => '3rd Floor',
                'id' => 6,
                'stallnumber' => '3-001',
                'updated_at' => '2023-04-01 15:51:07',
            ),
            6 => 
            array (
                'created_at' => '2023-04-17 03:05:59',
                'floornumber' => '4th Floor',
                'id' => 10,
                'stallnumber' => '4-001',
                'updated_at' => '2023-04-17 03:05:59',
            ),
            7 => 
            array (
                'created_at' => '2023-04-14 05:26:54',
                'floornumber' => '1st Floor',
                'id' => 8,
                'stallnumber' => '1-004',
                'updated_at' => '2023-04-14 05:26:54',
            ),
            8 => 
            array (
                'created_at' => '2023-04-16 02:58:26',
                'floornumber' => '3rd Floor',
                'id' => 9,
                'stallnumber' => '3-002',
                'updated_at' => '2023-04-16 02:58:26',
            ),
            9 => 
            array (
                'created_at' => '2023-04-17 03:06:59',
                'floornumber' => '3rd Floor',
                'id' => 12,
                'stallnumber' => '3-003',
                'updated_at' => '2023-04-17 03:06:59',
            ),
        ));
        
        
    }
}