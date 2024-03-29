<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(StallsTableSeeder::class);
        $this->call(FloorsTableSeeder::class);
        $this->call(LostandfoundTableSeeder::class);
        $this->call(RentstallTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(TenantBillsTableSeeder::class);
        $this->call(RequirementsTableSeeder::class);
        $this->call(AnnouncementTableSeeder::class);
    }
}
