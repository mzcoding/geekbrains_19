<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;
use App\Queries\NewsQueryBuilder;
use Illuminate\Contracts\View\View;

final class NewsController extends Controller
{
    public function index(NewsQueryBuilder $newsQueryBuilder): View
    {
        return view('news.index', ['news' => $newsQueryBuilder->getActiveNews()]);
    }

    public function show(News $news): View
    {
        return view('news.show', ['newsItem' => $news]);
    }
}
