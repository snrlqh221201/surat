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
                        <form method="POST" action="{{ route('pengguna.update', $data->id) }}">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputusername" placeholder="Masukkan Username" value="{{ $data->usrname }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengguna">Hak akses</label>
                                    <input type="text" name="hakakses" class="form-control" id="exampleInputhakakses" placeholder="Masukkan Hak Akses" value="{{ $data->hakakses }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Unit Kerja</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="unit_kerja_id">
                                        <option selected>Pilih Unit Kerja</option>
                                        @foreach ($unitkerjas as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->unit_kerja_id ? 'selected' : '' }}>{{ $item->namaunit }}</option>
                                        @endforeach
                                    </select>
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