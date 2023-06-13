@extends('layouts.main')
@section('title') Новость "{{ $newsItem->title }}" @parent  @stop
@section('content')
<div class="container">
    <h2>{{ $newsItem->title }}</h2>
    <h4>{{ $newsItem->author }} ({{ $newsItem->created_at }})</h4>
    <p>{!! $newsItem->description !!}</p>
</div>
@endsection
