@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex align-items-center">
    <div style="margin-left: 2px; font-weight: bold">Master Barang</div>
    <div style="margin-left: 5px">/ Index /</div>
</div>
    <div class="card">
        <div class="card-body">
            <h2>List Barang</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">UOM</th>
                <th scope="col">Price</th>
                <th scope="col">Stok</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BRG/20220403/001</td>
                <td>LCD 14 inch</td>
                <td>Samsung</td>
                <td>Unit</td>
                <td>1.500.000</td>
                <td>80</td>
                <td><a href="">Edit</a> | <a href="">Delete</a></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
</div>
@endsection