<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $models = [
      [
        "name" => "JAC T9",
        "category_id" => 4,
        "year" => 2024,
        "price" => "$29,000",
        "warranty" => "3 года 100.000 км",
        "transmission" => "Автомат",
        "acceleration" => "2,0 Турбо Объем",
        "max_speed" => "4*4 Полный привод",
        "power" => "231 л.с Мощность ",
        "main_image" => "/images/models/jac-9-main.png",
        "exterior_image" => "/images/models/jac-9-exterior.png",
        "exterior_info" => "<ul><li>Кузов из оцинкованного нержавеющего металла</li><li>Интерактивные ледовые фары</li><li>Антимональное покрытие багажа</li><li>Автоматические складные боковые зеркала</li><li>Roll Bar -защита багажа</li><li>Боковые подножки</li></ul>",
        "wheels_tires" => "Диски+шины-265/60 R18",
        "load_capacity" => "Грузоподьемность 1000кг",
        "interior_image" => "/images/models/jac-9-interior.png",
        "interior_info" => "<ul><li>Кожанный салон</li><li>Кожанный руль</li><li>Подсветка салона</li><li>Мультимедиа 10,4 дюймов</li><li>Панель приборов 7 дюймов</li><li>Климат-контроль</li></ul>",
        "rating" => null,
        "air_bag" => "6 подушек безопасноти",
        "technology_image" => "/images/models/jac-9-technology.png",
        "technology_info" => "<ul><li>Бесключевой доступ</li><li>Камера 360</li><li>Автохолд</li><li>Полный привод</li><li>3 выбора режима (Полный привод, задний привод, Привод на низком обороте)</li><li>4 режима вождения (snow,normal,eco,sport)</li><li>Автоматический склад боковых зеркал</li><li>Обнаружение слепых зон</li><li>Беспроводная зарядка</li><li>Русифицированное ПО</li><li>Сенсорный экран</li></ul>",
        "test_drive" => true,
        "test_drive_image" => '/images/models/jac-9-test-drive.png'
      ],
      [
        "name" => "JAC JS6",
        "category_id" => 3,
        "year" => 2024,
        "price" => "$29,000",
        "warranty" => "3 года 100.000 км",
        "transmission" => "Автомат",
        "acceleration" => "1.5 Турбо Объем",
        "max_speed" => "180 км/ч Макс. Скорость",
        "power" => "174 л.с Мощность ",
        "main_image" => "/images/models/js6-main.png",
        "exterior_image" => "/images/models/js6-exterior.png",
        "exterior_info" => "<ul><li>Кузов из оцинкованного нержавеющего метала</li><li>Интеррактивные ледовые фары</li><li>Приветсвенная подсветка с логотипом</li><li>Двойной выхлоп</li></ul>",
        "wheels_tires" => "Диски+шины-235/55 R18",
        "load_capacity" => null,
        "interior_image" => "/images/models/js6-interior.png",
        "interior_info" => "<ul><li>Подсветка салона</li><li>Сенсорный климат-контроль</li><li>Спортивный ковш сидений</li><li>Мультимедиа 24,6 дюймов</li><li>Панорамная крыша</li><li>Обьем багажника(л) 670-1080</li><li>Умный селектор передач (шайба)</li><li>Кожанный салон</li><li>Электропривод сидений в 4х направлениях</li></ul>",
        "rating" => "5 звезд в рейтинге C-NAP",
        "air_bag" => "6 подушек безопасноти",
        "technology_image" => "/images/models/js6-technology.png",
        "technology_info" => "<ul><li>Беспроводная зарядка</li><li>Бесключевой доступ</li><li>Автоматичесое открытие багажника посредством движения ноги</li><li>Камера 360 \nАвтохолд</li><li>Автопамять сидений</li><li>Автоматический склад боковых зеркал (при закрытии/открытии автомобиля)</li><li>Русификация ПО</li></ul>",
        "test_drive" => true,
        "test_drive_image" => '/images/models/js6-test-drive.png'
      ],
      [
        "name" => "JAC e-JS4",
        "category_id" => 2,
        "year" => 2024,
        "price" => "$29,000",
        "warranty" => "3 года 100.000 км",
        "transmission" => "Автомат",
        "acceleration" => "340 Нм Макс. крутящий момент",
        "max_speed" => "402 км Пробег (NEDS)",
        "power" => "110 л.с Мощность",
        "main_image" => "/images/models/e-js4-main.png",
        "exterior_image" => "/images/models/e-js4-exterior.png",
        "exterior_info" => "<ul><li>Кузов из оцинкованного нержавеющего металла</li><li>Интерактивные LED-фары</li><li>Зеркало заднего вида с автоматическим складыванием</li><li>Дневные ходовые огни</li><li>Автоматическое включение фар</li><li>Функция «Следуй за мной домой»</li><li>Приветственные лампы с логотипом JAC</li></ul>",
        "wheels_tires" => "Диски+шины-215/55 R17",
        "load_capacity" => null,
        "interior_image" => "/images/models/e-js4-interior.png",
        "interior_info" => "<ul><li>Панель приборов 10.2 дюйма</li><li>Склад боковых зеркал</li><li>(Шайба) переключения передач</li><li>Багажник с двойным дном</li><li>Панорамная крыша</li><li>Багажник: 540 л</li><li>Кожанный салон</li><li>Подсветка салона</li><li>Мультируль</li><li>Мультимедиа 10.4 дюймов</li></ul>",
        "rating" => null,
        "air_bag" => "6 подушек безопасноти",
        "technology_image" => "/images/models/e-js4-technology.png",
        "technology_info" => "<ul><li>Бесключевой доступ</li><li>Автохолд</li><li>Start/Stop</li><li>Русифицированное ПО</li><li>Ячеистая батарея (позволяет менять каждую ячейку, а не всю батарею)</li><li>Система кругового обзора 360º</li><li>Сенсорный экран</li></ul>",
        "test_drive" => true,
        "test_drive_image" => '/images/models/e-js4-test-drive.png'
      ],
      [
        "name" => "JAC J7",
        "category_id" => 1,
        "year" => 2024,
        "price" => "$29,000",
        "warranty" => "3 года 100.000 км",
        "transmission" => "Автомат",
        "acceleration" => "1,5 Турбо Объем",
        "max_speed" => "170 км/ч Макс. скорость",
        "power" => "136 л.с Мощность",
        "main_image" => "/images/models/j7-main.png",
        "exterior_image" => "/images/models/j7-exterior.png",
        "exterior_info" => "<ul><li>Легкосплавные диски</li><li>Светодиодная головная оптика</li><li>Функция “Проводи меня домой”</li><li>Дневные ходовые огни (LED)</li><li>Боковые зеркала с электроприводом и обогревом</li><li>Панорамная крыша</li></ul>",
        "wheels_tires" => "Диски+шины- 215/50 R17 ",
        "load_capacity" => null,
        "interior_image" => "/images/models/j7-interior.png",
        "interior_info" => "<ul><li>Климат-контроль</li><li>Экран бортового компьютера</li><li>Цифровая приборная панель</li><li>Сенсорный дисплей мультимедийной системы размером 12,3\"</li><li>Система беcключевого доступа</li><li>Обогрев сиденья водителя</li><li>Регулировка руля по углу наклона и вылету</li><li>Мультифункциональный руль с отделкой из экокожи</li><li>Центральный подлокотник</li><li>Подлокотник для пассажиров 2 ряда</li></ul>",
        "rating" => null,
        "air_bag" => "Кузов Лифтбек",
        "technology_image" => "/images/models/j7-technology.png",
        "technology_info" => "<ul><li>Система кругового обзора 360</li><li>Бесключевой доступ</li><li>Автоматичесое открытие багажника посредством движения ноги</li><li>Антиблокировочная система тормозов (ABS)</li><li>Иммобилайзер</li><li>Электрический стояночный тормоз с функцией Auto Hold</li><li>Система стабилизации (ESC)</li><li>Антиблокировочная система тормозов (ABS)</li></ul>",
        "test_drive" => false,
        "test_drive_image" => null,
      ],
    ];

    foreach ($models as $key => $model) {
      Car::create([
        "name" => $model["name"],
        "category_id" => $model["category_id"],
        "year" => $model["year"],
        "price" => $model["price"],
        "warranty" => $model["warranty"],
        "transmission" => $model["transmission"],
        "acceleration" => $model["acceleration"],
        "max_speed" => $model["max_speed"],
        "power" => $model["power"],
        "main_image" => $model["main_image"],
        "exterior_image" => $model["exterior_image"],
        "exterior_info" => $model["exterior_info"],
        "wheels_tires" => $model["wheels_tires"],
        "load_capacity" => $model["load_capacity"],
        "interior_image" => $model["interior_image"],
        "interior_info" => $model["interior_info"],
        "rating" => $model["rating"],
        "air_bag" => $model["air_bag"],
        "technology_image" => $model["technology_image"],
        "technology_info" => $model["technology_info"],
        "test_drive" => $model["test_drive"],
        "test_drive_image" => $model["test_drive_image"],
      ]);
    }
  }
}
