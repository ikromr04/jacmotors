<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $news = [
      [
        'category' => 'НОВОСТИ',
        'title' => "Последние новости \n Jac Motors",
        'img' => 'news1.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur',
      ],
      [
        'category' => 'СПЕЦПРЕДЛОЖЕНИЕ',
        'title' => 'Кредит по низкой процентной ставке и без предоплаты',
        'img' => 'news2.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur',
      ],
      [
        'category' => 'НОВОСТИ',
        'title' => "Последние новости \n Jac Motors",
        'img' => 'news3.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur Lorem ipsum dolor sit amet consectetur. Venenatis amet quis ante pharetra iaculis aenean a id consectetur. Vitae ut consectetur',
      ],
    ];

    foreach ($news as $new) {
      News::create([
        'category' => $new['category'],
        'title' => $new['title'],
        'img' => $new['img'],
        'description' => $new['description'],
      ]);
    }
  }
}
