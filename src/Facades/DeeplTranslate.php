<?php

namespace DeeplTranslate\Facades;

use Illuminate\Support\Facades\Facade;


class DeeplTranslate
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'deepl-translate';
  }
}