<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Using PHP Basic
        $student = new Student;
        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->golongan_darah = $request->golongan_darah;
        $student->tinggi_badan = $request->tinggi_badan;
        $student->berat_badan = $request->berat_badan;
        $student->alamat = $request->alamat;
        $student->asrama = $request->asrama;

        $student->nama_ayah = $request->nama_ayah;
        $student->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $student->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $student->pekerjaan_ayah = $request->pekerjaan_ayah;
        $student->alamat_ayah = $request->alamat_ayah;

        $student->nama_ibu = $request->nama_ibu;
        $student->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $student->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $student->pekerjaan_ibu = $request->pekerjaan_ibu;
        $student->alamat_ibu = $request->alamat_ibu;

        $student->save();

        /** Using Mass Assignment from Laravel (cara 1)*/
        // Student::create([
        //      'nama' => $request->nama,
        //      'nis' => $request->nis,
        //      'jenis_kelamin' => $request->jenis_kelamin,
        //      'golongan_darah' => $request->golongan_darah,
        //      'tinggi_badan' => $request->tinggi_badan,
        //      'berat_badan' => $request->berat_badan,
        //      'alamat' => $request->alamat,
        //      'asrama' => $request->asrama

        //      ]);

        /** Validation (using Laravel) */
        //  $request->validate([
        //      'nama' => 'required',
        //      'nis' => 'required|size:10|distinct',
        //      'jenis_kelamin' => 'required',
        //      'golongan_darah' => 'required',
        //      'tinggi_badan' => 'required',
        //      'berat_badan' => 'required',
        //      'alamat' => 'required',
        //      'asrama' => 'required'
        //  ]);

        // /** Using Mass Assignment from Laravel (cara 2) */
        // Student::create($request->all());

        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:10|distinct',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'alamat' => 'required',
            'asrama' => 'required',

            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',

            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'golongan_darah' => $request->golongan_darah,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'alamat' => $request->alamat,
                'asrama' => $request->asrama,


                'nama_ayah' => $request->nama_ayah,
                'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'alamat_ayah' => $request->alamat_ayah,

                'nama_ibu' => $request->nama_ibu,
                'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'alamat_ibu' => $request->alamat_ibu

            ]);

        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        //return $student;
        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Dihapus!');
    }
}
