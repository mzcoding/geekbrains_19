<?php

declare(strict_types=1);

namespace App;

class SomeClass implements SomeInterface
{
    private string $string;
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getData(): array
    {
        return [1,2,3,4,5,6,7, $this->string];
    }
}
