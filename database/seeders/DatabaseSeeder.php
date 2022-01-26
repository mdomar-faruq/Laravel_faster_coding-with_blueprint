<?php

namespace Database\Seeders;

use App\Models\Contactinfo;
use App\Models\User;
use App\Models\Employee;
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
         User::factory(5)->create();
         Employee::factory(5)->create();
         \App\Models\Project::factory(5)->create();
         \App\Models\Department::factory(5)->create();
         Contactinfo::factory(5)->create();


    }
}