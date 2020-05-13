<?php
/** Model dari tabel student */
/** Model ini digunakan pada halaman biodata siswa */

namespace App;

use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    //Using Mass Assignment from Laravel
    protected $guarded = ['id'];

}
