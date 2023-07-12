@extends('admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="card-title">Report Surat Masuk</h3>
                            </div>
                            <div class= "card-body table-responsive">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Surat</th>
                                            <th>Tgl. Surat</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Sifat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suratmasuk as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nosurat }}</td>
                                                <td>{{ date('d/m/Y', strtotime($item->tanggal)) }}</td>
                                                <td>{{ $item->pengirim }}</td>
                                                <td>{{ $item->perihal }}</td>
                                                <td>{{ $item->sifat_surat }}</td>
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