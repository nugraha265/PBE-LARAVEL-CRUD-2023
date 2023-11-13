@extends('partials.master')

@section('MASTER')
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Input Data -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">TAMBAH DATA AGAMA</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <form action="{{ route('agama.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_agama">Nama Agama</label>
                                        <input type="text" class="form-control" id="nama_agama" name="nama_agama"
                                            placeholder="Enter Nama" required>
                                    </div>
                                    <input name='submit' value='submit' type="submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
@endsection
