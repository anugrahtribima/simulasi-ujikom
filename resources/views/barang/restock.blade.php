@extends('layouts.app') @section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold">Master Barang</div>
        <div style="margin-left: 5px">/ Request Stock Barang /</div>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nomor-referensi">Nomor Referensi</label>
                            <input class="form-control" id="nomor-referensi" />
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input class="form-control" id="kategori" />
                        </div>

                        <div class="form-group">
                            <label for="uom">UOM</label>
                            <input class="form-control" id="uom" />
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input
                                class="form-control"
                                id="image"
                                type="file"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama-barang">Nama Barang</label>
                            <input class="form-control" id="nama-barang" />
                        </div>

                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input class="form-control" id="brand" />
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input class="form-control" id="harga" />
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input
                                class="form-control"
                                id="status"
                                type="file"
                            />
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-info">Simpan Stock</button>
            </form>
        </div>
    </div>
</div>
@endsection
