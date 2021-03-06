@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Tambah Registrasi Ulang</div>
          <div class="panel-body">
            <form action="{{ url('/herregistrasi/create') }}" method="post">
              {{ csrf_field() }}
               <!--  <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" name="id" placeholder="Enter Your Name">
                </div> -->
                <div class="form-group">
                  <label for="">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukan Nim Anda">
                </div>
                <div class="form-group">
                  <label for="">Tahun Akademik</label>
                  <input type="text" class="form-control" name="tahun_akademik" placeholder="Masukan Tahun Akademik">
                </div>
                <div class="form-group">
                  <label for="">Semester</label>
                  <input type="text" class="form-control" name="semester" placeholder="Masukan Semester">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Save</button>
                  <button type="reset" class="btn btn-default btn-sm">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()