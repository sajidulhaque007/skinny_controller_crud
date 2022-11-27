@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            {{--         offset does col centering and aligning --}}
            {{--        <div class="col-md-8 offset-md-2">--}}
            <div class="col-md-8 offset-md-2 ">

                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Department Add Form</h2>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('add.department') }}" method="post">
                            @csrf
                            <div class="mb-3">

                                <label class="form-label">Department Name</label>
                                <input type="text" name="dept_name" class="form-control" placeholder="Department Name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Department Code</label>
                                <input type="text" name="dept_code" class="form-control" placeholder="Department Code">
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
