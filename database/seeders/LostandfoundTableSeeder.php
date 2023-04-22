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
                'created_at' => '2023-04-22 15:41:43',
                'dateoflost' => '04/22/2023',
                'description' => 'Brown bag with scarf at mukhang mamahalin at mabilis mag sold out.',
                'id' => 1,
                'image' => '1682178103.jpeg',
                'itemname' => 'Bag',
                'updated_at' => '2023-04-22 15:41:43',
            ),
            1 => 
            array (
                'created_at' => '2023-04-22 16:11:58',
                'dateoflost' => '04/23/2023',
                'description' => 'Mukhang mamahalin at nag sold out agad kaya yung gumawa hindi nakabili at bumili na lang ng ibang mood lamp sa shopee',
                'id' => 2,
                'image' => '1682179918.png',
                'itemname' => 'Mikrokosmos Mood Lamp',
                'updated_at' => '2023-04-22 16:11:58',
            ),
        ));
        
        
    }
}