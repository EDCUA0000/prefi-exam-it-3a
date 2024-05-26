<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\teacher;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       student::factory(10)->create(); 
       teacher::factory(10)->create(); 
    }
}
