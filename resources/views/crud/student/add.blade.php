@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-8 offset-md-2 ">

                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Student Add Form</h2>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('add.student') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="student_name" class="form-control" placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Student Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Student Phone">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Student Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department ID</label>
                                <select name="dept_id" id="">
                                     <option selected>-Select-</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->dept_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea type="text" cols="30" rows="8" name="address" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
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
