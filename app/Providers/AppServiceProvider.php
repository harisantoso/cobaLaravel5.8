<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

/**
 * jika migrasinya error tabahkan
 * use Illuminate\Support\Facades\Schema;
 */


class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    /**
     * jika migrasinya error tabahkan
     * Schema::defaultStringLength(255);
     */
  }
}
