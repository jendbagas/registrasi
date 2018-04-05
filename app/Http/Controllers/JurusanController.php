<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function index(){
        $jurusan = Jurusan::All();
        // return $jurusan;
        $data = array(
            'title'     => 'point of sale',
            'jurusan'  => $jurusan,
            'no'        => 1
        );
        return view('jurusan.index',$data);
    }
    function create()
    {
    	return view('jurusan.create');
    }

    function store(Request $request)
    {
    	$validatedData =$request->validate([
    		// 'id' => 'required',
    		'nama_jurusan' => 'required',
    		'kaprodi' => 'required'
    	]);

    	$jurusan = new jurusan();
    	// $jurusan->id=$request->id;
    	$jurusan->nama_jurusan=$request->nama_jurusan;
    	$jurusan->kaprodi=$request->kaprodi;
    	$jurusan->save();
    	return redirect('jurusan');
    }

    public function edit(Jurusan $jurusan){
        $data = array(
            'title'   => 'edit data',
            'jurusan' => $jurusan
        );
        return view('jurusan.edit',$data);
    }
    public function update(Jurusan $jurusan)
    {   
        $jurusan->update([
            // 'id'            => request('id'),
            'nama_jurusan'  => request('nama_jurusan'),
            'kaprodi'       => request('kaprodi')
        ]);
        return redirect('/jurusan');
    }
    public function destroy(Jurusan $jurusan){
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }


    // function delete($id)
    // {
    // 	$jurusan = Jurusan::find($id);
    // 	$jurusan->delete();
    // 	return redirect('jurusan');
    // }
}
