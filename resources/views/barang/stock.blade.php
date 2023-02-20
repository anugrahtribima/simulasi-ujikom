@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold">Master Barang</div>
        <div style="margin-left: 5px">/ Tampilkan Stock /</div>
    </div>
<div class="card">
    <div class="col-lg-6 col-md-6 mx-auto">
        <div class="image img-fluid p-5">
            <img src="{{asset('assets/img/monitor.jpeg')}}" width="100%" alt="...">
        </div>
    </div>
    <table class="table" style="margin-top: 16px">
      <thead>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang </th>
          <th scope="col">Brand</th>
          <th scope="col">UOM</th>
          <th scope="col">Price</th>
      </thead>
      <tbody>
        <td></td>
      </tbody>
    </table>
</div>
@endsection