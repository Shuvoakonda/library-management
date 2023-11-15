@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4>Assign Book Update</h4>
            <form action="{{ route('assign.store') }}" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" name="students_id">
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->students_name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectGrid">Student Select</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" name="books_id">
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->book_name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectGrid">Books Select</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <label for="date">Delivary Date</label>
                        <input type="date" name="delivary_date" id="date">
                    </div>
                    <div><button type="submit" class="btn btn-success"> Submit</button></div>

                </div>
            </form>
        </div>
    </div>
@endsection
