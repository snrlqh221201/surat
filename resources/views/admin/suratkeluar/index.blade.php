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
                                    <h3 class="card-title">Surat Keluar</h3>
                                    <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                      <li class="page-item"><a class="page-link" href="/tambahsuratkeluar">ADD</a></li>
                                    </ul>
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
                            <th>Tanggal</th>
                            <th>No surat</th>
                            <th>Sifat surat</th>
                            <th>Unit kerja</th>
                            <th>Kepada</th>
                            <th style="width: 5px">Action</th>
                            <th style="width: 5px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 may 2023</td>
                            <td>12/12/13</td>
                            <td>penting</td>
                            <td>sekretaris</td>
                            <td>pt. kominfo</td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Edit</button>
                            <td>
                                    <button type="button" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                                </div>
                            </td>
                        </tr>
                    
                       
                    </tbody>
                </table>   
        </div>
</div>
@endsection