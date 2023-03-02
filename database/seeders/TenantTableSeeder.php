<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tenant')->delete();
        
        \DB::table('tenant')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => 'Ethan D. Batumbakal',
                'dateofbirth' => '12/30/1995',
                'address' => '123 Main Street',
                'contact' => '09123456789',
                'emailadd' => 'example@example.com',
                'stallnum' => '123',
                'stallname' => 'Babuyan ni Ethan',
                'stalltype' => 'Regular',
                'payment' => 'Daily',
                'stallprice' => '500',
                'image' => '5a336bdcb389c6d64c8f7f64948bd5f9.png',
                'created_at' => '2023-02-28 03:29:02',
                'updated_at' => '2023-02-28 03:29:02',
            ),
            1 => 
            array (
                'id' => 2,
                'fullname' => 'Torong D. Awit',
                'dateofbirth' => '12/30/1997',
                'address' => '123 L Street',
                'contact' => '09123456788',
                'emailadd' => 'torong@example.com',
                'stallnum' => '143',
                'stallname' => 'Damitan ni Torong',
                'stalltype' => 'Regular',
                'payment' => 'Monthly',
                'stallprice' => '500',
                'image' => '28a931afbd577ef000145d42b1a1cc60.jpg',
                'created_at' => '2023-02-28 06:07:48',
                'updated_at' => '2023-02-28 06:07:48',
            ),
            2 => 
            array (
                'id' => 3,
                'fullname' => 'Kookie A. Awit',
                'dateofbirth' => '09/01/1995',
                'address' => '123 Main Street Awit',
                'contact' => '09123456748',
                'emailadd' => 'kookie@example.com',
                'stallnum' => '190',
                'stallname' => 'Gulayan ni Kookie',
                'stalltype' => 'Regular',
                'payment' => 'Monthly',
                'stallprice' => '500',
                'image' => '20210827_125613.jpg',
                'created_at' => '2023-02-28 06:24:31',
                'updated_at' => '2023-02-28 06:24:31',
            ),
        ));
        
        
    }
}