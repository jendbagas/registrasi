@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Registrasi Ulang</div>
          <div class="panel-body">
            <form action="{{ route('herregistrasi.update',$herregistrasi) }}" method="post">
	          	{{ csrf_field() }}
	            {{ method_field('PATCH') }}
               <!--  <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" name="id" placeholder="Enter Your Name" value="<?=$herregistrasi->id?>">
                </div> -->
                <div class="form-group">
                  <label for="">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukan Nim Anda" value="<?=$herregistrasi->nim?>">
                </div>
                <div class="form-group">
                  <label for="">Tahun Akademik</label>
                  <input type="text" class="form-control" name="tahun_akademik" placeholder="Masukan Tahun Akademik" value="<?=$herregistrasi->tahun_akademik?>">
                </div>
                <div class="form-group">
                  <label for="">Semester</label>
                  <input type="text" class="form-control" name="semester" placeholder="Masukan Semester" value="<?=$herregistrasi->semester?>">
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