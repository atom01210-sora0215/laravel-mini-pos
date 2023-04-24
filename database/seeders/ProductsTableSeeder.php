<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use DateTime;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [  
                'name' => '牛カルビ',
                'description' => '国産牛！',
                'price' => 1500,
                'category_id' => 1,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '牛ロース',
                'description' => '国産牛！',
                'price' => 2000,
                'category_id' => 1,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '牛ハラミ',
                'description' => '国産牛！',
                'price' => 1800,
                'category_id' => 1,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '牛ホルモン',
                'description' => '国産牛！',
                'price' => 1200,
                'category_id' => 1,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '豚カルビ',
                'description' => '国産豚！',
                'price' => 1800,
                'category_id' => 2,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '豚肩ロース',
                'description' => '国産豚！',
                'price' => 1300,
                'category_id' => 2,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '豚トロ',
                'description' => '国産豚！',
                'price' => 1500,
                'category_id' => 2,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '鶏モモ',
                'description' => '鶏モモ！',
                'price' => 1202,
                'category_id' => 3,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '鶏なんこつ',
                'description' => '鶏なんこつ！',
                'price' => 1000,
                'category_id' => 3,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '砂肝',
                'description' => '砂肝！',
                'price' => 800,
                'category_id' => 3,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ソーセージ',
                'description' => 'ソーセージ',
                'price' => 900,
                'category_id' => 3,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'つくね',
                'description' => 'つくね',
                'price' => 600,
                'category_id' => 3,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '牛タン',
                'description' => '牛タン！',
                'price' => 1800,
                'category_id' => 4,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ミスジ',
                'description' => 'ミスジ！',
                'price' => 1500,
                'category_id' => 4,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '焼き野菜',
                'description' => '焼き野菜！',
                'price' => 1200,
                'category_id' => 4,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ユッケ',
                'description' => 'ユッケ！',
                'price' => 1800,
                'category_id' => 5,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '冷麺',
                'description' => '冷麺！',
                'price' => 800,
                'category_id' => 5,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ナムル',
                'description' => 'ナムル！',
                'price' => 500,
                'category_id' => 5,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'たまごスープ',
                'description' => 'たまごスープ！',
                'price' => 600,
                'category_id' => 5,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'サラダ',
                'description' => 'サラダ！',
                'price' => 1000,
                'category_id' => 5,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'アイスクリーム',
                'description' => 'アイスクリーム！',
                'price' => 600,
                'category_id' => 6,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'わらびもち',
                'description' => 'わらびもち！',
                'price' => 800,
                'category_id' => 6,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '発泡酒',
                'description' => '発泡酒！',
                'price' => 500,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'グラスワイン',
                'description' => 'グラスワイン！',
                'price' => 700,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '芋焼酎',
                'description' => '芋焼酎！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '麦焼酎',
                'description' => '麦焼酎！',
                'price' => 500,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ハイボール',
                'description' => 'ハイボール！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'カシスソーダ',
                'description' => 'カシスソーダ！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'カシスオレンジ',
                'description' => 'カシスオレンジ！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'レモンサワー',
                'description' => 'レモンサワー！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '柚子サワー',
                'description' => '柚子サワー！',
                'price' => 600,
                'category_id' => 7,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ノンアルコールビール',
                'description' => 'ノンアルコールビール！',
                'price' => 500,
                'category_id' => 8,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'コーラ',
                'description' => 'コーラ！',
                'price' => 300,
                'category_id' => 8,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'ウーロン茶',
                'description' => 'ウーロン茶！',
                'price' => 400,
                'category_id' => 8,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'カルピス',
                'description' => 'カルピス！',
                'price' => 500,
                'category_id' => 8,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => 'オレンジジュース',
                'description' => 'オレンジジュース！',
                'price' => 400,
                'category_id' => 8,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '瓶ビール',
                'description' => '瓶ビール！',
                'price' => 600,
                'category_id' => 9,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],[
                'name' => '中ジョッキ',
                'description' => '中ジョッキ！',
                'price' => 500,
                'category_id' => 9,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ]
        ]);
    }
}

