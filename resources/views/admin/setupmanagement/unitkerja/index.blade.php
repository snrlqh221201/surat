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
                            <h3 class="card-title">Unit Kerja</h3>
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="{{ route('unitkerja.create') }}">ADD</a></li>
                            </ul>
                        </div>
                        <div class= "card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 5px">No</th>
                                        <th>Nama Unit Kerja</th>
                                        <th style="width: 5px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $item )  
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaunit }}</td>
                                        <td class="text-center d-flex">
                                            <a href="{{ route('unitkerja.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                            <form method="post" action="{{ route('unitkerja.destroy', $item->id) }}">
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
                </div>
            </div>
        </div>
    </section>
</div>
@endsection