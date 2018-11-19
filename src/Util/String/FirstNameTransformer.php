<?php

namespace App\Util\String;

class FirstNameTransformer implements TransformerInterface
{

    public function transform(string $firstName): string
    {
        $firstName = mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_substr($firstName, 1);
        $firstName = implode('-', array_map([$this, 'mb_ucfirst'], explode('-', $firstName)));
        $firstName = implode(' ', array_map([$this, 'mb_ucfirst'], explode(' ', $firstName)));
        return trim($firstName);
    }
}
