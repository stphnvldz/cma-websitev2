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
        
        
        
    }
}