<?php

namespace App\Util\String;

interface TransformerInterface
{
    public function transform(string $value) : string;
}