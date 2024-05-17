<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'options' => [
                'key' => 'value',
                'key2' => 'value2',
                'root' => [
                    'child1' => [
                        'child2' => [
                            'child3' => [
                                'child4' => [
                                    'text' => 'value'
                                ]
                            ]
                        ]
                    ]
                ],
            ]
        ]);
    }
}
