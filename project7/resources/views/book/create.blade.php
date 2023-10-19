@extends('layouts.base')
@section('title')
    Create
@endsection
@section('main-content')
    <h1 class="text-center my-3">Add New Book</h1>
    <div class="container">
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Notice</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('books.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="Name" class="form-label">Author ID</label>
                <input type="text" id="author_id" name="author_id" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="{{route('books.index')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection