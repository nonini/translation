<?php

namespace nonini\Translation;

class NoTranslator implements TranslatorInterface
{
    public function translate(string $string): string
    {
        return $string;
    }
}
