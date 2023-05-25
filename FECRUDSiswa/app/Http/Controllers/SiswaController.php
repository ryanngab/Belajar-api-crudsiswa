<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){

        $data = (new BaseApi)->index('/api/siswa');
        $siswas = $data->json();

        return view('index')->with(['siswas' =>  $siswas['data']]);

    }

    public function create()
    {
        return view('create');
    }

//     public function store(Request $request)
// {
//     $data = [
//         'nama' => $request->input('nama'),
//         'kelas' => $request->input('kelas'),
//         'alamat' => $request->input('alamat')
//     ];

//     $response = (new BaseApi)->store('/api/siswa', $data);

//     if ($response->getStatusCode() == 200) {
//         return redirect()->route('index')->with('success', 'Data siswa berhasil disimpan.');
//     } else {
//         return redirect()->back()->with('error', 'Gagal menyimpan data siswa. Silakan coba lagi.');
//     }
}


}
