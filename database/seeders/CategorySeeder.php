<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Apartment', 'slug' => 'apartment', 'icon' => 'building'],
            ['name' => 'Villa', 'slug' => 'villa', 'icon' => 'home'],
            ['name' => 'Office', 'slug' => 'office', 'icon' => 'briefcase'],
            ['name' => 'House', 'slug' => 'house', 'icon' => 'home-modern'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
