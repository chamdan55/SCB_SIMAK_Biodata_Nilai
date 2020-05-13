<?php
/** Model dari tabel student */
/** Model ini digunakan pada halaman biodata siswa */

namespace App;

use Illuminate\Database\Eloquent\Model;

//Ambil data dari tabel student dengan class Student
class Student extends Model
{
    //Using Mass Assignment from Laravel
    protected $fillable = ['nama','nis','asrama'];
}
