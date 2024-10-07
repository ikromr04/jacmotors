<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $categories = ['Седаны', 'Электромобили', 'Кроссоверы', 'Пикапы'];

    foreach ($categories as $key => $category) Category::create(['name' => $category]);
  }
}
