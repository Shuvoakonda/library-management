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

                    <h5 class="mb-4">Book Add</h5>
                    <form class="row g-3" action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="book_category" class="form-label">Book Category</label>
                            <input type="text"
                                class="form-control  @error('book_category') is-invalid" @enderror id="book_category"
                                placeholder="Book Category"name="book_category">

                            @error('book_category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="text" class="form-control @error('book_name') is-invalid" @enderror id="book_name"
                                placeholder="Book Name"name="book_name">
                                @error('book_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="book_author" class="form-label">Book Author</label>
                            <input type="text" class="form-control @error('book_author') is-invalid" @enderror id="book_author"
                                placeholder="Book Author"name="book_author">
                                @error('book_author')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="publishing_date" class="form-label">Publishing Date</label>
                            <input type="text" class="form-control @error('publishing_date') is-invalid" @enderror id="publishing_date"
                                placeholder="Publishing Date"name="publishing_date">
                                @error('publishing_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control @error('stock') is-invalid" @enderror id="stock" placeholder="Stock"name="stock">
                            @error('stock')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                  
                        <div class="col-md-6">
                            <label for="book_cover" class="form-label">Book cover</label>
                            <input type="file" class="form-control @error('book_cover') is-invalid" @enderror id="book_cover"
                                placeholder="Book Cover"name="book_cover">
                                @error('book_cover')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
