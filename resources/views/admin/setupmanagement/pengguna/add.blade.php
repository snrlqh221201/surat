@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Pengguna</h3>
                        </div>
                        <form method="POST" action="/daftarpengguna/store">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputusername" placeholder="Masukkan Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Hak akses</label>
                                    <input type="text" name="hakakses" class="form-control" id="exampleInputhakakses" placeholder="Masukkan Hak Akses">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Unit Kerja</label>
                                    <input type="text" name="unitkerja" class="form-control" id="exampleInputunitkerja" placeholder="Masukkan Unit Kerja">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection