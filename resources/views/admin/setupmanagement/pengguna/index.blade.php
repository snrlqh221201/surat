@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <!-- DataTales Example -->
    <section class="content">
        <div class="container-fluid">
            @if(session('message'))
                <div id="pesan-flash" class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card shadow mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data pengguna</h3>
                                    <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                      <li class="page-item"><a class="page-link" href="/tambahpengguna">ADD</a></li>
                                    </ul>
                                </div>
                            </div>
            </div>
            <div class= "card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>hakakses</th>
                            <th>Unit kerja</th>
                            <th style="width: 5px">Action</th>
                            <th style="width: 5px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $item )  
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->usrname }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->hakakses }}</td>
                            <td>{{ $item->unitKerja ? $item->unitKerja->namaunit : '-' }}</td>
                            <td class="text-center d-flex">
                                <a href="{{ route('tambahpengguna.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                <form method="post" action="{{ route('pengguna.delete', $item->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach         
                </table>   
        </div>
</div>
@endsection