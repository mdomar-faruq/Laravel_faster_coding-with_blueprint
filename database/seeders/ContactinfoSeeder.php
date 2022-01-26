<?php

namespace Database\Seeders;

use App\Models\Contactinfo;
use Illuminate\Database\Seeder;

class ContactinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contactinfo::factory()->count(5)->create();
    }
}
