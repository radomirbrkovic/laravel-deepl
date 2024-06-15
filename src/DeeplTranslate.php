<?php

namespace DeeplTranslate;

use DeepL\Translator;

class DeeplTranslate
{
    public function __construct(protected Translator $translator)
    {
      $this->translator = new Translator(config('deepl-translate.auth_key'));
    }

  /**
   * @param string|array $text
   * @param string $targetLang
   * @param string|null $sourceLang
   * @param array $options
   * @return mixed
   */
    public function translate(
      string|array $text,
      string $targetLang,
      string $sourceLang=null,
      array $options = []
    ): mixed
    {
      $sourceLang = $sourceLang?: config('deepl-translate.default_lang');
      $options = $options ?? config('deepl-translate.options');

      return $this->translator->translateText($text, $sourceLang, $targetLang, $options);
    }
}