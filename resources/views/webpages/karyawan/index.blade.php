@extends('partials.master')

@section('MASTER')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Data Karyawan</h3>
                        <a href="{{ route('karyawan.create') }}" class="btn btn-success float-sm-right">Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>NIK</th>
                                    <th>JENIS</th>
                                    <th>STATUS</th>
                                    <th>KOTA LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>PENDIDIKAN</th>
                                    <th>L/P</th>
                                    <th>ALAMAT</th>
                                    <th>UMUR</th>
                                    <th>AGAMA</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $karyawan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $karyawan->nama_karyawan }}</td>
                                        <td>{{ $karyawan->nik }}</td>
                                        <td>{{ $karyawan->jenis_pegawai }}</td>
                                        <td>{{ $karyawan->status_pegawai }}</td>
                                        <td>{{ $karyawan->kota_lahir }}</td>
                                        <td>{{ $karyawan->tgl_lahir }}</td>
                                        <td>{{ $karyawan->pendidikan }}</td>
                                        <td>{{ $karyawan->jenis_kelamin }}</td>
                                        <td>{{ $karyawan->alamat }}</td>
                                        <td>{{ $karyawan->umur }}</td>
                                        <td>{{ $karyawan->agama->nama_agama }}</td>
                                        <td>
                                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-sm btn-warning">Edit </a>
                                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="post">
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
