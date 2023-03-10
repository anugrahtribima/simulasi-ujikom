<?php

namespace App\Http\Controllers;

use App\RequestBarang;
use Illuminate\Http\Request;
use App\Barang;
use App\Permintaan;
use App\Http\Controllers\Controller;

class RequestBarangController extends Controller
{
    public function edit($id)
    {
        $permintaan = Barang::findOrFail($id);
        return view('barang.request.edit', compact('permintaan'));
    }
    public function store(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permintaan::create([
            'barang_id' => $barang->id,
            'jumlah'    => $request->jumlah,
            'total'     => $request->total,
            'status'    => 'in'
        ]);
        return redirect()->route('barang');
    }
}
