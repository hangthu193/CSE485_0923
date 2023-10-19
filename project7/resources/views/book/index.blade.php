@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="container mx-auto">
        @if(session('success'))
            <div class="toast bg-success d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
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
            <h1 class="text-center">Books List</h1>
            <a href="{{route('books.create')}}" class="btn btn-success d-flex align-items-center">Add New Book</a>
        </div>
        <table class="table table-striped mt-1">
            <thead>
            <!--        table row-->
            <tr class="border">
                <!--            table heading-->
                <th>ID</th>
                <th>Author ID</th>
                <th>Title</th>
                <th colspan="1" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody >
            <?php ?>
            @foreach ($books as $book)
                <tr class="border">
                    <th>{{$book->id}}</th>
                    <td>{{$book->author_id}}</td>
                    <td>{{$book->title}}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('books.destroy',$book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Do you want to delete ')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection