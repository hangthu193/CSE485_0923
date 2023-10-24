@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="container mx-auto">
        @if(session('success'))
            <div class="toast bg-primary d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Notice</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('success')}}
                </div>
            </div>
        @endif

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
        <div class="d-flex my-3" style="justify-content: space-between">
            <h1 class="text-center">Flowers List</h1>
            <a href="{{route('flowers.create')}}" class="btn btn-primary d-flex align-items-center">Add New Flower</a>
        </div>
        <table class="table table-bordered mt-1 table-hover">
            <thead>
            <!--        table row-->
            <tr class="border table-primary">
                <!--            table heading-->
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Origin</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody >
                <tr class="border">
                    <th scope="row">{{$flower->id}}</th>
                    <td>{{$flower->name}}</td>
                    <td>{{$flower->description}}</td>
                    <td>{{$flower->origin}}</td>   
                    <td>{{$flower->image}}</td>
     
                </tr>


            </tbody>
        </table>
        
    </div>

@endsection
