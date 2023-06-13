@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить новость</a>
            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>#ID</th>
                <th>Categories</th>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>Date created</th>
                <th>Actions</th>
            </tr>
            @foreach($newsList as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->categories }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->author }}</td>
                    <th>{{ $news->status }}</th>
                    <td>{{ $news->created_at }}</td>
                    <td><a href="#">Edit</a>&nbsp; <a href="javascript:;" style="color:red">Delete</a> </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
