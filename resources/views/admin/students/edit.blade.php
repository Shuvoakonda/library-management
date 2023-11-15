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

                    <h5 class="mb-4">Student Edit</h5>
                    <form class="row g-3" action="{{ route('students.update', $student) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-6">
                            <label for="students_name" class="form-label">Student Name</label>
                            <input type="text"
                                class="form-control  @error('students_name') is-invalid" @enderror id="students_name"
                                placeholder="Students Name"name="students_name" value="{{ $student->students_name }}">

                            @error('students_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="students_id" class="form-label">Student Id</label>
                            <input type="number"
                                class="form-control @error('student_id') is-invalid" @enderror id="students_id"
                                placeholder="Students Id"name="students_id" value="{{ $student->students_id }}">
                            @error('students_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="fathers_name" class="form-label">Fathers Name</label>
                            <input type="text"
                                class="form-control @error('fathers_name') is-invalid" @enderror id="fathers_name"
                                placeholder="Fathers Name"name="fathers_name" value="{{ $student->fathers_name }}">
                            @error('fathers_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="mothers_name" class="form-label">Mother Name</label>
                            <input type="text"
                                class="form-control @error('mothers_name') is-invalid" @enderror id="mothers_name"
                                placeholder="Mothers Name"name="mothers_name" value="{{ $student->mothers_name }}">
                            @error('mothers_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="number"
                                class="form-control @error('contact_number') is-invalid" @enderror id="contact_number"
                                placeholder="Contact Number"name="contact_number" value="{{ $student->contact_number }}">
                            @error('contact_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" class="form-control @error('email') is-invalid" @enderror id="email"
                                    placeholder="Email Address" name="email" value="{{ $student->email }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male"
                                    value="Male"{{ $student->gender == 'Male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                    value="Female"{{ $student->gender == 'Female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                            @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control @error('religion') is-invalid" @enderror id="religion"
                                placeholder="Religion"name="religion" value="{{ $student->religion }}">
                            @error('religion')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="department" class="form-label">Department</label>
                            <input type="text"
                                class="form-control @error('department') is-invalid" @enderror id="department"
                                placeholder="Department"name="department" value="{{ $student->department }}">
                            @error('department')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="session" class="form-label">Session</label>
                            <input type="text" class="form-control @error('session') is-invalid" @enderror id="session"
                                placeholder="Session"name="session" value="{{ $student->session }}">
                            @error('session')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="student_image" class="form-label">Students Image</label>
                            <input type="file"
                                class="form-control @error('student_image') is-invalid" @enderror id="student_image"
                                placeholder="Student Image"name="student_image" value="{{ $student->student_image }}">
                            <img src="{{ Storage::url($student->student_image) }}" alt="" height="100px"
                                width="120px" class="mt-2">
                            @error('student_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <a href="" class="btn btn-light px-4">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection
