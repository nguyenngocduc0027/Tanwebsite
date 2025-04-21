<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $cat = Category::create(['name' => 'Điện tử']);

        $types = $cat->types()->createMany([
            ['name' => 'Điện thoại'],
            ['name' => 'Laptop']
        ]);

        // Thêm level cho từng type
        foreach ($types as $type) {
            if ($type->name === 'Điện thoại') {
                $type->levels()->createMany([
                    ['name' => 'iPhone'],
                    ['name' => 'Samsung'],
                ]);
            } elseif ($type->name === 'Laptop') {
                $type->levels()->createMany([
                    ['name' => 'MacBook'],
                    ['name' => 'Asus'],
                ]);
            }
        }
    }
}
