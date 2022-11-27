<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Student extends Model
{
    // Have to define all route to controller, not here
    use HasFactory;
    private static $student;
    public static function addStudent($request){

        self::$student                = new Student();
        self::$student->student_name  = $request->student_name;
        self::$student->phone         = $request->phone;
        self::$student->email         = $request->email;
        self::$student->dept_id       = $request->dept_id;
        self::$student->address       = $request->address;
        self::$student->image         = self::saveImage($request);
        self::$student->save();
    }

    public static function saveImage($request){
        $image     = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'upload/student/';
        $imageUrl  = $directory.$imageName;
        $image->move($directory, $imageName);
        return $imageUrl;
    }
    public static function updateStudent($request){
        self::$student               = Student::find($request->student_id);
        self::$student->student_name = $request->student_name;
        self::$student->phone        = $request->phone;
        self::$student->email        = $request->email;
        self::$student->dept_id      = $request->dept_id;
        self::$student->address      = $request->address;
        if($request->hasfile('image')){
            if(self::$student->image != null){
                unlink(self::$student->image);
            }
            self::$student->image = self::saveImage($request);
        }
        self::$student->save();
    }

    public function hasDept(){
         return $this->belongsTo(Department::class,'dept_id','id');
    }
}






