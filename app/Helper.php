<?php

declare(strict_types=1);

namespace App;

class Helper
{
   public static function someClass(): SomeClass
   {
       return resolve(SomeInterface::class);
   }
}
