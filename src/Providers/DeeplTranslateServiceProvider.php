<?php

namespace DeeplTranslate\Providers;

use DeeplTranslate\DeeplTranslate;
use Illuminate\Support\ServiceProvider;

class DeeplTranslateServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->registerConfig();

    $this->app->singleton('deepl-translate', function () {

      return new DeeplTranslate();
    });
  }

  /**
   * Register config.
   *
   * @return void
   */
  private function registerConfig()
  {
    $this->publishes([
      __DIR__ . '/../config/deepl-translate.php' => config_path('deepl-translate.php'),
    ]);

  }


}