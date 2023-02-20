@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold;">Transaksi</div>
        <div style="margin-left: 5px;">/ Barang Masuk /</div>
        <button type="button" class="btn btn-outline-primary ml-2">Tambah Stock Baru</button>
    </div>
    <div class="card mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Referensi</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah permintaan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ST/20220403/001</td>
                    <td>Samsung</td>
                    <td>Request</td>
                    <td>4</td>
                    <td>2022-04-21</td>
                    <td>
                        <a class="btn btn-outline-primary" href="">Setujui</a> | <a class="btn btn-outline-danger" href="">Tolak</a>
                    </td>
                </tr>
            </tbody>
        </div>
    </div>

@endsection