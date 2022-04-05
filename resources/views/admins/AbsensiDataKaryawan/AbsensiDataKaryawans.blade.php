@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data /</span> Absensi Data Karyawan
        </h4>
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="html5-month-input" class="form-label">Month</label>
                    <div class="col-md-4 mb-3">
                        <input name="bulan" class="form-control" type="month" value="2021-01" id="html5-month-input" />
                    </div>
                    <hr class="my-0" />
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead class="text-center" style="vertical-align:middle;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIK</th>
                                <th rowspan="2">NAMA</th>
                                <th colspan="2">Dalam satuan menit</th>
                                <th colspan="5">Dalam satuan hari</th>
                                <th rowspan="2">Bulan</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            <tr>
                                <th>Telat</th>
                                <th>Pulang<br>Cepat</th>
                                <th>Alpha</th>
                                <th>Ijin</th>
                                <th>Sakit</th>
                                <th>Dinas<br>Luar</th>
                                <th>Cuti</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $no = 1; ?>
                            @forelse ($absensis as $absen)
                                <tr>
                                    <td>
                                        {{ $no++ }}
                                    </td>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $absen->nik }}</strong>
                                    </td>
                                    <td>
                                        {{ $absen->nama }}
                                    </td>
                                    <td>
                                        {{ $absen->telat }}
                                    </td>
                                    <td>
                                        {{ $absen->plgcpt }}
                                    </td>
                                    <td>
                                        {{ $absen->alpha }}
                                    </td>
                                    <td>
                                        {{ $absen->ijin }}
                                    </td>
                                    <td>
                                        {{ $absen->sakit }}
                                    </td>
                                    <td>
                                        {{ $absen->dnsluar }}
                                    </td>
                                    <td>
                                        {{ $absen->cuti }}
                                    </td>
                                    <td>
                                        {{ $absen->bulan }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('absensi.edit', $absen->id) }}" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <form action="{{ route('absensi.destroy', $absen->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Abensi Belum Ada.
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
