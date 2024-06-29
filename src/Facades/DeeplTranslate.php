<?php

namespace DeeplTranslate\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static translate(string|array $text, string $targetLang, string $sourceLang = null, array $options = []): mixed
 * @method static getSupportedSourceLanguages(): array
 * @method static getSupportedTargetLanguages(): array
 *
 * @see DeeplTranslate\DeeplTranslate
 */
class DeeplTranslate extends Facade
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