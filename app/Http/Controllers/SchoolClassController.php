<?php
namespace App\Http\Controllers;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
public function index()
{
$schoolClasses = SchoolClass::all();
return view('school_classes.index', compact('schoolClasses'));
}
public function create()
{
return view('school_classes.create');
}
public function store(Request $request)
{
$request->validate(['name' => 'required|unique:school_classes']);
SchoolClass::create($request->all());
return redirect()->route('school-classes.index')->with('success', 'Data kelas berhasil ditambahkan.');
}
public function edit(SchoolClass $schoolClass)
{
return view('school_classes.edit', compact('schoolClass'));
}
public function update(Request $request, SchoolClass $schoolClass)
{
$request->validate(['name' => 'required|unique:school_classes,name,' . $schoolClass->id]);
$schoolClass->update($request->all());
return redirect()->route('school-classes.index')->with('success', 'Data kelas berhasil diperbarui.');
}
public function destroy(SchoolClass $schoolClass)
{
$schoolClass->delete();
return redirect()->route('school-classes.index')->with('success', 'Data kelas berhasil dihapus.');
}
}