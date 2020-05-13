<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Biodata Siswa')

@section('container')
<div>
        <div class="table">
            <h1 class="mt-2 mx-3"> Biodata Siswa</h1>

            <a href="/students/create" class="btn btn-primary mx-3">Tambah Data Siswa</a>
            <div class="my-3">

            <!-- Alert Notification (status from StudentsController) -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <break>

            <table class="table container mx-3" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <!-- <th scope="col">Golongan Darah</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Alamat</th>

                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Tempat Lahir Ayah</th>
                        <th scope="col">Tanggal Lahir Ayah</th>
                        <th scope="col">Pekerjaan Ayah</th>
                        <th scope="col">Alamat Ayah</th>

                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Tempat Lahir Ibu</th>
                        <th scope="col">Tanggal Lahir Ibu</th>
                        <th scope="col">Pekerjaan Ibu</th>
                        <th scope="col">Alamat Ibu</th> -->
                        <th scope="col">Selengkapnya</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $loop -> iteration }}</th>
                            <td>{{ $student -> nama}}</td>
                            <td>{{ $student -> nis}}</td>
                            <td>{{ $student -> asrama}}</td>
                            <td>{{ $student -> jenis_kelamin}}</td>
                            <!-- <td>{{ $student -> golongan_darah}}</td>
                            <td>{{ $student -> tinggi_badan}}</td>
                            <td>{{ $student -> berat_badan}}</td>
                            <td>{{ $student -> alamat}}</td>

                            <td>{{ $student -> nama_ayah}}</td>
                            <td>{{ $student -> tempat_lahir_ayah}}</td>
                            <td>{{ $student -> tanggal_lahir_ayah}}</td>
                            <td>{{ $student -> pekerjaan_ayah}}</td>
                            <td>{{ $student -> alamat_ayah}}</td>

                            <td>{{ $student -> nama_ibu}}</td>
                            <td>{{ $student -> tempat_lahir_ibu}}</td>
                            <td>{{ $student -> tanggal_lahir_ibu}}</td>
                            <td>{{ $student -> pekerjaan_ibu}}</td>
                            <td>{{ $student -> alamat_ibu}}</td> -->
                            <td>
                                <a href="/students/{{ $student->id }}" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
</div>

@endsection
