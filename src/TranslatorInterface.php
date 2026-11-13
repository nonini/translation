<?php

namespace nonini\Translation;

interface TranslatorInterface
{
    public function translate(string $string): string;
}
