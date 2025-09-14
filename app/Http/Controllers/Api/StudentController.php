<?php 
namespace App\Http\Controllers\Api; 
use App\Http\Controllers\Controller; 
use App\Models\Student; 
use Illuminate\Http\Request; 
class StudentController extends Controller 
{ 
public function index() 
{ 
$students = Student::with('schoolClass')->get(); 
return response()->json($students); 
    } 
 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'nis' => 'required|unique:students', 
            'nama' => 'required', 
            'school_class_id' => 'required|exists:school_classes,id', 
            'tanggal_lahir' => 'required|date', 
            'gender' => 'required', 
            'alamat' => 'required', 
            'email' => 'required|email|unique:students' 
        ]); 
         
        $student = Student::create($request->all()); 
        return response()->json($student, 201); // 201 = Created 
    } 
 
    public function show(Student $student) 
    { 
        $student->load('schoolClass'); 
        return response()->json($student); 
    } 
 
    public function update(Request $request, Student $student) 
    { 
        $request->validate([ 
            'nama' => 'required', 
            'school_class_id' => 'required|exists:school_classes,id', 
            'tanggal_lahir' => 'required|date', 
            'gender' => 'required', 
            'alamat' => 'required', 
            'email' => 'required|email' 
        ]); 
 
        $student->update($request->all()); 
        return response()->json($student); 
    } 
 
    public function destroy(Student $student) 
    { 
        $student->delete(); 
        return response()->json(null, 204); // 204 = No Content 
    } 
}