<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->createMany([
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@doe.com',
                'password' => bcrypt('password123'),
            ]
        ]);

        Task::factory(20)->create([
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            } // Assign a random user to each task
        ]);
    }
}
