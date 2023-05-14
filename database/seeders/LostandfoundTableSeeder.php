<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LostandfoundTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lostandfound')->delete();
        
        \DB::table('lostandfound')->insert(array (
            0 => 
            array (
                'id' => 1,
                'itemname' => 'Bag',
                'dateoflost' => '05/13/2023',
                'description' => 'Brown bag with scarf at mukhang mamahalin at mabilis mag sold out.',
                'image' => 'Bag.jpg',
                'status' => 'Found',
                'created_at' => '2023-05-13 13:04:54',
                'updated_at' => '2023-05-13 13:04:54',
            ),
        ));
        
        
    }
}