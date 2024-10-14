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

    view()->composer(['*'], function ($view) {
      $routeName = '';
      $documentTitle = env('APP_NAME');

      if (request()->route()) {
        $routeName = request()->route()->getName();

        if (isset(__('title')[$routeName])) {
          $documentTitle = env('APP_NAME') . ' - ' . __('title')[$routeName];
        }
      }

      return $view->with([
        'routeName' => $routeName,
        'documentTitle' => $documentTitle,
      ]);
    });
  }
}
