<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // 一件だけinsertする
        // DB::table('tasks')->insert([
        //     'title' => 'PHP',
        //     'body' => 'PHPは、Hypertext Preprocessorの略です。',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);

        $param = [
            [
                'title' => '平日課題',
                'body' => 'PHPフレームワークLaravelでタスク管理アプリを作成する。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '6日目発表資料',
                'body' => '課題をやり終えたら、発表資料を作成する。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
