<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index(){
        $students = Student::latest()->paginate(5);

        return view('students.index', compact('students'));
    }


    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'batch' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Profile Created!');
    }

    public function edit(Student $student){
        return view('students.edit',compact('student'));

    }

    public function update(Request $request, Student $student){
        $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'batch' => 'required'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Updated!');
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Deleted!');


    }

}
