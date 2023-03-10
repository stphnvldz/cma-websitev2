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
                'id' => 13,
                'fullname' => 'Kim Namjoon',
                'dateofbirth' => '09/12/1994',
                'address' => '187 Sa Puso Ni Namjoon',
                'contact' => '9876543210',
                'emailadd' => 'rm@example.com',
                'stallnum' => '121',
                'stallname' => 'Mic ni Namjoon',
                'stalltype' => 'Regular',
                'payment' => 'daily',
                'stallprice' => '400',
                'image' => '1678024439.jpg',
                'created_at' => '2023-03-05 13:53:59',
                'updated_at' => '2023-03-05 13:53:59',
            ),
            1 => 
            array (
                'id' => 12,
                'fullname' => 'Hope O. Nthestreet',
                'dateofbirth' => '02/18/1994',
                'address' => '119 Hope on the Street',
                'contact' => '09876543219',
                'emailadd' => 'hope@example.com',
                'stallnum' => '216',
                'stallname' => 'Sumbrelo ni Hobi',
                'stalltype' => 'Regular',
                'payment' => 'monthly',
                'stallprice' => '1500',
                'image' => '1678023326.jpg',
                'created_at' => '2023-03-05 13:35:26',
                'updated_at' => '2023-03-05 13:35:26',
            ),
            2 => 
            array (
                'id' => 11,
                'fullname' => 'Jeykey D. Natutulog',
                'dateofbirth' => '09/01/1997',
                'address' => '143 jk if i was you boyfriend',
                'contact' => '09876543212',
                'emailadd' => 'jk@example.com',
                'stallnum' => '117',
                'stallname' => 'Gulayan ni Kookie',
                'stalltype' => 'Temporary',
                'payment' => 'daily',
                'stallprice' => '400',
                'image' => '1678020643.jfif',
                'created_at' => '2023-03-05 12:50:43',
                'updated_at' => '2023-03-05 12:50:43',
            ),
            3 => 
            array (
                'id' => 10,
                'fullname' => 'Torong D. Awit',
                'dateofbirth' => '12/30/1995',
                'address' => '142 Sa Puso Ni Jeykey',
                'contact' => '09192837465',
                'emailadd' => 'torong@example.com',
                'stallnum' => '143',
                'stallname' => 'Damitan ni Torong',
                'stalltype' => 'Regular',
                'payment' => 'daily',
                'stallprice' => '400',
                'image' => '1678020554.jpg',
                'created_at' => '2023-03-05 12:49:14',
                'updated_at' => '2023-03-05 12:49:14',
            ),
            4 => 
            array (
                'id' => 9,
                'fullname' => 'Ethan D. Batumbakal',
                'dateofbirth' => '09/01/1995',
                'address' => '123 Main Street',
                'contact' => '09123456787',
                'emailadd' => 'example@example.com',
                'stallnum' => '123',
                'stallname' => 'Babuyan ni Ethan',
                'stalltype' => 'Regular',
                'payment' => 'daily',
                'stallprice' => '400',
                'image' => '1678020486.jpg',
                'created_at' => '2023-03-05 12:48:06',
                'updated_at' => '2023-03-05 12:48:06',
            ),
            5 => 
            array (
                'id' => 8,
                'fullname' => 'Pusa D. Natutulog',
                'dateofbirth' => '12/10/1997',
                'address' => '907 hope on the street',
                'contact' => '09876785643',
                'emailadd' => 'pusa@example.com',
                'stallnum' => '301',
                'stallname' => 'suchwita ni pusa',
                'stalltype' => 'Temporary',
                'payment' => 'monthly',
                'stallprice' => '1500',
                'image' => '1677907078.jpg',
                'created_at' => '2023-03-04 05:17:59',
                'updated_at' => '2023-03-04 05:17:59',
            ),
        ));
        
        
    }
}