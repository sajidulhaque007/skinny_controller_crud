@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-6 offset-md-3 ">
                <a href="{{ route('manage.student') }}" class="btn btn-outline-dark mt-5">Manage Student</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Student Edit Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" value="{{$student->id}}" name="student_id">
                                <label class="form-label">Student Name</label>
                                <input type="text" value="{{$student->student_name}}" name="student_name" class="form-control" placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Student Phone</label>
                                <input type="text" value="{{$student->phone}}" name="phone" class="form-control" placeholder="Student Phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" value="{{$student->email}}" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select name="dept_id" id="">
                                    <option value="{{ $student->dept_id }}">{{ $student->hasDept->dept_name }}</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->dept_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="{{$student->address}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($student->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-outline-success form-control " class="form-control" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


