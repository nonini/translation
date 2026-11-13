<?php

namespace nonini\Translation;

final class StaticTranslator
{
    private static ?TranslatorInterface $translator = null;

    public static function get(): TranslatorInterface
    {
        if (self::$translator === null) {
            self::$translator = new NoTranslator();
        }

        return self::$translator;
    }

    public static function setNoTranslator(): void
    {
        self::set(new NoTranslator());
    }

    public static function set(TranslatorInterface $translator): void
    {
        self::$translator = $translator;
    }
}
