@extends('admin.dashboard.admin-dashboard')
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
                    <h5 class="mb-4">Add Category</h5>
                    <form class="row g-3" action="{{ route('category_store') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="category-name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category-name"
                                placeholder="Category Name"name="category_name">
                        </div>
                        <div class="col-md-12">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <a href="{{ route('view_category') }}" class="btn btn-light px-4">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection
