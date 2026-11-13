<?php

namespace nonini\Translation;

trait TranslationHelper
{
    public function translate(string $string, ?string $context = null): string
    {
        return self::getTranslator()->translate($string);
    }

    public static function getTranslator(): TranslatorInterface
    {
        return StaticTranslator::get();
    }

    public static function setNoTranslator(): void
    {
        StaticTranslator::set(new NoTranslator());
    }

    public static function setTranslator(TranslatorInterface $translator): void
    {
        StaticTranslator::set($translator);
    }
}
