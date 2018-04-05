@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/herregistrasi/create') }}" class="btn btn-primary btn-sm">Tambah <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>ID</th> -->
              <th>NIM</th>
              <th>Tahun Akademik</th>
              <th>Semester</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;foreach($herregistrasi as $her):?>
            <tr>
              <td><?=$no++?></td>
              <!-- <td><?=$her->id?></td> -->
              <td><?=$her->nim?></td>
              <td><?=$her->tahun_akademik?></td>
              <td><?=$her->semester?></td>
              <td>
                <a href="{{ route('herregistrasi.edit', $her) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('herregistrasi.destroy',$her) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()