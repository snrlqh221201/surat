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
                                    <h3 class="card-title">Data Pengguna</h3>
                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm float-right">
                                            <li class="page-item"><a class="page-link" href="/tambahpengguna">ADD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="card-tools">
                                  <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                      </button>
                                    </div>
                                  </div>
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
                                        <th>Hak akses</th>
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
                                            <td>{{ $item->namaunit }}</td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Edit</button>
                                                </td> 
                                                <td>       
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
            </div>
        </div>
    </section>
</div>
@endsection