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
                'address' => '112 Iyak kasi magmimilitary na si Hobi',
                'contact' => '098967251623',
                'created_at' => '2023-04-14 06:11:43',
                'dateofbirth' => '02/08/1994',
                'emailadd' => 'jh@example.com',
                'fullname' => 'Jung Hoseok',
                'id' => 35,
                'image' => '1681452703.jpg',
                'updated_at' => '2023-04-14 06:11:43',
            ),
            1 => 
            array (
                'address' => '679 Rock with you',
                'contact' => '09867541824',
                'created_at' => '2023-03-17 18:56:23',
                'dateofbirth' => '10/10/1997',
                'emailadd' => 'mh@example.com',
                'fullname' => 'Minghao I. Wanna',
                'id' => 31,
                'image' => '1679294118.png',
                'updated_at' => '2023-03-17 18:56:23',
            ),
            2 => 
            array (
                'address' => '0x1 TXT Street',
                'contact' => '09872635172',
                'created_at' => '2023-03-17 18:32:01',
                'dateofbirth' => '05/06/1999',
                'emailadd' => 'yj@example.com',
                'fullname' => 'Yeonjun U. Know',
                'id' => 30,
                'image' => '1679145474.jpg',
                'updated_at' => '2023-03-17 18:32:01',
            ),
            3 => 
            array (
                'address' => '888 Are Enough For You',
                'contact' => '09158729345',
                'created_at' => '2023-03-17 12:35:52',
                'dateofbirth' => '01/23/1997',
                'emailadd' => 'mg@example.com',
                'fullname' => 'Mingyu D. Nowords',
                'id' => 29,
                'image' => '1679056552.jpg',
                'updated_at' => '2023-03-17 12:35:52',
            ),
            4 => 
            array (
                'address' => '333 Jiminie Set Me Free Pt.2',
                'contact' => '09878652341',
                'created_at' => '2023-03-17 12:32:14',
                'dateofbirth' => '03/14/1995',
                'emailadd' => 'jm@example.com',
                'fullname' => 'Jiminie D. Pabo',
                'id' => 28,
                'image' => '1679056333.jpg',
                'updated_at' => '2023-03-17 12:32:14',
            ),
            5 => 
            array (
                'address' => '119 Meow Daechwita',
                'contact' => '09876543219',
                'created_at' => '2023-03-15 16:39:17',
                'dateofbirth' => '01/20/1997',
                'emailadd' => 'yoongs@example.com',
                'fullname' => 'Pusa D. Natutulog',
                'id' => 27,
                'image' => '1678898357.jpg',
                'updated_at' => '2023-03-15 16:39:17',
            ),
            6 => 
            array (
                'address' => '111 Sa Puso Ni Torong',
                'contact' => '09123456787',
                'created_at' => '2023-03-15 16:26:12',
                'dateofbirth' => '12/30/1995',
                'emailadd' => 'torong@example.com',
                'fullname' => 'Torong D. Awit',
                'id' => 25,
                'image' => '1678897572.jpg',
                'updated_at' => '2023-03-15 16:26:12',
            ),
            7 => 
            array (
                'address' => '143 jk if i was you boyfriend',
                'contact' => '09786541298',
                'created_at' => '2023-03-15 16:29:01',
                'dateofbirth' => '09/01/1997',
                'emailadd' => 'jk@example.com',
                'fullname' => 'Jeykey D. Natutulog',
                'id' => 26,
                'image' => '1678897741.jpg',
                'updated_at' => '2023-03-15 16:29:01',
            ),
            8 => 
            array (
                'address' => '413 Sa Puso Ni Minu',
                'contact' => '09879123516',
                'created_at' => '2023-04-02 07:15:45',
                'dateofbirth' => '12/31/2002',
                'emailadd' => 'op@example.com',
                'fullname' => 'Park Onyu',
                'id' => 34,
                'image' => '1680419745.jpg',
                'updated_at' => '2023-04-02 07:15:45',
            ),
        ));
        
        
    }
}