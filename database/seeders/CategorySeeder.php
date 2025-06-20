<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets'
            ],
            [
                'name' => 'Clothing',
                'description' => 'Fashion and clothing items'
            ],
            [
                'name' => 'Books',
                'description' => 'Books and educational materials'
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports equipment and accessories'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}