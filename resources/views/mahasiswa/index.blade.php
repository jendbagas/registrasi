

@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary btn-sm">Tambah Mahasiswa <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Tanggal Lahir</th>
              <th>No Handphone</th>
              <th>Alamat</th>
              <!-- <th>Action</th> -->
            </tr>
          </thead>
          <tbody>
            @foreach($mahasiswas as $maha)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $maha->nim }}</td>
              <td>{{ $maha->nama }}</td>
              <td>{{ $maha->nama_jurusan }}</td>
              <td>{{ $maha->tanggal_lahir }}</td>
              <td>{{ $maha->no_hp }}</td>
              <td>{{ $maha->alamat }}</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()