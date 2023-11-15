@extends('admin.layouts.app')
@section('content')
    <h6 class="mb-0 text-uppercase">Assign Books </h6>
    <a href="{{ route('assign.books') }}" class="btn btn-primary mt-3">Assign Book Add</a>
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
                            <th>Students_Name</th>
                            <th>Book_Name</th>
                            <th>Created_at</th>
                            <th>Dalivary_date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($assign_show as $show)
                            <tr class="text-center">
                                <td>{{ $show->id }}</td>
                                <td>{{ $show->student ? $show->student->students_name : '' }}</td>

                                <td>{{ $show->book ? $show->book->book_name : '' }}</td>
                                <td>{{ $show->created_at }}</td>
                                <td>{{ $show->delivary_date }}</td>

                                <td>
                                    <a href="{{ route('assign.edit', $show) }}" class="btn btn-sm btn-success mb-3 "><i class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{ route('assign.delete',$show) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
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
