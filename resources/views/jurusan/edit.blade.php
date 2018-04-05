@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Jurusan</div>
      <div class="panel-body">
        <form action="{{ route('jurusan.update',$jurusan) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
         <!--  <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" placeholder="Masukan ID" value="<?=$jurusan->id?>">
          </div> -->
          <div class="form-group">
            <label for="">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control" placeholder="Masukan Nama Jurusan" value="<?=$jurusan->nama_jurusan?>">
          </div>
          <div class="form-group">
            <label for="">Kaprodi</label>
            <input type="text" name="kaprodi" class="form-control" placeholder="Masukan Kaprodi" value="<?=$jurusan->kaprodi?>">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            <button type="reset" name="reset" class="btn btn-default">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();