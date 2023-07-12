@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Surat Keluar</h3>
                        </div>
                        <form method="POST" action="{{ route('suratkeluar.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputUser">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputtanggal" placeholder="Masukkan Tanggal" class="form-control" value="{{ old('tanggal') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">No Surat</label>
                                    <input type="text" name="nosurat" class="form-control" id="exampleInputnosurat" placeholder="Masukkan No Surat" class="form-control" value="{{ old('nosurat') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="exampleInputperihal" placeholder="Masukkan Perihal" class="form-control" value="{{ old('perihal') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Sifat Surat</label>
                                    <input type="text" name="sifat_surat" class="form-control" id="exampleInputsifatsurat" placeholder="Masukkan Sifat Surat" class="form-control" value="{{ old('sifat_surat') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Unit Kerja</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="unit_kerja_id">
                                        <option selected>Pilih Unit Kerja</option>
                                        @foreach ($unitKerja as $id => $item)
                                            <option value="{{ $id }}" {{ old('unit_kerja_id') == $id ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUser">Kepada</label>
                                    <input type="text" name="kepada" class="form-control" id="exampleInputkepada" placeholder="Masukkan kepada" class="form-control" value="{{ old('kepada') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="uploadSurat">Upload Surat</label>
                                    <input type="file" class="form-control @error('file_surat') is-invalid @enderror" id="uploadSurat" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file_surat" value="{{ old('file_surat') }}">
                                    @error('file_surat')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
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