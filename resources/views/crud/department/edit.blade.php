@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-6 offset-md-3 ">
                <a href="{{ route('manage.dept') }}" class="btn btn-outline-dark mt-5">Manage Department</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Department Edit Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.dept')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" value="{{$department->id}}" name="dept_id">
                                <label class="form-label">Department Name</label>
                                <input type="text" value="{{$department->dept_name}}" name="dept_name" class="form-control" placeholder="Department Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Code</label>
                                <input type="text" value="{{$department->dept_code}}" name="dept_code" class="form-control" placeholder="Department Code">
                            </div>
                                <input type="submit" class="btn btn-outline-success form-control " class="form-control" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


