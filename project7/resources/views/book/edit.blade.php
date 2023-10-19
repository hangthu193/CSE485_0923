@extends('layouts.base')
@section('title')
    Edit
@endsection
@section('main-content')
    <div class="container">
        <h1 class="text-center my-3">Edit Author</h1>
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Author</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('books.update', $book->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="Name" class="form-label">Author ID</label>
                <input type="text" id="author_id" name="author_id" class="form-control" value="{{$book->author_id}}"
                       required>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$book->title}}"
                       required>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">Save</button>
                <a class="btn btn-danger" href="{{route('books.index')}}">Cancel</a></div>
        </form>

    </div>
@endsection