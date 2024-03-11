<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //USER FACTORY:
        \App\Models\User::factory(10)->create();

        //ROOM FACTORY:
         \App\Models\Room::factory(10)->create();

        //Round FACTORY:
        \App\Models\Round::factory(10)->create();

        
        //Game FACTORY:
        \App\Models\User::factory(10)->create();

        //Comment FACTORY:
        \App\Models\Room::factory(10)->create();

        //PIG FACTORY:
        \App\Models\Round::factory(10)->create();

        
        //Role FACTORY:
        \App\Models\User::factory(10)->create();

        //User in Game FACTORY:
         \App\Models\UsersInRoom::factory(10)->create();
    }
}
