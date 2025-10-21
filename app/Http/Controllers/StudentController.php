<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\Api\StoreStudentRequest; 
use App\Http\Requests\Api\UpdateStudentRequest; 
use App\Http\Resources\StudentResource; 

class StudentController extends Controller
{
    // READ: Menampilkan semua data siswa
    public function index() 
    { 
        $students = Student::with('schoolClass')->get(); 
        return StudentResource::collection($students); 
    } 
 
    public function store(StoreStudentRequest $request) 
    { 
        $student = Student::create($request->validated()); 
        return new StudentResource($student); 
    } 
     
    public function show(Student $student) 
    { 
        return new StudentResource($student->load('schoolClass')); 
    } 
 
    public function update(UpdateStudentRequest $request, Student $student) 
    { 
        $student->update($request->validated()); 
        return new StudentResource($student); 
    } 
    public function destroy(Student $student) 
    { 
        $student->delete(); 
        return response()->json(null, 204);
    }
}