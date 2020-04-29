<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
      DB::table('books')->truncate();

      // 初期データ用意（列名をキーとする連想配列）
      $books = [
                ['name' => '告白',
                 'price' => 2000,
                 'author' => null],
                ['name' => 'ノルウェイの森',
                 'price' => 3000,
                 'author' => '村上春樹'],
                ['name' => '斜陽',
                 'price' => 2500,
                 'author' => '太宰治']
               ];

      // 登録
      foreach($books as $book) {
        \App\Book::create($book);
      }
    }
}
