@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold">Master Data</div>
        <div style="margin-left: 5px">/ Edit Katagori /</div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-barang">Nama Katagori</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama-barang"
                            />
                        </div>
                        <button class="btn btn-primary">Simpan Katagori</button>
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
                                <th scope="col">Kode Katagori</th>
                                <th scope="col">Nama Katagori</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KTG/20220403/001</td>
                                <td>Makanan Kemasan</td>
                                <td>
                                    <a href="">Edit</a> | <a href="">Delete</a>
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
