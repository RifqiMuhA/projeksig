<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Himada;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersHimadaMapController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil data jumlah mahasiswa di tiap pulau
        $pulauMahasiswa = DB::table('users')
            ->join('himadas', 'users.himada', '=', 'himadas.name')
            ->join('islands', 'himadas.island_id', '=', 'islands.id')
            ->select('islands.name as island_name', DB::raw('COUNT(users.id) as jumlah_mahasiswa'))
            ->groupBy('islands.name')
            ->orderBy('jumlah_mahasiswa', 'DESC')
            ->get();

        // Data untuk visualisasi
        $islandNames = $pulauMahasiswa->pluck('island_name')->toArray();
        $studentCounts = $pulauMahasiswa->pluck('jumlah_mahasiswa')->toArray();

        // ambil data nama dan himada
        $jumlahHimadas = Himada::all()->count();
        
        // hitung jumlah Pria dan Wanita keseluruhan
        $users = User::select('himada', 'jenis_kelamin')->get();
        $totalPria = $users->where('jenis_kelamin', 'Pria')->count();
        $totalWanita = $users->where('jenis_kelamin', 'Wanita')->count();
        $total = $totalPria + $totalWanita;

        return view('pages.map', 
            compact('users', 'jumlahHimadas', 'totalPria', 'totalWanita', 'total',
            'islandNames', 'studentCounts')
        );
    }
 
    public function detailHimada($himadaName)
    {
        $users = User::select('nama','jenis_kelamin')->where('himada', $himadaName)->get();
        
        $totalPria = $users->where('jenis_kelamin', 'Pria')->count();
        $totalWanita = $users->where('jenis_kelamin', 'Wanita')->count();
        $total = $totalPria + $totalWanita;

        $himada = Himada::where('name', $himadaName)->first();

        return view('pages.map-detail', 
            compact('users', 'totalPria', 'totalWanita', 'total', 'himada')
        );
    }
}