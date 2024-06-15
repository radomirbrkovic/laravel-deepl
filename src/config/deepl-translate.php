<?php

return [
  'auth_key' => env('DEEPL_AUTH_KEY', ''),
  'default_lang' => env('APP_LANG', 'en'),
  'options' => [
    'split_sentences' => 'on',
    'preserve_formatting' => false,
    'formality' => 'default'
  ],
];