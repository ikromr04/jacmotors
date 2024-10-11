<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique();
      $table->integer('category_id');
      $table->integer('year');
      $table->string('price')->nullable();
      $table->string('warranty')->nullable();
      $table->string('transmission');
      $table->string('acceleration');
      $table->string('max_speed');
      $table->string('power');
      $table->string('main_image');
      $table->string('exterior_image');
      $table->text('exterior_info');
      $table->string('wheels_tires');
      $table->string('load_capacity')->nullable();
      $table->string('interior_image');
      $table->text('interior_info');
      $table->string('rating')->nullable();
      $table->string('air_bag');
      $table->string('technology_image');
      $table->text('technology_info');
      $table->boolean('test_drive')->default(false);
      $table->string('test_drive_image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('cars');
  }
};
