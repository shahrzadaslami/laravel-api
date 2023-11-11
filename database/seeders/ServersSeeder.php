<?php

namespace Database\Seeders;

use App\Models\Servers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servers::factory()
            ->count(20)
            ->hasnotifications(5)
            ->create();
        Servers::factory()
            ->count(14)
            ->hasnotifications(2)
            ->create();
        Servers::factory()
            ->count(2)
            ->create();
    }
}
