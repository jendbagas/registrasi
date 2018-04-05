<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi_ulang;

class HerController extends Controller
{
    function index()
    {
    	$data['herregistrasi'] = registrasi_ulang::all();
    	return view('herregistrasi.index',$data);
    }
    function create()
    {
    	return view('herregistrasi.create');
    }

    function store(Request $request)
    {
    	$validatedData =$request->validate([
    		// 'id'=> 'required',
    		'nim' => 'required',
    		'tahun_akademik' => 'required',
    		'semester' => 'required'
    	]);

    	$mahasiswa = new registrasi_ulang();
    	// $mahasiswa->id=$request->id;
    	$mahasiswa->nim=$request->nim;
    	$mahasiswa->tahun_akademik=$request->tahun_akademik;
    	$mahasiswa->semester=$request->semester;
    	$mahasiswa->save();
    	return redirect('herregistrasi');
    }

    public function edit(Registrasi_ulang $herregistrasi){
        $data = array(
            'title'   => 'edit data',
            'herregistrasi' => $herregistrasi
        );
        return view('herregistrasi.edit',$data);
    }
    public function update(Registrasi_ulang $herregistrasi)
    {   
        $herregistrasi->update([
            // 'id'      			=> request('id'),
            'nim'     			=> request('nim'),
            'tahun_akademik'    => request('tahun_akademik'),
            'semester'     		=> request('semester')
        ]);
        return redirect('/herregistrasi');
    }

    // function edit($id)
    // {
    // 	$data['herregistrasi'] = registrasi_ulang::find($id);
    // 	return view('herregistrasi.edit',$data);
    // }

    // function update($id,Request $request)
    // {
    // 	$validatedData =$request->validate([
    // 		'id'=> 'required',
    // 		'nim' => 'required',
    // 		'tahun_akademik' => 'required',
    // 		'semester' => 'required'
    // 	]);

    // 	$mahasiswa = new registrasi_ulang();
    // 	$mahasiswa->id=$request->id;
    // 	$mahasiswa->nim=$request->nim;
    // 	$mahasiswa->tahun_akademik=$request->tahun_akademik;
    // 	$mahasiswa->semester=$request->semester;
    // 	$mahasiswa->save();
    // 	return redirect('herregistrasi');
    // }

    public function destroy(Registrasi_ulang $herregistrasi){
        $herregistrasi->delete();
        return redirect()->route('herregistrasi.index');
    }
}
