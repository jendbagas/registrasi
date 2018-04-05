<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Jurusan;
use App\Registrasi_ulang;
use DB;
class MahasiswaController extends Controller
{
    // function index()
    // {
    // 	$data['mahasiswa'] = Mahasiswa::all();
    // 	return view('mahasiswa.index',$data);
    // }
    // function create()
    // {
    // 	return view('mahasiswa.create');
    // }

    // function store(Request $request)
    // {
    // 	$validatedData =$request->validate([
    // 		'nim' => 'required',
    // 		'nama' => 'required',
    // 		'jurusan_id' => 'required',
    // 		'tanggal_lahir' => 'required',
    // 		'no_hp' => 'required'
    // 	]);

    // 	$mahasiswa = new mahasiswa();
    // 	$mahasiswa->nim=$request->nim;
    // 	$mahasiswa->nama=$request->nama;
    // 	$mahasiswa->jurusan_id=$request->jurusan_id;
    // 	$mahasiswa->tanggal_lahir=$request->tanggal_lahir;
    // 	$mahasiswa->no_hp=$request->no_hp;
    // 	$mahasiswa->alamat=$request->alamat;
    // 	$mahasiswa->save();
    // 	return redirect('mahasiswa');
    // }

    // function edit($id)
    // {
    // 	$data['mahasiswa'] = Mahasiswa::find($id);
    // 	return view('mahasiswa.edit',$data);
    // }

    // function update($id,Request $request)
    // {
    // 	$validatedData =$request->validate([
    // 		'nim' => 'required',
    // 		'nama' => 'required',
    // 		'jurusan_id' => 'required',
    // 		'tanggal_lahir' => 'required',
    // 		'no_hp' => 'required'
    // 	]);

    // 	$mahasiswa = Mahasiswa::find($id);
    // 	$mahasiswa->nim=$request->nim;
    // 	$mahasiswa->nama=$request->nama;
    // 	$mahasiswa->jurusan_id=$request->jurusan_id;
    // 	$mahasiswa->tanggal_lahir=$request->tanggal_lahir;
    // 	$mahasiswa->no_hp=$request->no_hp;
    // 	$mahasiswa->alamat=$request->alamat;
    // 	$mahasiswa->update();
    // 	return redirect('mahasiswa');
    // }

    // function delete($id)
    // {
    // 	$mahasiswa = Mahasiswa::find($id);
    // 	$mahasiswa->delete();
    // 	return redirect('mahasiswa');
    // }

    public function index(){
        $mahasiswas = Mahasiswa::All();
       	$mahasiswas = DB::table('mahasiswas')
            ->join('jurusans', 'jurusans.id', '=', 'mahasiswas.jurusan_id')
            ->join('Registrasi_ulangs', 'registrasi_ulangs.id', '=', 'mahasiswas.registrasi_ulang_id')
            ->get();
    	// return $mahasiswa;
        $data = array(
            'title'   => 'point of sale',
            'mahasiswas' => $mahasiswas,
            'no'        => 1
        );
        return view('mahasiswa.index',$data);
    }
    public function create(){
    	$jurusan = Jurusan::All();
    	$registrasi_ulang = Registrasi_ulang::All();
        $data = array(
        	'title'   			=> 'point of sale',
        	'jurusan'			=> $jurusan,
        	'registrasi_ulang'	=> $registrasi_ulang
        );
        return view('mahasiswa.create',$data);
    }
    public function store(){
         Mahasiswa::create([
            // 'nim'      			=> request('nim'),
            'nama'      			=> request('nama'),
            'jurusan_id'    		=> request('jurusan_id'),
            'registrasi_ulang_id'  	=> request('registrasi_ulang_id'),
            'tanggal_lahir'     	=> request('tanggal_lahir'),
            'no_hp'    				=> request('no_hp'),
            'alamat'  				=> request('alamat'),
        ]);
        return redirect('/mahasiswa');
    }
    public function edit(Mahasiswa $mahasiswa){
        // $post = Post::find($id);
        // $categories = category::All();
        $data = array(
            'title'         => 'edit data',
            'mahasiswa'          => $mahasiswa
            // 'categories'    => $categories
        );
        return view('mahasiswa.edit',$data);
    }
    public function update(Mahasiswa $mahasiswa)
    {   
        // $post = Post::find($id);
        $mahasiswa->update([
            'nim'      			=> request('nim'),
            'nama'      		=> request('nama'),
            'jurusan_id'    	=> request('jurusan_id'),
            'tanggal_lahir'     => request('tanggal_lahir'),
            'no_hp'    			=> request('no_hp'),
            'alamat'  			=> request('alamat'),
        ]);
        // dd($mahasiswa);
        return redirect('/mahasiswa');
    }
    public function destroy(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
