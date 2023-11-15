@extends('admin.layouts.app')
@section('content')
    <h6 class="mb-0 text-uppercase">Students View</h6>
    <a href="{{ route('students.create') }}" class="btn btn-primary mt-3">Students Add</a>
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
                            <th>Student Name</th>
                            <th>Student Id</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Department</th>
                            <th>Session</th>
                            <th>Student Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($students as $student)
                            <tr class="text-center">
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->students_name }}</td>
                                <td>{{ $student->students_id }}</td>
                                <td>{{ $student->fathers_name }}</td>
                                <td>{{ $student->mothers_name }}</td>
                                <td>{{ $student->contact_number }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->religion }}</td>
                                <td>{{ $student->department }}</td>
                                <td>{{ $student->session }}</td>
                                <td><img class="rounded-circle" height="50" width="50" style="object-fit: cover"
                                        src="{{ Storage::url($student->student_image) }}" alt=""></td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-success mb-3"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{ route('students.delete', $student) }}" method="POST">
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
