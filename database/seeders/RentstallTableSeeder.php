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
                'id' => 1,
                'fullname' => 'Franzene Louisse V. Lozada',
                'dateofbirth' => '09/30/2002',
                'address' => 'Macamot, Binangonan, Rizal',
                'contact' => '09168460196',
                'emailadd' => 'btssvtenhatxt12@gmail.com',
                'image' => 'Fsi5j-IakAA_B17.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'Magic Shop',
                'payment' => 'Monthly',
                'amount' => '4000',
                'selectedStallTextbox' => '1-001',
                'totalamount' => '4000',
                'is_archived' => 0,
                'created_at' => '2023-05-13 05:09:33',
                'updated_at' => '2023-05-13 05:09:33',
            ),
            1 => 
            array (
                'id' => 2,
                'fullname' => 'Atasha Biteranta',
                'dateofbirth' => '12/30/2001',
                'address' => 'Pantok, Binagonan, Rizal',
                'contact' => '09123456789',
                'emailadd' => 'atasha@gmail.com',
                'image' => 'heejin.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'Watashi',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-002, 1-003',
                'totalamount' => '266',
                'is_archived' => 0,
                'created_at' => '2023-05-13 05:10:46',
                'updated_at' => '2023-05-13 05:10:46',
            ),
            2 => 
            array (
                'id' => 3,
                'fullname' => 'Kim Taehyung',
                'dateofbirth' => '12/30/1995',
                'address' => 'South Korea',
                'contact' => '09987654321',
                'emailadd' => 'kth@gmail.com',
                'image' => NULL,
                'stalltype' => 'Regular',
                'stallname' => 'Mic Drop',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-004',
                'totalamount' => '133',
                'is_archived' => 1,
                'created_at' => '2023-05-13 11:47:50',
                'updated_at' => '2023-05-13 12:45:52',
            ),
            3 => 
            array (
                'id' => 4,
                'fullname' => 'Sim Jake',
                'dateofbirth' => '12/30/2002',
                'address' => 'Sk',
                'contact' => '09876543212',
                'emailadd' => 'jm@gmail.com',
                'image' => '.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'Jim-in',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-005',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 11:50:18',
                'updated_at' => '2023-05-13 11:50:18',
            ),
            4 => 
            array (
                'id' => 5,
                'fullname' => 'Park Jay',
                'dateofbirth' => '02/20/2002',
                'address' => 'South Korea',
                'contact' => '09897654321',
                'emailadd' => 'pj@gmail.com',
                'image' => '.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'Jay eyo',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-006',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 11:51:15',
                'updated_at' => '2023-05-13 11:51:15',
            ),
            5 => 
            array (
                'id' => 6,
                'fullname' => 'Choi Yeonjun',
                'dateofbirth' => '12/30/1999',
                'address' => 'South Korea',
                'contact' => '09124356789',
                'emailadd' => 'yj@gmail.com',
                'image' => NULL,
                'stalltype' => 'Temporary',
                'stallname' => '6 ft tall and super strong',
                'payment' => 'Monthly',
                'amount' => '4000',
                'selectedStallTextbox' => '1-007',
                'totalamount' => '4000',
                'is_archived' => 0,
                'created_at' => '2023-05-13 12:05:08',
                'updated_at' => '2023-05-13 12:05:08',
            ),
            6 => 
            array (
                'id' => 7,
                'fullname' => 'Choi Soobin',
                'dateofbirth' => '12/30/2000',
                'address' => 'SK',
                'contact' => '09897897898',
                'emailadd' => 'sb@gmail.com',
                'image' => NULL,
                'stalltype' => 'Regular',
                'stallname' => 'Soobin soobin you know',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-008',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 12:11:11',
                'updated_at' => '2023-05-13 12:11:11',
            ),
            7 => 
            array (
                'id' => 8,
                'fullname' => 'Choi Beomgyu',
                'dateofbirth' => '12/30/2001',
                'address' => 'SK',
                'contact' => '09876543456',
                'emailadd' => 'bg2gmail.com',
                'image' => '.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'Hanapune Speciar',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-009',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 12:13:22',
                'updated_at' => '2023-05-13 12:13:22',
            ),
            8 => 
            array (
                'id' => 9,
                'fullname' => 'asd',
                'dateofbirth' => '/12/30/1995',
                'address' => 'asd',
                'contact' => '098765432',
                'emailadd' => 'adas@gmail.com',
                'image' => '.jpg.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'dasd',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-010',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 12:15:01',
                'updated_at' => '2023-05-13 12:15:01',
            ),
            9 => 
            array (
                'id' => 10,
                'fullname' => 'qrqwq',
                'dateofbirth' => '01/12/2002',
                'address' => 'asdasd',
                'contact' => '09876543212',
                'emailadd' => 'qwe@gmail.com',
                'image' => 'qrqwq.jpgjpgjpg.jpg.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'asdas',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-011',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 12:23:12',
                'updated_at' => '2023-05-13 12:23:12',
            ),
            10 => 
            array (
                'id' => 11,
                'fullname' => 'Kim Seokjin',
                'dateofbirth' => '12/30/1993',
                'address' => 'SK',
                'contact' => '0998877665',
                'emailadd' => 'sj@gmail.com',
                'image' => 'Kim Seokjin.jpg.jpg',
                'stalltype' => 'Regular',
                'stallname' => 'jin jin jin',
                'payment' => 'Daily',
                'amount' => '133',
                'selectedStallTextbox' => '1-004',
                'totalamount' => '133',
                'is_archived' => 0,
                'created_at' => '2023-05-13 15:21:25',
                'updated_at' => '2023-05-13 15:21:25',
            ),
        ));
        
        
    }
}