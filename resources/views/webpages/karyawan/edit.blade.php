@extends('partials.master')

@section('MASTER')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Input Data -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">EDIT DATA PEGAWAI</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Enter Nama" value="{{ $karyawan->nama_karyawan }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" id="nik" name='nik'
                                    placeholder="Enter NIK" value="{{ $karyawan->nik }}" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis Karyawan</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name='jenis_pegawai' value="{{ $karyawan->jenis_pegawai }}">
                                    <option selected='selected' disabled>Pilih Satu</option>
                                    <option>Tenaga Pendidik</option>
                                    <option>Tenaga Kependidikan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status Karyawan</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name='status_pegawai' value="{{ $karyawan->status_pegawai }}">
                                    <option selected='selected' disabled>Pilih Satu</option>
                                    <option>PNS</option>
                                    <option>Non PNS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Pendidikan Akhir</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name='pendidikan' value="{{ $karyawan->pendidikan }}">
                                    <option selected='selected' disabled>Pilih Satu</option>
                                    <option>SLTA</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_karyawan">Kota Lahir</label>
                                <input type="text" class="form-control" id="kota_lahir" name="kota_lahir"
                                    placeholder="Enter Nama Kota" required value="{{ $karyawan->kota_lahir }}">
                            </div>

                            <div class="form-group">
                                <label for="nama_karyawan">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $karyawan->tgl_lahir }}" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name='jenis_kelamin' value="{{ $karyawan->jenis_kelamin }}">
                                    <option selected='selected' disabled>Pilih Satu</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name='alamat'
                                    placeholder="Enter Alamat" required value="{{ $karyawan->alamat }}">
                            </div>

                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name='umur'
                                    placeholder="Enter Umur" required value="{{ $karyawan->umur }}">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="number" class="form-control" id="no_hp" name='no_hp'
                                    placeholder="Enter No HP" required value="{{ $karyawan->no_hp }}">
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name='id_agama'id="id_agama" value="{{ $karyawan->id_agama }}">
                                    <option selected='selected' disabled>Pilih Satu</option>
                                    @foreach ($agama as $agama)
                                        <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
