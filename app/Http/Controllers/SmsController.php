<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmsController extends Controller
{
    public $student,$dept;
    public function index(){
        return view('crud.student.add',[
            'departments' => Department::all()
        ]);
    }
    public function edit($id)
    {
        $std = Student::find($id);
        $res = $std->dept_id;
        $dept = Department::where('id','!=',$res)->get();
        return view('crud.student.edit', [
            'student' => $std,
            'departments' => $dept,
        ]);
    }
        public function save(Request $request){
        Student::addStudent($request);
        return redirect(route('manage.student'));
    }
    public function manageStudent(){
        $this->student = DB::table('students')
            ->join('departments','students.dept_id','=','departments.id')
            ->select('students.*','departments.dept_name')
            ->get();
        return view('crud.student.manage',[
            'students' =>  $this->student,
        ]);
    }
    
    public function update(Request $request)
    {
        Student::addStudent($request);
        return redirect(route('manage.student'));
    }
    public function delete(Request $request){
        $this->student = Student::find($request->student_id);
        if($this->student->image){
            if(file_exists($this->student->image)){
                unlink($this->student->image);
            }
        }
        $this->student->delete();
        return redirect(route('manage.student'));
    }
}
