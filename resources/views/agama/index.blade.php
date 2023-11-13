@extends('partials.master')

@section('MASTER')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12">
                            <h3 class="card-title">Tabel Data Agama</h3>
                                <a href="{{ route('agama.create') }}" class="btn btn-success float-sm-right">TAMBAH DATA</a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA AGAMA</th>
                                        <th colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agamas as $agama)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $agama->nama_agama }}</td>
                                        <td><a href="{{ route('agama.edit', $agama->id) }}" class="btn btn-sm btn-warning"> Edit </a></td>
                                        <td>
                                            <form action="{{ route('agama.destroy',$agama->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"> Hapus </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection
