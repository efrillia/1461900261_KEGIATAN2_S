<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ruangan;
use App\Kelas;

class SiswaController extends Controller
{
    public function index()
    {
        $db = Ruangan::with('siswa')->with('kelas')->get();
        $k = request()->get('kelas');
        $q = request()->get('query');
        if ($k != '' && $q != '') {
            $db = Ruangan::with('siswa')->with('kelas')
            ->where('id_kelas', $k)
            ->whereHas('siswa', function($query) use ($q) {
                $query->where('nama_siswa', 'LIKE', '%' . $q . '%');
            })->get();
        } else if ($k != '') {
            $db = Ruangan::with('siswa')->with('kelas')
            ->where('id_kelas', $k)->get();
        } else {
            $db = Ruangan::with('siswa')->with('kelas')
            ->whereHas('siswa', function($query) use ($q) {
                $query->where('nama_siswa', 'LIKE', '%' . $q . '%');
            })->get();
        }
        $kelas = Kelas::all();
        return view('siswa_0261')
        ->with('ruangan', $db)
        ->with('kelas', $kelas);
    }
}
