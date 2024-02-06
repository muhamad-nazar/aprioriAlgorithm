@extends('partials.template')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Product</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>Gambar</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $p)
                        <tr>
                            <form action="/dashboard/update/product/{{ $p->id }}" enctype="multipart/form-data" method="POST">
                                @csrf

                                <td class="text-center">
                                    <img src="{{ asset('img/Product/' . $p->gambar) }}" width="150" alt="">
                                    <input class="form-control" type="file" id="formFile" name="gambar" value="{{ $p->gambar }}">
                                </td>

                                <td>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Kode Product" name="kode" value="{{ $p->kode }}">
                                        <label for="floatingInput">Kode Product</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="nama" value="{{ $p->nama }}">
                                </td>

                                <td>
                                    <input type="number" class="form-control" name="harga" value="{{ $p->harga }}">
                                </td>

                                <td class="text-center">
                                    <button style="border:none;background:transparent" type="submit"><i class="fas fa-edit"></i></button>
                                    | <a class="btn text-danger" href="/dashboard/delete/product/{{ $p->id }}" onclick="return confirm('Yakin ingin Menghapus Product {{ $p->nama }} ini?')"><i class="fas fa-trash"></i></a>

                                </td>

                            </form>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>






@endsection
