<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'CategoryName' => 'Food'
        ]);

        Category::create([
            'CategoryName' => 'Drink'
        ]);

        Category::create([
            'CategoryName' => 'Electronic'
        ]);

        Category::create([
            'CategoryName' => 'Fashion'
        ]);

        Category::create([
            'CategoryName' => 'Furniture'
        ]);
    }
 
}
