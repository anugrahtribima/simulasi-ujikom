@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold">Master Data</div>
        <div style="margin-left: 5px">/ Satuan /</div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-barang">Nama Satuan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama-barang"
                            />
                        </div>
                        <button class="btn btn-primary">Simpan Satuan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode Satuan</th>
                                <th scope="col">Nama Satuan</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ST/20220403/001</td>
                                <td>Botol</td>
                                <td>
                                    <a class="btn btn-outline-warning" href="">Edit</a> | <a class="btn btn-outline-danger" href="">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
