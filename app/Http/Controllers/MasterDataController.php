<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function dosen()
    {
        return view('dash.master.dosen');
    }

    public function matakuliah()
    {
        return view('dash.master.matakuliah');
    }

    public function ruang()
    {
        return view('dash.master.ruang');
    }

    public function fakultas()
    {
        return view('dash.master.fakultas');
    }

    public function prodi()
    {
        return view('dash.master.prodi');
    }

    public function tahunAkademik()
    {
        return view('dash.master.tahun');
    }
}
