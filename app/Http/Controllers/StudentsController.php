<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'noreg' => 'required|size:6',
            'email' => 'required|email'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Student Berhasil Di Tambahkan !!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));    
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'noreg' => 'required|size:6',
            'email' => 'required|email'
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'noreg' => $request->noreg ,
                    'tingkatan' => $request->tingkatan,
                    'email' => $request->email
                ]);

                return redirect('/students')->with('status', 'Data Student Berhasil Di Ubah !!');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Student Berhasil Di Hapus !!');
    }
}
