@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/jurusan/create') }}" class="btn btn-primary btn-sm">Tambah Jurusan <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>ID</th> -->
              <th>Nama Jurusan</th>
              <th>Kaprodi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($jurusan as $jur):?>
            <tr>
            	<td><?=$no++?></td>
            	<!-- <td><?=$jur->id?></td> -->
            	<td><?=$jur->nama_jurusan?></td>
            	<td><?=$jur->kaprodi?></td>
            	<td>
	                <a href="{{ route('jurusan.edit', $jur) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="{{ route('jurusan.destroy',$jur) }}" method="post">
	                  {{ csrf_field() }}
	                  <input type="hidden" name="_method" value="DELETE">
	                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
	                </form>
	            </td>
            </tr>
        	<?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()