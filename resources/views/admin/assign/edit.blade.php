@extends('admin.layouts.app')
@section('content')
    <form action="{{ route('assign.update', $assignbook) }}" method="POST">
        @csrf
        @method('put')
        <div class="row g-2">
            <div class="col-md">
                
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" name="students_id">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}" @if($assignbook->students_id ==  $student->id) selected @endif>{{ $student->students_name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelectGrid">Student Select</label>
                </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" name="books_id">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}" @if($assignbook->books_id ==  $book->id) selected @endif>{{ $book->book_name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelectGrid">Books Select</label>
                </div>
            </div>

            <div class="col-md">
                <label for="date">Delivary Date</label>
                <input type="date" name="delivary_date" id="date" value="{{ $assignbook->delivary_date }}">
            </div>
            <div><button type="submit" class="btn btn-success"> Submit</button></div>

        </div>
    </form>
@endsection
