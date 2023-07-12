@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <!-- DataTales Example -->
    <section class="content">
        <div class="container-fluid">
            @if(session('message'))
                <div id="pesan-flash" class="alert alert-success mt-4">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3 class="card-title">Surat Keluar</h3>
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="{{ route('suratkeluar.create') }}">ADD</a></li>
                            </ul>
                        </div>
                        <div class= "card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>No surat</th>
                                        <th>Perihal</th>
                                        <th>Sifat surat</th>
                                        <th>Unit kerja</th>
                                        <th>Kepada</th>
                                        <th style="width: 5px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $item )  
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('d/m/Y', strtotime($item->tanggal)) }}</td>
                                        <td>
                                            <a href="{{ asset($item->file_surat) }}" target="_blank">{{ $item->nosurat }}</a>
                                        </td>
                                        <td>{{ $item->perihal }}</td>
                                        <td>{{ $item->sifat_surat }}</td>
                                        <td>{{ $item->unitKerja ? $item->unitKerja->namaunit : '-' }}</td>
                                        <td>{{ $item->kepada }}</td>
                                        <td class="text-center d-flex">
                                            <a href="{{ route('suratkeluar.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                            <form method="post" action="{{ route('suratkeluar.destroy', $item->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection