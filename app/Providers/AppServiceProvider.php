<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Schema::defaultStringLength(191);
    Paginator::useBootstrap();

    view()->composer(['components.layouts.app'], function ($view) {
      $routeName = request()->route()->getName();

      $documentTitle = env('APP_NAME') . ' - ' . __('documentTitle')[$routeName];

      return $view->with([
        'routeName' => $routeName,
        'documentTitle' => $documentTitle,
      ]);
    });
  }
}
