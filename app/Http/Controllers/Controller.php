<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function getNews(int $id = null): array
    {
        $news = [];
        if ($id === null) {
          for ($i=0; $i < 10; $i++) {
              $news[] = [
                  'id' => $i,
                  'title' => fake()->jobTitle(),
                  'author' => fake()->userName(),
                  'status' => 'draft',
                  'description' => fake()->text(100),
                  'created_at' => now(),
              ];
          }

          return $news;
        }

        return [
            'id' => $id,
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            'status' => 'draft',
            'description' => fake()->text(100),
            'created_at' => now(),
        ];
    }
}
