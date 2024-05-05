<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
                'image' => 'product1.jpg'
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
                'image' => 'product2.jpg'
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
