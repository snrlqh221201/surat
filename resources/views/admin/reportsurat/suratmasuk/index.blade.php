@extends('admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action="{{ route('reportsuratmasuk.store') }}" class="bg-white p-5 mt-4 rounded">
                    @csrf
                    <div class="row align-items-center">
                        <label class="col-md-1 m-0 p-0 text-end">Dari</label>
                        <div class="col-md-2">
                            <div class="input-group" id="datepicker-disabled-past1" data-date-format="yyyy-mm-dd">
                                <input type="date" name="dari" placeholder="Dari" class="form-control" required />
                            </div>
                        </div>
                        <label class="col-md-1 m-0 p-0 text-end">Sampai</label>
                        <div class="col-md-2">
                            <div class="input-group" id="datepicker-disabled-past2" data-date-format="yyyy-mm-dd">
                                <input type="date" name="sampai" placeholder="Sampai" class="form-control" required />
                            </div>
                        </div>
                        <label class="col-md-2 m-0 p-0 text-end">Unit Kerja</label>
                        <div class="col-md-2">
                            <select class="form-select" name="unitKerja">
                                @foreach ($unitKerja as $item)
                                <option value="{{ $item->id }}">{{ $item->namaunit }}</option>
                                @endforeach
                                <option value="all">Semua</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search me-1"></i>Get Report</button>;
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection