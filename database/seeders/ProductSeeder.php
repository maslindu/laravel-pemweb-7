<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Laptop ASUS ROG',
                'description' => 'Gaming laptop with high performance',
                'price' => 15000000,
                'stock' => 10,
                'category' => 'Electronics'
            ],
            [
                'name' => 'Kemeja Batik',
                'description' => 'Traditional Indonesian shirt',
                'price' => 200000,
                'stock' => 50,
                'category' => 'Clothing'
            ],
            [
                'name' => 'Buku Pemrograman Web',
                'description' => 'Complete guide to web development',
                'price' => 150000,
                'stock' => 30,
                'category' => 'Books'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}