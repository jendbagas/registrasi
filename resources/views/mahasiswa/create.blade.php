
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Data Mahasiswa</div>
          <div class="panel-body">
            <form action="{{ url('/mahasiswa/create') }}" method="post">
              {{ csrf_field() }}
                
              <div class="form-group">
              	<label>Jurusan</label>
              	<select class="form-control" name="jurusan_id">
              		<?php foreach($jurusan as $j):?>
              		<option value="<?=$j->id?>"><?=$j->nama_jurusan?></option>
	              	<?php endforeach ?>
              	</select>
              </div>
              <div class="form-group">
              	<label>NIM</label>
              	<select class="form-control" name="registrasi_ulang_id">
              		<?php foreach($registrasi_ulang as $ru):?>
              		<option value="<?=$ru->id?>"><?=$ru->nim?></option>
	              	<?php endforeach ?>
              	</select>
              </div>
              <div class="form-group">
              	<label>Nama</label>
              	<input class="form-control" name="nama" placeholder="Nama Mahasiswa">
              </div>
              <div class="form-group">
              	<label>Tanggal Lahir</label>
              	<input class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir Mahasiswa">
              </div>
              <div class="form-group">
              	<label>No Handphone</label>
              	<input class="form-control" name="no_hp" placeholder="No Handphone Mahasiswa">
              </div>
              <div class="form-group">
              	<label>Alamat</label>
              	<textarea class="form-control" name="alamat" placeholder="Alamat Mahasisea"></textarea>
              </div>
              <div class="form-group">
              	<button type="submit" class="btn btn-primary" name="submit">Save</button>
              	<button type="reset" class="btn btn-default" name="reset">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()