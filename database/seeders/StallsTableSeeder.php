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
                'id' => 1,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-001',
                'created_at' => '2023-05-13 04:59:28',
                'updated_at' => '2023-05-13 04:59:28',
            ),
            1 => 
            array (
                'id' => 2,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-002',
                'created_at' => '2023-05-13 04:59:34',
                'updated_at' => '2023-05-13 04:59:34',
            ),
            2 => 
            array (
                'id' => 3,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-003',
                'created_at' => '2023-05-13 04:59:41',
                'updated_at' => '2023-05-13 04:59:41',
            ),
            3 => 
            array (
                'id' => 4,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-004',
                'created_at' => '2023-05-13 04:59:47',
                'updated_at' => '2023-05-13 04:59:47',
            ),
            4 => 
            array (
                'id' => 5,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-005',
                'created_at' => '2023-05-13 04:59:53',
                'updated_at' => '2023-05-13 04:59:53',
            ),
            5 => 
            array (
                'id' => 6,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-006',
                'created_at' => '2023-05-13 04:59:58',
                'updated_at' => '2023-05-13 04:59:58',
            ),
            6 => 
            array (
                'id' => 7,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-007',
                'created_at' => '2023-05-13 05:00:03',
                'updated_at' => '2023-05-13 05:00:03',
            ),
            7 => 
            array (
                'id' => 8,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-008',
                'created_at' => '2023-05-13 05:00:09',
                'updated_at' => '2023-05-13 05:00:09',
            ),
            8 => 
            array (
                'id' => 9,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-009',
                'created_at' => '2023-05-13 05:00:15',
                'updated_at' => '2023-05-13 05:00:15',
            ),
            9 => 
            array (
                'id' => 10,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-010',
                'created_at' => '2023-05-13 05:00:21',
                'updated_at' => '2023-05-13 05:00:21',
            ),
            10 => 
            array (
                'id' => 11,
                'floornumber' => '1st Floor',
                'stallnumber' => '1-011',
                'created_at' => '2023-05-13 12:17:08',
                'updated_at' => '2023-05-13 12:17:08',
            ),
        ));
        
        
    }
}