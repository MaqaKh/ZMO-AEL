<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Example data for the Product model
         $products = [
            [
                'name' => 'DOT 4 PLUS 250 ml',
                'description' => '',
                'price' => 19.99,
                'code' => 'ABC123',
                'is_active' => 1,
                'stock_status' => '1',
                'image_path' => url('storage/images/products/DOT_4_PLUS_250_ml.jpg'),
                'category_id' => 1,
            ],
            [
                'name' => 'ATF DEXRON VI SP IV Fully Synthetic YELLOW',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'code' => 'XYZ456',
                'is_active' => 1,
                'stock_status' => '0',
                'image_path' => url('storage/images/products/ATF_DEXRON_VI_SP_IV_Fully_Synthetic_YELLOW.png'),
                'category_id' => 2,
            ],
            [
                'name' => '10W-40 HC PREMIUM TURBO DIESEL',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'code' => 'XYZ456',
                'is_active' => 1,
                'stock_status' => '0',
                'image_path' => url('storage/images/products/10W-40_HC_PREMIUM_TURBO_DIESEL.png'),
                'category_id' => 2,
            ],
            [
                'name' => '5W-40 LS ULTRA PRO TECH',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'code' => 'XYZ456',
                'is_active' => 1,
                'stock_status' => '0',
                'image_path' => url('storage/images/products/5W-40_LS_ULTRA_PRO_TECH.png'),
                'category_id' => 2,
            ],
            [
                'name' => '5W30 -GOLD ENERGY LPG-CNG',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'code' => 'XYZ456',
                'is_active' => 1,
                'stock_status' => '0',
                'image_path' => url('storage/images/products/5W30_-GOLD_ENERGY_LPG-CNG.png'),
                'category_id' => 2,
            ],
            [
                'name' => '0W-20 ECO LIFE SPECIAL  HYBRID',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'code' => 'XYZ456',
                'is_active' => 1,
                'stock_status' => '0',
                'image_path' => url('storage/images/products/0W-20_ECO_LIFE_SPECIAL_HYBRID.png'),
                'category_id' => 2,
            ],
        ];

        // Insert the data into the 'products' table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
