@extends('template')
@section('konten')
    <h3>Daftar Mahasiswa </h3>
        <table class="table">
            <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tb_mahasiswa as $tb_mahasiswa)
            <tr>
                <td>{{ $tb_mahasiswa->nama }}</td>
                <td>{{ $tb_mahasiswa->nim }}</td>
                <td>{{ $tb_mahasiswa->email }}</td>
                <td>{{ $tb_mahasiswa->jeniskelamin }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    
@endsection