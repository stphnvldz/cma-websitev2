<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment')->delete();
        
        \DB::table('payment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tenant_bills_id' => '3',
                'fullname' => 'Franzene Louisse V. Lozada',
                'stallnumber' => '1-001',
                'email' => 'btssvtenhatxt12@gmail.com',
                'contact' => '09168460196',
                'type' => 'Monthly',
                'amount' => '4000',
                'datefrom' => '2023-04-01',
                'dateto' => '2023-04-30',
                'payment' => 'cash',
                'image' => NULL,
                'refnumber' => 'cash',
                'status' => 'Pending',
                'created_at' => '2023-05-13 06:46:04',
                'updated_at' => '2023-05-13 06:46:04',
            ),
        ));
        
        
    }
}