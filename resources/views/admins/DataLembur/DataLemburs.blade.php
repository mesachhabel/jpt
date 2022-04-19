@extends('layouts.main')
@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data /</span> Lembur Karyawan
        </h4>
        <a href="{{ route('lembur.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('lembur.index') }}" method="GET">
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                        <div class="col-md-3">
                            <input class="form-control" name="bulan" type="month" placeholder="Cari Bulan Disini"
                                id="bulan" />
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Search</button>
                            <a href="{{ route('lembur.index') }}" class="btn btn-warning">Reset</a>
                        </div>
                        <hr class="my-3" />
                    </div>
                </form>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="text-center" style="vertical-align:middle;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Bulan & Tahun</th>
                                <th rowspan="2">Nama</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Npp</th>
                                <th colspan="3">Detail Jam Lembur</th>
                                <th colspan="3">Detail Insentif</th>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah<br>Jam</th>
                                <th>Jenis<br>Hari</th>
                                <th>Jumlah</th>
                                <th>Rp.Insentif</th>
                                <th>Total<br>Insentif</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 tbody">
                            <?php $no = 1; ?>
                            @forelse ($lemburs as $lembur)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $lembur->bulan }}</td>
                                    <td>{{ $lembur->nama }}</td>
                                    <td>{{ $lembur->jabatan }}</td>
                                    <td>{{ $lembur->npp }}</td>
                                    <td>{{ $lembur->tanggal_lembur }}</td>
                                    <td>{{ $lembur->jumlah_jam_lembur }}</td>
                                    <td>{{ $lembur->jenis_hari_lembur }}</td>
                                    <td>{{ $lembur->jumlah_insentif }}</td>
                                    <td>{{ $lembur->nilai_insentif }}</td>
                                    <td>{{ $lembur->total_insentif }}</td>
                                    <td>
                                        <a href="{{ route('lembur.edit', $lembur->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('lembur.destroy', $lembur->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Lembur Karyawan Belum Ada.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
@endsection
