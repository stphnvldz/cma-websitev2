<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RentstallTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rentstall')->delete();
        
        \DB::table('rentstall')->insert(array (
            0 => 
            array (
                'address' => '1234 Suchwita',
                'amount' => '1500',
                'contact' => '09178906523',
                'created_at' => '2023-05-05 11:39:27',
                'dateofbirth' => '03/09/1993',
                'emailadd' => 'yg@example.com',
                'fullname' => 'Min Yoongi',
                'id' => 1,
                'image' => 'yoongs.jpg',
                'payment' => 'Monthly',
                'selectedStallTextbox' => '1-006',
                'stallname' => 'Mic Drop ni Yoongs',
                'stalltype' => 'Regular',
                'totalamount' => '1500',
                'updated_at' => '2023-05-05 11:39:27',
            ),
        ));
        
        
    }
}