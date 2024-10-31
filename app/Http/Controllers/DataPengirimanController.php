<?php

namespace App\Http\Controllers;

use App\Models\DataPengiriman;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DataPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPengiriman = DataPengiriman::all();
        $data['message'] = true;
        $data['result'] = $dataPengiriman;
        return response()->json($data, Response::HTTP_OK);
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
        $validate = $request->validate([
            'namaPengirim' => 'required',
            'namaPenerima' => 'required',
            'alamatPenerima' => 'required',
            'namaBarang' => 'required',
            'tanggalPengiriman' => 'required|date',
            'jumlahBarang' => 'required|numeric'
        ]);

        $result = DataPengiriman::create($validate); // simpan ke tabel fakultas
        if ($result) {
            $data['success'] = true;
            $data['message'] = "Data Pengiriman berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPengiriman $dataPengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPengiriman $dataPengiriman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPengiriman $dataPengiriman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPengiriman $dataPengiriman)
    {
        //
    }
}
