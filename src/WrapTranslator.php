<?php

namespace nonini\Translation;

use RuntimeException;

class WrapTranslator implements TranslatorInterface
{
    /** @var callable */
    private $callback;

    private TranslatorInterface $wrapped;

    public function __construct(TranslatorInterface $wrapped, callable $callback)
    {
        $this->wrapped = $wrapped;
        $this->callback = $callback;
    }

    public function translate(string $string): string
    {
        $result = call_user_func_array(
            $this->callback,
            [$this->wrapped->translate($string)]
        );

        if (! is_string($result)) {
            throw new RuntimeException('Callback gave no string for translation: ' . $string);
        }

        return $result;
    }
}
