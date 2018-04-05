@extends('layouts.app')
@section('title','Data Mahasiswa')
@section('content')
	<h3>Edit Data Mahasiswa</h3>

	@if ($errors->any())
	<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{{Form::model($mahasiswa,['url'=>'mahasiswa/'.$mahasiswa->id,'method'=>'put'])}}
	NIM: {{Form::text('nim',null,['placeholder'=>'Masukkan NIM Kamu'])}}
	<br>
	NAMA: {{Form::text('nama',null,['placeholder'=>'Masukkan Nama Kamu'])}}
	<br>
	JURUSAN: {{Form::select('jurusan_id',['1'=>'Teknik Mesin','2'=>'Teknik Sipil','3'=>'Teknik Komputer','4'=>'Akutansi','5'=>'Rekam Medis'],null)}}
	<br>
	TANGGAL LAHIR: {{Form::text('tanggal_lahir',null,['placeholder'=>'Masukkan Tanggal Lahir Kamu'])}}
	<br>
	NO HANDPHONE: {{Form::text('no_hp',null,['placeholder'=>'Masukkan Nomor Kamu'])}}
	<br>
	ALAMAT: {{Form::text('alamat',null,['placeholder'=>'Masukkan Alamat Kamu'])}}
	<br>
	{{Form::submit('Update Data')}}
	{{Link_to('mahasiswa','Kembali')}}
	{{Form::close()}}
@endsection