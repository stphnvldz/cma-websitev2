<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TenantBillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tenant_bills')->delete();
        
        \DB::table('tenant_bills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rentstall_id' => 1,
                'notice' => 'Monthly Bill',
                'description' => 'Monthly bill for the month of May.',
                'date_from' => '2023-05-01',
                'date_to' => '2023-05-31',
                'amount' => '4000',
                'status' => 'Unpaid',
                'created_at' => '2023-05-13 06:41:17',
                'updated_at' => '2023-05-13 06:41:17',
            ),
            1 => 
            array (
                'id' => 2,
                'rentstall_id' => 2,
                'notice' => 'Monthly Bill',
                'description' => 'Monthly bill for the month of May.',
                'date_from' => '2023-05-01',
                'date_to' => '2023-05-31',
                'amount' => '266',
                'status' => 'Pending',
                'created_at' => '2023-05-13 06:41:17',
                'updated_at' => '2023-05-13 06:41:17',
            ),
            2 => 
            array (
                'id' => 3,
                'rentstall_id' => 1,
                'notice' => 'Due Date',
                'description' => 'Pay immediately!',
                'date_from' => '2023-04-01',
                'date_to' => '2023-04-30',
                'amount' => '4000',
                'status' => 'Paid',
                'created_at' => '2023-05-13 06:44:00',
                'updated_at' => '2023-05-13 06:44:00',
            ),
            3 => 
            array (
                'id' => 4,
                'rentstall_id' => 1,
                'notice' => 'Advance Monthly Bill',
                'description' => 'Pay or pay?!',
                'date_from' => '2023-06-01',
                'date_to' => '2023-06-30',
                'amount' => '4000',
                'status' => 'Paid',
                'created_at' => '2023-05-14 03:48:38',
                'updated_at' => '2023-05-14 03:48:38',
            ),
        ));
        
        
    }
}