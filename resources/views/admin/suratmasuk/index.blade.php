@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <!-- DataTales Example -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card shadow mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Surat Masuk</h3>
                                    <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                      <li class="page-item"><a class="page-link" href="tambahsuratmasuk">ADD</a></li>
                                    </ul>
                                </div>
                            </div>
            </div>
            <div class= "card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>No Surat</th>
                            <th>Sifat Surat</th>
                            <th>Perihal</th>
                            <th>Pengirim</th>
                            <th>Unit Kerja</th>
                            <th style="width: 5px">Action</th>
                            <th style="width: 5px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $item )  
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('d/m/Y', strtotime($item->tanggal)) }}</td>
                            <td>{{ $item->nosurat }}</td>
                            <td>{{ $item->sifat_surat }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->pengirim }}</td>
                            <td>{{ $item->unitKerja ? $item->unitKerja->namaunit : '-' }}</td>
                            <td class="text-center">
                                <a href="{{ route('suratmasuk.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a id="delete" data-url="{{ route('suratmasuk', $item->suratmasuk) }}" href="javascript::void(0)" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach   
                    </tbody>
                </table>   
        </div>
</div>
@endsection