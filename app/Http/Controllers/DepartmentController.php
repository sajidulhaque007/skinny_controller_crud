<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $department;
    public function index(){
        return view('crud.department.add');
    }
    public function addDepartment(Request $request){

        $this->department = new Department();
        $this->department->dept_name = $request->dept_name;
        $this->department->dept_code = $request->dept_code;
        $this->department->save();
        return redirect(route('manage.dept',[
//            'departments'=>$this->department
        ]));
    }
    public function manageDept(){
        $this->department = Department::all();
        return view('crud.department.manage',[
            'departments'=>$this->department
        ]);
    }

    public function edit($id)
    {
        $this->department = Department::find($id);
        return view('crud.department.edit', [
            'department' => $this->department,
        ]);
    }
    public function update(Request $request){
        $this->department = Department::find($request->dept_id);
        $this->department->dept_name = $request->dept_name;
        $this->department->dept_code = $request->dept_code;
        $this->department->save();
        return redirect(route('manage.dept'));
    }
    public function delete(Request $request){
        $this->department = Department::find($request->dept_id);
        $this->department->delete();
        return redirect(route('manage.dept'));
    }
}
