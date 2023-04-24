<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_ids = [
            1, 2, 3, 4
        ];

        $food_service_categories = [
            '牛', '豚', '鶏、他'
        ];

        $food_side_categories = [
            '焼き物', '単品', 'デザート'
        ];

        $drink_service_categories = [
            'アルコール', 'ソフトドリンク'
        ];

        $drink_side_categories = [
            'アサヒスーパードライ'
        ];

        foreach ($major_category_ids as $major_category_id) {
            if ($major_category_id == 1) {
                foreach ($food_service_categories as $food_service_category) {
                    Category::create([
                        'name' => $food_service_category,
                        'description' => $food_service_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }

            if ($major_category_id == 2) {
                foreach ($food_side_categories as $food_side_category) {
                    Category::create([
                        'name' => $food_side_category,
                        'description' => $food_side_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }

            if ($major_category_id == 3) {
                foreach ($drink_service_categories as $drink_service_category) {
                    Category::create([
                        'name' => $drink_service_category,
                        'description' => $drink_service_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }

            if ($major_category_id == 4) {
                foreach ($drink_side_categories as $drink_side_category) {
                    Category::create([
                        'name' => $drink_side_category,
                        'description' => $drink_side_category,
                        'major_category_id' => $major_category_id
                    ]);
                }
            }
        }
    }
}
