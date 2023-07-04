@extends('admin.index')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Unit Kerja</h3>
                        </div>
                        <form method="POST" action="{{ route('unitkerja.update', $data->id) }}">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUnit">Nama Unit Kerja</label>
                                    <input type="text" name="namaunit" class="form-control" id="exampleInputUnit" placeholder="Masukkan Unit Kerja" value="{{ $data->namaunit }}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection