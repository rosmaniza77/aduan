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
        $this->call([
            ActionStatusesSeeder::class
        ]);

         \App\Models\Complaint::factory(30)->create();
         \App\Models\Action::factory(50)->create();

         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'user@domain.com',
         ]);
    }
}
