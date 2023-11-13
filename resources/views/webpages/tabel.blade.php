@extends('partials.master')

@section('MASTER')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <a href="/tabel-karyawan" class="card-title" >Tabel Karyawan</a>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="/tabel-agama" class="card-title" >Tabel Agama</a>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
@endsection
