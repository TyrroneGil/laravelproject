<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{

    public function update(Request $request){

       $student = Student::find($request->id);
        $validated= $request->validate([
            'firstname'=>'required|max:100',
            'middlename'=>'required|max:100',
            'lastname'=>'required|max:100',
            'contact_number'=>'required|max:100',
            'course'=>'required|max:100',
            'year'=>'required|max:100'
        ]);
      $student->update($validated);
        return redirect('/showstudents');
    }

    public function showstudent($id){
        $student = Student::findOrFail($id);

        return view('showstudent',['student'=>$student]);
    }
    public function delete($id){
        Student::find($id)->delete();
        return redirect('/showstudents');
    }
    public function read(){
     return view('home');
    }

    public function showstudents(){
        $students=Student::all();
        return view('table', compact('students'));
    }
    public function create(Request $request){
        $validated= $request->validate([
            'firstname'=>'required|max:100',
            'middlename'=>'required|max:100',
            'lastname'=>'required|max:100',
            'contact_number'=>'required|max:100',
            'course'=>'required|max:100',
            'year'=>'required|max:100'
        ]);
        Student::create($validated);
        return redirect("/showstudents");
    }

}
