<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<5; $i++){
            DB::table('products')->insert([
                "name"=>$faker->name,
                "category_id"=>$faker->numberBetween(1,4),
                "image"=>"https://tuhoctiengtrung.vn/wp-content/uploads/2019/02/hinh-anh-trang-phuc-truyen-thong-cua-trung-quoc-qua-cac-trieu-dai-1.jpg",
                "price"=>$faker->numberBetween($min = 1000, $max = 9000),
                "oldPrice"=>$faker->numberBetween($min = 1000, $max = 9000),
                "quantity"=>$faker->numberBetween(1,50),
                "description"=>$faker->text,
 
            ]);
            }
            for($i=0; $i<5; $i++){
                DB::table('products')->insert([
                    "name"=>$faker->name,
                    "category_id"=>$faker->numberBetween(1,4),
                    "image"=>"https://anh.24h.com.vn/upload/2-2016/images/2016-05-28/1464446407-1464169211-3.jpg",
                    "price"=>$faker->numberBetween($min = 1000, $max = 9000),
                    "oldPrice"=>$faker->numberBetween($min = 1000, $max = 9000),
                    "quantity"=>$faker->numberBetween(1,50),
                    "description"=>$faker->text,
    
                ]);
                }

    }
}
