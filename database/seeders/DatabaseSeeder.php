<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User role admin
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        // User role staff
        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'role' => 'staff',
        ]);

        // User role viewer
        User::factory()->create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'role' => 'viewer',
        ]);

        // Buat 10 authors
        $authors = Author::factory(10)->create();

        // Buat 50 books dengan random authors
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}
