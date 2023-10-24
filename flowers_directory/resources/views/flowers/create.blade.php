@extends('layouts.base')
@section('title')
    Create
@endsection
@section('main-content')
    <h1 class="text-center my-3">Add New Flower</h1>
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

        <form action="{{route('flowers.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 col">
                <label for="Name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control" required>
                
            </div>
            <div class="mb-3 col">
                <label for="birthday" class="form-label">Origin</label>
                <input type="text" id="origin" name="origin" class="form-control" required>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="{{route('flowers.index')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection