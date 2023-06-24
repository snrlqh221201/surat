@extends('admin.index')

@section('content')
<div class="content-wrapper">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Unit Kerja</h3>
                <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                  <li class="page-item"><a class="page-link" href="/tambahunitkerja">ADD</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 5px">No</th>
                        <th>Nama Unit Kerja</th>
                        <th style="width: 20px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $data as $item )  
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->namaunit }}</td>
                        <td>
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Edit</button>
                                <button type="button" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
@endpush