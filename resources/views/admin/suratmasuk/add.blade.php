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
                        <form method="POST" action="{{ route('suratmasuk.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputtanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputtanggal" placeholder="Masukkan Tanggal" class="form-control" value="{{ old('tanggal') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputnosurat">No Surat</label>
                                    <input type="text" name="nosurat" class="form-control" id="exampleInputnosurat" placeholder="Masukkan No Surat" class="form-control" value="{{ old('nosurat') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsifatsurat">Sifat Surat</label>
                                    <input type="text" name="sifat_surat" class="form-control" id="exampleInputsifatsurat" placeholder="Masukkan Sifat Surat" class="form-control" value="{{ old('sifat_surat') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputperihal">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="exampleInputperihal" placeholder="Masukkan Perihal" class="form-control" value="{{ old('perihal') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputpengirim">Pengirim</label>
                                    <input type="text" name="pengirim" class="form-control" id="exampleInputpengirim" placeholder="Masukkan pengirim" class="form-control" value="{{ old('pengirim') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSuratMasuk">Unit Kerja</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="unit_kerja_id" >
                                        <option selected>Pilih Unit Kerja</option>
                                        @foreach ($unitKerja as $id => $item)
                                            <option value="{{ $id }}" {{ old('unit_kerja_id') == $id ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>
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