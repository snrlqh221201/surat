@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Surat Masuk</h3>
                        </div>
                        <form method="POST" action="/daftarsuratmasuk/store">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUser">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" id="exampleInputtanggal" placeholder="Masukkan Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">No Surat</label>
                                    <input type="text" name="nosurat" class="form-control" id="exampleInputnosurat" placeholder="Masukkan No Surat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Sifat Surat</label>
                                    <input type="text" name="sifatsurat" class="form-control" id="exampleInputsifatsurat" placeholder="Masukkan Sifat Surat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="exampleInputperihal" placeholder="Masukkan Perihal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Pengirim</label>
                                    <input type="text" name="pengirim" class="form-control" id="exampleInputpengirim" placeholder="Masukkan pengirim">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Unit Kerja</label>
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