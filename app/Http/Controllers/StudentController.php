<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('class')->get();
        return view('student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classes::all();
        return view('tools.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'std_name' => 'required',
            'std_classes_id' => 'required|integer',
            'std_age' => 'required',
            'std_nis' => 'required',
            'std_gender' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student')->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, $id)
    {
        $student = Student::findOrFail($id);
        $classes = Classes::all();
        return view('tools.edit', compact('student', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::where('std_id', $id)->firstOrFail();
        $request->validate([
            'std_name' => 'required',
            'std_classes_id' => 'required|exists:classes,cls_id',
            'std_age' => 'required|integer|min:1|max:100',
            'std_nis' => 'required|integer|unique:students,std_nis,'.$student->std_id.',std_id',
            'std_gender' => 'required'
        ],);

        $student->update($request->all());
        return redirect()->route('student')->with('success', 'Siswa berhasil diperbarui.');

        // $students->update($request->only(['std_id','std_name','std_classes_id','std_age','std_nis','std_gender']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return  redirect()->route('student')->with('success', 'Siswa berhasil dihapus.');
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
}
