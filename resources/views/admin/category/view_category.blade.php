@extends('admin.dashboard.admin-dashboard')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h6 class="mb-0 text-uppercase">View Category</h6>
    <a href="{{ route('add_category') }}" class="btn btn-primary mt-3">Add Category</a>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="{{ route('edit_category', $category) }}" class="btn btn-success">Edit</a>
                                    {{-- <form action="{{ route('delete_category',$category) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"class="btn btn-danger">Delete</button>
                                </form> --}}
                                    <a href="{{ route('delete_category', $category) }}"class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
