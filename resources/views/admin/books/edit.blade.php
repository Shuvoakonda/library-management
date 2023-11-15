@extends('admin.layouts.app')
@section('content')
    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Book edit</h5>
                    <form class="row g-3" action="{{ route('books.update',$book) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-6">
                            <label for="book_category" class="form-label">Book Category</label>
                            <input type="text" class="form-control" id="book_category"
                                placeholder="Book Category"name="book_category" value="{{ $book->book_category }}">
                        </div>
                        <div class="col-md-6">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="text" class="form-control" id="book_name"
                                placeholder="Book Name"name="book_name"value="{{ $book->book_name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="book_author" class="form-label">Book Author</label>
                            <input type="text" class="form-control" id="book_author"
                                placeholder="Book Author"name="book_author"value="{{ $book->book_author }}">
                        </div>
                        <div class="col-md-6">
                            <label for="publishing_date" class="form-label">Publishing Date</label>
                            <input type="text" class="form-control" id="publishing_date"
                                placeholder="Publishing Date"name="publishing_date"value="{{ $book->publishing_date }}">
                        </div>
                        <div class="col-md-6">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" placeholder="Stock"name="stock"value="{{ $book->stock }}">
                        </div>

                        <div class="col-md-6">
                            <label for="book_cover" class="form-label">Book cover</label>
                            <input type="file" class="form-control" id="book_cover"
                                placeholder="Book Cover"name="book_cover"value="{{ $book->book_cover }}">
                                <img src="{{Storage::url($book->book_cover) }}" alt="" height="100px" width="100px" class="mt-2">
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <a href="{{ route('books.index') }}" class="btn btn-light px-4">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection
