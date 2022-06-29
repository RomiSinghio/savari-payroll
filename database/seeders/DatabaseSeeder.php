<?php

namespace Database\Seeders;

use App\Models\Week;
use App\Models\Driver;
use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Week::factory(10)->create();
        Driver::factory(30)->create();
        Report::factory(30)->create();
    }
}
