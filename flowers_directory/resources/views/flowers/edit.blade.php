@extends('layouts.base')
@section('title')
    Edit
@endsection
@section('main-content')
    <div class="container">
        <h1 class="text-center my-3">Edit Flower</h1>
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Flower</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('flowers.update', $flower->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="Name" class="form-label">ID</label>
                <input type="text" id="id" name="id" class="form-control" value="{{$flower->id}}" disabled readonly>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$flower->name}}" required>
            </div>
            <div class="mb-3 col">
                <label for="Name" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$flower->description}}" required>
            </div>
            
            <div class="mb-3 col">
                <label for="Name" class="form-label">Image</label>
                <input type="text" id="image" name="image" class="form-control" value="{{$flower->image}}" required>
            </div>
            <div class="mb-3 col">
                <label for="birthday" class="form-label">Origin</label>
                <input type="text" id="origin" name="origin" class="form-control" value="{{$flower->origin}}" required>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="{{route('flowers.index')}}">Cancel</a>
            </div>
        </form>

    </div>
@endsection
