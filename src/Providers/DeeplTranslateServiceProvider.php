<?php

namespace DeeplTranslate\Providers;

use Illuminate\Support\ServiceProvider;

class DeeplTranslateServiceProvider extends ServiceProvider
{
  public function boot() {
      $this->registerConfig();
  }

  /**
   * Register config.
   *
   * @return void
   */
  private function registerConfig()
  {
    $this->publishes([
      __DIR__ . '/../../config/deepl-translate.php' => config_path('deepl-translate.php'),
    ], 'genera');

    $this->mergeConfigFrom(__DIR__ . '/../../config/deepl-translate.php', 'deepl-translate');
  }


}