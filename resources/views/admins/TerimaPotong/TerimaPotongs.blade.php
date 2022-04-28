@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data /</span> Penerimaan dan Potongan Lain
        </h4>
        <a href="{{ route('terimapotong.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('terimapotong.index') }}" method="GET">
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                        <div class="col-md-3">
                            <input class="form-control" name="bulan" type="month" placeholder="Cari Bulan Disini"
                                id="bulan" />
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Search</button>
                            <a href="{{ route('terimapotong.index') }}" class="btn btn-warning">Reset</a>
                        </div>
                        <hr class="my-3" />
                    </div>
                </form>
                <div class="table-responsive text-nowrap">
                    <table id="table" class="table table-striped table-hover table-bordered">
                        <thead class="text-center" style="vertical-align:middle;">
                            <tr>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Bulan & Tahun</th>
                                <th rowspan="2">Nik</th>
                                <th rowspan="2">Nama</th>
                                <th rowspan="2">Jabatan</th>
                                <th colspan="3">Rincian Penerimaan Lain-lain</th>
                                <th colspan="3">Rincian Potongan Lain-lain</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th>Kode<br> Penerimaan</th>
                                <th>Uraian<br> Penerimaan</th>
                                <th>Jumlah<br> Penerimaan</th>
                                <th>Kode<br> Potongan</th>
                                <th>Uraian<br> Potongan</th>
                                <th>Jumlah<br> Potongan</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody class="text-center" style="vertical-align:middle;">
                            <?php $no = 1; ?>
                            @forelse ($terimapotongs as $terimapotong)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $terimapotong->bulan }}</td>
                                    <td>{{ $terimapotong->nik }}</td>
                                    <td>{{ $terimapotong->nama }}</td>
                                    <td>{{ $terimapotong->jabatan }}</td>
                                    <td>{{ $terimapotong->kode_penerimaan }}</td>
                                    <td>{{ $terimapotong->uraian_penerimaan }}</td>
                                    <td>{{ $terimapotong->jumlah_penerimaan }}</td>
                                    <td>{{ $terimapotong->kode_potongan }}</td>
                                    <td>{{ $terimapotong->uraian_potongan }}</td>
                                    <td>{{ $terimapotong->jumlah_potongan }}</td>
                                    <td>
                                        <a href="{{ route('terimapotong.edit', $terimapotong->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('terimapotong.destroy', $terimapotong->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <div class="alert alert-danger">
                                        Data Penerimaan Dan Potongan Lain Belum Ada.
                                    </div>
                                </tr>
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
