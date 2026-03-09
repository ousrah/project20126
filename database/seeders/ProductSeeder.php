<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        [ 'name' => 'Laptop Pro', 'price' => 1299.99, /* ... */ ],
        [ 'name' => 'Souris Ergonomique', 'price' => 79.50, /* ... */ ]
   
       
   
    ]);

    Product::factory(100)->create();
    }
}
