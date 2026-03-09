<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'title' => 'Modern Luxury Apartment',
                'slug' => 'modern-luxury-apartment',
                'description' => 'A stunning modern luxury apartment in the heart of the city.',
                'price' => 1250000.00,
                'address' => '123 Main St',
                'city' => 'New York',
                'beds' => 3,
                'baths' => 2,
                'sqft' => 1500,
                'type' => 'sale',
                'status' => 'available',
                'is_featured' => true,
                'category_id' => 1, // Apartment
                'agent_id' => 1,
            ],
            [
                'title' => 'Sunset Valley Villa',
                'slug' => 'sunset-valley-villa',
                'description' => 'A beautiful villa with panoramic views of the valley.',
                'price' => 3500000.00,
                'address' => '456 Valley Rd',
                'city' => 'Los Angeles',
                'beds' => 5,
                'baths' => 4,
                'sqft' => 4500,
                'type' => 'sale',
                'status' => 'available',
                'is_featured' => true,
                'category_id' => 2, // Villa
                'agent_id' => 2,
            ],
            [
                'title' => 'Downtown Central Office',
                'slug' => 'downtown-central-office',
                'description' => 'Prime office space in the central business district.',
                'price' => 5000.00,
                'address' => '789 Business Ave',
                'city' => 'Chicago',
                'beds' => 0,
                'baths' => 2,
                'sqft' => 2000,
                'type' => 'rent',
                'status' => 'available',
                'is_featured' => false,
                'category_id' => 3, // Office
                'agent_id' => 1,
            ],
        ];

        foreach ($properties as $property) {
            \App\Models\Property::create($property);
        }
    }
}
