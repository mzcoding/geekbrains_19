@extends('layouts.main')
@section('title') Список новостей @parent  @stop
@section('content')
<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($news as $newsItem)
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ $newsItem->image }}" />

                <div class="card-body">
                    <p><strong><a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title }}</a></strong></p>
                    <p class="card-text">
                        {!! $newsItem->description !!}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('news.show', ['id' => $newsItem->id]) }}" type="button" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                        </div>
                        <small class="text-muted">{{ $newsItem->author }} ({{ $newsItem->created_at }})</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h2>Новостей нет</h2>
        @endforelse
    </div>
</div>
@endsection
