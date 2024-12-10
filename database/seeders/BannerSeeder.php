<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $banners = [
      [
        "banner" => "home",
        "description" => "Льготный кредит % \nпо низкой процентной ставке",
        "image" => "/images/banners/e-JS4-019.png",
        "link" => '/offers',
      ],
      [
        "banner" => "home",
        "description" => "Твой момент свободы",
        "image" => "/images/banners/2025.png",
        "link" => '/models/JAC%20T9',
      ],
      [
        "banner" => "home",
        "description" => "Твой момент стиля",
        "image" => "/images/banners/JS6-EX-057.png",
        "link" => '/models/JAC%20JS6',
      ],
    ];

    foreach ($banners as $key => $banner) {
      Banner::create([
        "banner" => $banner["banner"],
        "description" => $banner["description"],
        "image" => $banner["image"],
        "link" => $banner["link"],
      ]);
    }
  }
}
