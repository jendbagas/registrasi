@extends('layouts.app')
@section('title','Data Jurusan')
@section('content')

<div class="container">
    <div class="row">
      	<div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
          		<div class="panel-heading">Input Data Baru</div>
          		<div class="panel-body">
		            <form action="{{ url('/jurusan/create') }}" method="post">
		              	{{ csrf_field() }}
		              	<!-- <div class="form-group">
							<label>ID</label>
							<input type="text" class="form-control" name="id" placeholder="Masukan ID Kamu">		              	
		              	</div> -->
		              	<div class="form-group">
							<label>Nama Jurusan</label>
							<input type="text" class="form-control" name="nama_jurusan" placeholder="Masukan Jurusan Kamu">    	
		              	</div>
		              	<div class="form-group">
							<label>Kaprodi</label>
							<input type="text" class="form-control" name="kaprodi" placeholder="Masukan Nama Kaprodi Kamu">    	
		              	</div>
		              	<div class="form-group">
		              		<button type="submit" name="submit" class="btn btn-primary">Save</button>
		              		<button type="reset" name="reset" class="btn btn-default">Reset</button>
		              	</div>
		            </form>
	            </div>
           	</div>
     	</div>
    </div>
</div>
       
	
@endsection