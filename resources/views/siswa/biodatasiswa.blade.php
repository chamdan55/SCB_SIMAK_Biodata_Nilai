<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Biodata Siswa')

@section('container')
<div class="container">
        <div class=table-responsive>
            <h1 class="mt-2"> Biodata Siswa</h1>
            <table class="table" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Cek Detil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $swa)
                        <tr>
                            <th scope="row">{{ $loop -> iteration }}</th>
                            <td>{{ $swa -> nama}}</td>
                            <td>{{ $swa -> nis}}</td>
                            <td>{{ $swa -> asrama}}</td>
                            <td>
                                <a href="" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
</div>

@endsection
