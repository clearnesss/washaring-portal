<?php

namespace App\Util\String;

class LastNameTransformer implements TransformerInterface
{

    public function transform(string $lastName): string
    {
        return mb_strtoupper(trim($lastName));
    }
}
