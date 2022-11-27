@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-8 offset-md-2 ">
                <a href="{{ route('student') }}" class="btn btn-outline-info mt-5">Add Student</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Manage Student Form</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-responsive-lg">
                            <tr>
                                <th>Sl</th>
                                <th>Student Name</th>
                                <th>Student Phone</th>
                                <th>Student Email</th>
                                <th>Student Department</th>
                                <th>Student Address</th>
                                <th>Student Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->student_name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->dept_name}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>
                                        <img src="{{ asset($student->image) }}" class="img-fluid" alt="">

                                    </td>
                                    <td>
                                        <a href="{{ route('edit.student',['id'=>$student->id]) }}" class="btn                                              btn-outline-info">Edit</a>
                                        <form action="{{route('delete.student')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{$student->id}}">
                                            <button onclick="return confirm('Are You Sure?')" class="btn btn-outline-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
