<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="list-group">
                    <div class="row">
                    <div class="col left">
                    <ul>
                    <li class="list-group-item list-group-item-success"><b>Data Siswa</b></li>
                    <li class="list-group-item">Nama : {{ $student -> nama }}</li>
                    <li class="list-group-item">NIS : {{ $student -> nis }}</li>
                    <li class="list-group-item">Asrama : {{ $student -> asrama }}</li>
                    <li class="list-group-item">Jenis Kelamin : {{ $student -> jenis_kelamin }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $student -> tempat_lahir }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $student -> tanggal_lahir }}</li>
                    <li class="list-group-item">Golongan Darah : {{ $student -> golongan_darah }}</li>
                    <li class="list-group-item">Tinggi Badan : {{ $student -> tinggi_badan }}</li>
                    <li class="list-group-item">Berat Badan : {{ $student -> berat_badan }}</li>
                    <li class="list-group-item">Alamat : {{ $student -> alamat }}</li>
                    </ul>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col right">

                    <ul>
                    <li class="list-group-item list-group-item-success"><b>Data Orang Tua</b></li>
                    </ul>

                    <ul>
                    <li class="list-group-item list-group-item-secondary"><b>Ayah</b></li>
                    <li class="list-group-item">Nama : {{ $student -> nama_ayah }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $student -> tempat_lahir_ayah }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $student -> tanggal_lahir_ayah }}</li>
                    <li class="list-group-item">Pekerjaan : {{ $student -> pekerjaan_ayah }}</li>
                    <li class="list-group-item">Alamat : {{ $student -> alamat_ayah }}</li>
                    </ul>

                    <ul>
                    <li class="list-group-item list-group-item-secondary"><b>Ibu</b></li>
                    <li class="list-group-item">Nama : {{ $student -> nama_ibu }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $student -> tempat_lahir_ibu }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $student -> tanggal_lahir_ibu }}</li>
                    <li class="list-group-item">Pekerjaan : {{ $student -> pekerjaan_ibu }}</li>
                    <li class="list-group-item">Alamat : {{ $student -> alamat_ibu }}</li>
                    </ul>

                    </div>
                    </div>
                    <!-- <h4 class="card-title">Nama : {{ $student -> nama }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">NIS : {{ $student -> nis }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Asrama : {{ $student -> asrama }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Jenis Kelamin : {{ $student -> jenis_kelamin }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Golongan_Darah : {{ $student -> golongan_darah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tinggi Badan : {{ $student -> tinggi_badan }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Berat Badan : {{ $student -> berat_badan }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat }}</h6>

                    <h4 class="card-title">Ayah</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Nama : {{ $student -> nama_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Pekerjaan : {{ $student -> pekerjaan_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat_ayah }}</h6>
                    <h4 class="card-title">Ibu</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Nama : {{ $student -> nama_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Pekerjaan : {{ $student -> pekerjaan_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat_ibu }}</h6> -->


                    <ul>
                    <a href="{{ $student-> id }}/edit" type="submit" class="list-group-item list-group-item-action list-group-item-primary">Edit</a>

                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        <!-- Manipulasi Method Delete -->
                        @method('delete')
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action list-group-item-danger">Hapus</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                    </ul>
            </div>
        </div>
    </div>
</div>


@endsection
