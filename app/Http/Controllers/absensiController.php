<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;




class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_guru  =  auth()->user()->id;



        return view('absensi', [
            'id_guru' => $id_guru
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

      


        $idGuru = $request->idGuru;
        $tanggal = date('Y-m-d');
        $waktu = date('H:i:s');

        $data = [
            'usersGuru_id' => $idGuru,
            'tanggal' => $tanggal,
            'waktu_datang' => $waktu,
            'waktu_pulang' => null,
            'status' => 'Hadir',
            'poin' => 100
        ];

   // cek apakah sudah absen atau belum
        // cek apakah sudah waktunya absen pulang



        $result = new absensi();

        $result->CreateAbsensi($data);

        return back()->with('success', 'Absensi Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
 /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        
    }
}