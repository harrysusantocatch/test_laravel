<?php

namespace App\Http\Controllers;

use App\Http\APIHelper\StudentAPI;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showAllStudent(){
        $students = StudentAPI::getAllStudent();
        return view('student_page', ['students' => $students]);
    }

    public function showStudentByID($id){
        $student = StudentAPI::getStudentByID($id);
        return view('student_page', ['student' => $student]);
    }

    public function showForm(){
        return view('student_form');
    }

    public function showFormEdit($id){
        $students = StudentAPI::getStudentByID($id);
        return view('student_form_edit', ['students' => $students]);
    }

    public function insertStudent(Request $request){
        $body['name'] = $request->name;
        $body['course'] = $request->course;
        StudentAPI::saveStudent($body);
        return redirect('student');
    }

    public function updateStudent(Request $request){
        $body['name'] = $request->name;
        $body['course'] = $request->course;
        StudentAPI::updateStudent($request->id, $body);
        return redirect('student');
    }

    public function deleteStudent($id){
        StudentAPI::deleteStudent($id);
        return redirect('student');
    }
}
