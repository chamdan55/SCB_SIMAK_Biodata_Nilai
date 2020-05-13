<?php

namespace App\Http\Controllers;

//Ambil dari Student.php
//Menggunakan data tabel yang sama dari tabel students
use App\Student;


use Illuminate\Http\Request;

class ScoreStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('scorestudents.index', compact('students'));
    }

    public function show(Student $student)
    {
        //
        return view('scorestudents.show', compact('student'));
    }

}
