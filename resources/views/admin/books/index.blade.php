@extends('admin.layouts.app')
@section('content')
<h6 class="mb-0 text-uppercase">View Books</h6>
<a href="{{ route('books.create') }}" class="btn btn-primary mt-3">Book Add</a>
<hr>
<div class="card">
    <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
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
                            <tr class="text-center">
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->book_category }}</td>
                                <td>{{ $book->book_name }}</td>
                                <td>{{ $book->book_author }}</td>
                                <td>{{ $book->publishing_date }}</td>
                                <td><img class="rounded-circle" height="50" width="50" style="object-fit: cover"
                                        src="{{ Storage::url($book->book_cover) }}" alt=""></td>
                                <td>{{ $book->stock }}</td>
                                <td>{{ $book->slug }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-success mb-3"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{ route('books.delete', $book) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger "><i class="fa-solid fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
