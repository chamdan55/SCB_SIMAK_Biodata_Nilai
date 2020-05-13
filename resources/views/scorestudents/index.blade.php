<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Niai Siswa')

@section('container')
<div class="container">
        <div class=table-responsive>
            <h1 class="mt-2"> Nilai Siswa</h1>

            <div class="my-3">

            <!-- Alert Notification (status from StudentsController) -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <break>

            <table class="table" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Rata-Rata</th>
                        <th scope="col">Selengkapnya</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $loop -> iteration }}</th>
                            <td>{{ $student -> nama}}</td>
                            <td>{{ $student -> nis}}</td>
                            <td>-</td>
                            <td>
                                <a href="/scorestudents/{{ $student->id }}" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
</div>


@endsection
