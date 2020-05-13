<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Form Ubah Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8" >
            <div class="mt-3">
                <h1 class="mt-3">Form Ubah Data Siswa</h1>
                <form method="post" action="/students/{{ $student->id }}">

                    <!-- Manipulasi Method Post untuk Update -->
                    @method('patch')


                    <!-- Token Cross Site Research Forgery (security form Laravel-->
                    @csrf

                    <div class="my-4">
                        <h3> Data Siswa</h3>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('nama'))
                                <div class="error">{{ $errors->first('nama') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="{{ $student->nis }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('nis'))
                                <div class="error">{{ $errors->first('nis') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="asrama">Asrama</label>
                        <input type="text" class="form-control" id="asrama" placeholder="Masukkan Asrama" name="asrama" value="{{ $student->asrama }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('asrama'))
                                <div class="error">{{ $errors->first('asrama') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="{{ $student->tempat_lahir }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tempat_lahir'))
                                <div class="error">{{ $errors->first('tempat_lahir') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="{{ $student->tanggal_lahir }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tanggal_lahir'))
                                <div class="error">{{ $errors->first('tanggal_lahir') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Pilih Jenis Kelamin" name="jenis_kelamin" value="{{ $student->jenis_kelamin }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('jenis_kelamin'))
                                <div class="error">{{ $errors->first('jenis_kelamin') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="golongan_darah">Golongan Darah</label>
                        <input type="text" class="form-control" id="golongan_darah" placeholder="Masukkan Golongan Darah" name="golongan_darah" value="{{ $student->golongan_darah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('golongan_darah'))
                                <div class="error">{{ $errors->first('golongan_darah') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="text" class="form-control" id="tinggi_badan" placeholder="Masukkan Tinggi Badan" name="tinggi_badan" value="{{ $student->tinggi_badan }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('tinggi_badan'))
                                <div class="error">{{ $errors->first('tinggi_badan') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="text" class="form-control" id="berat_badan" placeholder="Masukkan Berat Badan" name="berat_badan" value="{{ $student->berat_badan }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('berat_badan'))
                                <div class="error">{{ $errors->first('berat_badan') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $student->alamat }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('alamat'))
                                <div class="error">{{ $errors->first('alamat') }}</div>
                        @endif

                    </div>

                    <div class="my-4">
                        <h3>Data Orang Tua</h3>
                        <h4>Ayah</h4>
                    </div>

                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" placeholder="Masukkan Nama Ayah" name="nama_ayah" value="{{ $student->nama_ayah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('nama_ayah'))
                                <div class="error">{{ $errors->first('nama_ayah') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" id="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah" name="tempat_lahir_ayah" value="{{ $student->tempat_lahir_ayah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tempat_lahir_ayah'))
                                <div class="error">{{ $errors->first('tempat_lahir_ayah') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                        <input type="text" class="form-control" id="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah" name="tanggal_lahir_ayah" value="{{ $student->tanggal_lahir_ayah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tanggal_lahir_ayah'))
                                <div class="error">{{ $errors->first('tanggal_lahir_ayah') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" name="pekerjaan_ayah" value="{{ $student->pekerjaan_ayah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('pekerjaan_ayah'))
                                <div class="error">{{ $errors->first('pekerjaan_ayah') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="alamat_ayah">Alamat Ayah</label>
                        <input type="text" class="form-control" id="alamat_ayah" placeholder="Masukkan Alamat Ayah" name="alamat_ayah" value="{{ $student->alamat_ayah }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('alamat_ayah'))
                                <div class="error">{{ $errors->first('alamat') }}</div>
                        @endif

                    </div>

                    <div class="my-4">
                        <h4>Ibu</h4>
                    </div>

                    <div class="form-group">
                        <label for="nama_ibu">Nama ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" placeholder="Masukkan Nama ibu" name="nama_ibu" value="{{ $student->nama_ibu }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('nama_ibu'))
                                <div class="error">{{ $errors->first('nama_ibu') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir_ibu">Tempat Lahir ibu</label>
                        <input type="text" class="form-control" id="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir ibu" name="tempat_lahir_ibu" value="{{ $student->tempat_lahir_ibu }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tempat_lahir_ibu'))
                                <div class="error">{{ $errors->first('tempat_lahir_ibu') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir_ibu">Tanggal Lahir ibu</label>
                        <input type="text" class="form-control" id="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir ibu" name="tanggal_lahir_ibu" value="{{ $student->tanggal_lahir_ibu }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('tanggal_lahir_ibu'))
                                <div class="error">{{ $errors->first('tanggal_lahir_ibu') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan ibu" name="pekerjaan_ibu" value="{{ $student->pekerjaan_ibu }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('pekerjaan_ibu'))
                                <div class="error">{{ $errors->first('pekerjaan_ibu') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="alamat_ibu">Alamat ibu</label>
                        <input type="text" class="form-control" id="alamat_ibu" placeholder="Masukkan Alamat ibu" name="alamat_ibu" value="{{ $student->alamat_ibu }}" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('alamat_ibu'))
                                <div class="error">{{ $errors->first('alamat') }}</div>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
