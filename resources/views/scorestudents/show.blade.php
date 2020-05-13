<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="col-5">
                <h2 class="mt-2"> Nilai Siswa</h2>
                </div>
            </div>
    </div>
</div>
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <div class="card-body">
                    <h5>Nama  :{{ $student -> nama }}</h5> 
                    <h5>NIS   :{{ $student -> nis }}</h5>
                    <h5>Kelas :{{ $student -> asrama }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
                <div class="col-5">
                <h6 class="mt-2"> Semester 1</h6>
                </div>
                <div class="col-10">
                <table class="table table-bordered">
                <thead>
  <tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Mata Pelajaran</th>
    <th colspan="3">Nilai Total</th>
    <th rowspan="2">Rata-rata Mata Pelajaran</th>
    <th rowspan="2">Predikat</th>
  </tr>
  <tr>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
  </tr>
    <tr>
    <td scope="row">1.</td>
    <td rowspan="2">Pendidikan Agama dan Budi Pekerti</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">2.</td>
    <td rowspan="2">Pendidikan Kewarganegaraan</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">3.</td>
    <td rowspan="2">Bahasa Indonesia dan Sastra Indonesia</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">4.</td>
    <td rowspan="2">Bahasa Inggris</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">5.</td>
    <td rowspan="2">Matematika</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">6.</td>
    <td rowspan="2">Ilmu Pengetahuan Alam</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">7.</td>
    <td rowspan="2">Ilmu Pengetahuan Sosial</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">8.</td>
    <td rowspan="2">Seni Budaya</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">9.</td>
    <td rowspan="2">Pendidikan Jasmani, Olahraga dan Kesehatan</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td rowspan="2">10.</td>
    <td colspan="1">a. Tahfiz Tahsin Qur'an</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>  
  </tr>
  <tr>
    <td>b. Teknologi Informasi dan Komunikasi</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
  </tr>
  </thead>
  <thead>
  <tr>
    <td rowspan="3">11.</td>
    <td colspan="1">a. Bahasa dan Sastra Sunda</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>  
  </tr>
  <tr>
    <td>b. Prakarya</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
  </tr>
  <tr>
    <td rowspan="1">b. Bahasa Arab</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
  </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Jumlah Nilai</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Rata - Rata Sementara</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Rata-Rata Akhir</td>
    <td colspan="3">...</td>
    </tr>
  </thead>
</table>
</div>

<br>

                <div class="col-5">
                <h6 class="mt-2"> Semester 2</h6>
                </div>
                <div class="col-10">
                <table class="table table-bordered">
                <thead>
  <tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Mata Pelajaran</th>
    <th colspan="3">Nilai Total</th>
    <th rowspan="2">Rata-rata Mata Pelajaran</th>
    <th rowspan="2">Predikat</th>
  </tr>
  <tr>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
  </tr>
    <tr>
    <td scope="row">1.</td>
    <td rowspan="2">Pendidikan Agama dan Budi Pekerti</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">2.</td>
    <td rowspan="2">Pendidikan Kewarganegaraan</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">3.</td>
    <td rowspan="2">Bahasa Indonesia dan Sastra Indonesia</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">4.</td>
    <td rowspan="2">Bahasa Inggris</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">5.</td>
    <td rowspan="2">Matematika</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">6.</td>
    <td rowspan="2">Ilmu Pengetahuan Alam</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">7.</td>
    <td rowspan="2">Ilmu Pengetahuan Sosial</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">8.</td>
    <td rowspan="2">Seni Budaya</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td scope="row">9.</td>
    <td rowspan="2">Pendidikan Jasmani, Olahraga dan Kesehatan</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td rowspan="2">10.</td>
    <td colspan="1">a. Tahfiz Tahsin Qur'an</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>  
  </tr>
  <tr>
    <td>b. Teknologi Informasi dan Komunikasi</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
  </tr>
  </thead>
  <thead>
  <tr>
    <td rowspan="3">11.</td>
    <td colspan="1">a. Bahasa dan Sastra Sunda</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>
    <td colspan="1">...</td>  
  </tr>
  <tr>
    <td>b. Prakarya</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
  </tr>
  <tr>
    <td rowspan="1">b. Bahasa Arab</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
    <td rowspan="1">...</td>
  </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Jumlah Nilai</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Rata - Rata Sementara</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    <td rowspan="2">...</td>
    </tr>
  </thead>
  <thead>
  <tr>
    <td colspan="2">Rata-Rata Akhir</td>
    <td colspan="3">...</td>
    </tr>
  </thead>
</table>
</div>
@endsection
