@extends('admin.layouts.app')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<h6 class="mb-0 text-uppercase">View Books</h6>
<a href="{{ route('book') }}" class="btn btn-primary mt-3">Book Add</a>
<hr>
<div class="card">
<div class="card-body">
    <div class="table-responsive">
        <table id="example2" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Book Category</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Publishing Date</th>
                    <th>Book Cover</th>
                    <th>Stock</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->book_category }}</td>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->book_author }}</td>
                        <td>{{ $book->publishing_date }}</td>
                        <td><img height="80" width="80" style="object-fit: cover" src="{{ Storage::url($book->book_cover) }}" alt=""></td>
                        <td>{{ $book->stock }}</td>
                        <td>{{ $book->slug }}</td>
                        <td>
                            <a href="{{ route('edit_book',$book) }}" class="btn btn-success">Edit</a>
                            
                            <a href="{{ route('delete_book',$book) }}"class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</div>

@endsection