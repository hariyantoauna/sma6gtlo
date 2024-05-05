<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class CekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function cek(Request $request)
    {
        $request->validate([
            'kode' => 'required',
        ]);

        $siswa = Siswa::where('kode', $request->kode)->first();
        // dd($siswa);

        if ($siswa == null) {
            return redirect('/');
        }

        $data = [
            'siswa' =>  $siswa
        ];
        return view('hasil', $data);
        // return redirect('/hasil/' . $siswa->kode);
    }

    // public function hasil(Siswa $siswa)
    // {
    //     if (!$siswa) {
    //         redirect('/');
    //     }




    //     return view('hasil');
    // }
}