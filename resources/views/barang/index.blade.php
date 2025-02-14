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
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
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

@endsection
