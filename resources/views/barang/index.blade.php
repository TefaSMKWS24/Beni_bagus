@extends('layouts.layout')

@section('header')

<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Data Barang</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>

@endsection

@section('content')

<table>
    <thead>
        <tr>
<<<<<<< HEAD
            <th>NO</th>
=======
            <th>No</th>
>>>>>>> 9f5fecbd64aef124cf28dbd035af8b17947c3aba
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
<<<<<<< HEAD
        @foreach ($barang as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->harga }}</td>
            <td>{{ $b->stok }}</td>
            <td>{{ $b->kategori->nama_kategori }}</td>
            <td>
                <a href="/barang/{{ $b->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/barang/{{ $b->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
=======
        @foreach ($barang as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_barang }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->kategori->nama_kategori }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <a href="/barang/{{ $item->kode_barang }} }}/edit" class="btn btn-primary">Edit</a>
                <form action="/barang/delete/{{ $item->kode_barang }}"  class="btn btn-danger">hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
>>>>>>> 9f5fecbd64aef124cf28dbd035af8b17947c3aba

@endsection
