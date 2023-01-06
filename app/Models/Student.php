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
        if($request->student_id){
            self::$student = Student::find($request->student_id);
        } else{
            try{
                self::$student = new Student();
            } catch(\Exception $e){
                echo $e->getMessage(); 
             }
        }
        self::$student->student_name  = $request->student_name;
        self::$student->phone         = $request->phone;
        self::$student->email         = $request->email;
        self::$student->dept_id       = $request->dept_id;
        self::$student->address       = $request->address;
        if($request->image){
            if(file_exists(self::$student->image)){
                unlink(self::$student->image);
            }
            self::$student->image = self::saveImage($request);
        }
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

    public function hasDept(){
         return $this->belongsTo(Department::class,'dept_id','id');                  
          
    }
}






