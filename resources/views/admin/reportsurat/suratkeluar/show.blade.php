@extends('admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="card-title">Report Surat Keluar</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Surat</th>
                                            <th>Tgl. Surat</th>
                                            <th>Perihal</th>
                                            <th>Sifat</th>
                                            <th>Kepada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suratkeluar as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nosurat }}</td>
                                                <td>{{ date('d/m/Y', strtotime($item->tanggal)) }}</td>
                                                <td>{{ $item->perihal }}</td>
                                                <td>{{ $item->sifat_surat }}</td>
                                                <td>{{ $item->kepada }}</td>
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