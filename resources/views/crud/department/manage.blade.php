@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-8 offset-md-2 ">
                <a href="{{ route('dept') }}" class="btn btn-outline-info mt-5">Add Department</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Manage Department Form</h2>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-responsive-lg">
                            <tr>
                                <th>Sl</th>
                                <th>Department Name</th>
                                <th >Department Code</th>
                                <th>Action</th>
                            </tr>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->dept_name}}</td>
                                    <td>{{$department->dept_code}}</td>
                                    <td>
                                        <a href="{{ route('edit.dept',['id'=>$department->id]) }}" class="btn                                              btn-outline-info">Edit</a>
                                        <form action="{{route('delete.dept')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="dept_id" value="{{$department->id}}">
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
