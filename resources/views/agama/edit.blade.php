@extends('partials.master')

@section('MASTER')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Input Data -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">EDIT DATA AGAMA</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('agama.update', $agama->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_agama">Nama Agama:</label>
                                <input type="text" class="form-control" id="nama_agama" name="nama_agama" value="{{ $agama->nama_agama }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
