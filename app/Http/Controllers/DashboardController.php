<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dash.index');
    }

    public function buatJadwal()
    {
        return view('dash.buat-jadwal');
    }

    public function lihatJadwal()
    {
        return view('dash.lihat-jadwal');
    }

    public function lihatRuang()
    {
        return view('dash.lihat-ruang');
    }

    public function printJadwal()
    {
        return view('dash.print-jadwal');
    }
}
