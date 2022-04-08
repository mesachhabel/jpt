@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Absensi Data Karyawan /</span> Tambah Data Absensi
        </h4>
        <!-- Bordered Table -->
        <form id="formAccountSettings" method="POST" action="{{ route('absensi.update', $absensi->id) }}">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="form-label">Pilih Tahun Dan Bulan</label>
                        <div class="col-md-4 mb-3">
                            <div class="col-md-12">
                                <input class="form-control" name="bulantahun" type="month"
                                    value="{{ old('nama', $absensi->bulantahun) }}" id="html5-month-input" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button class="btn btn-primary" type="submit"><i class="bx bx-plus me-1"></i> Simpan</button>
                        </div>
                        <hr class="my-0" />
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <th rowspan="2">NIK</th>
                                    <th rowspan="2">NAMA</th>
                                    <th colspan="2">Dalam satuan menit</th>
                                    <th colspan="5">Dalam satuan hari</th>
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
                                <tr>
                                    <td>
                                        <select style="border:none; width:7rem; text-align:center;" name="nik" id="nik"
                                            class="form-control input-lg" disabled>
                                            <option value="{{ old('nik', $absensi->nik) }}" disabled selected>
                                                {{ old('nik', $absensi->nik) }}
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select style="border:none; width:13rem; text-align:center;" name="nama" id="nama"
                                            class="form-control input-lg" disabled>
                                            <option value="{{ old('nama', $absensi->nama) }}" disabled selected>
                                                {{ old('nama', $absensi->nama) }}</option>

                                        </select>
                                    </td>
                                    <td><input value="{{ old('telat', $absensi->telat) }}"
                                            class="form-control absen text-center" style="border:none" type="text"
                                            id="telat" name="telat" placeholder="Telat" />
                                    </td>
                                    <td><input value="{{ old('plgcpt', $absensi->plgcpt) }}"
                                            class="form-control absen text-center" style="border:none" type="text"
                                            id="plgcpt" name="plgcpt" placeholder="Pulang Cepat" /></td>
                                    <td><input value="{{ old('alpha', $absensi->alpha) }}"
                                            class="form-control absen text-center" style="border:none" type="text"
                                            id="alpha" name="alpha" placeholder="Alpha" />
                                    </td>
                                    <td><input value="{{ old('ijin', $absensi->ijin) }}"
                                            class="form-control absen text-center" style="border:none" type="text" id="ijin"
                                            name="ijin" placeholder="Ijin" />
                                    </td>
                                    <td><input value="{{ old('sakit', $absensi->sakit) }}"
                                            class="form-control absen text-center" style="border:none" type="text"
                                            id="sakit" name="sakit" placeholder="Sakit" />
                                    </td>
                                    <td><input value="{{ old('dnsluar', $absensi->dnsluar) }} "
                                            class="form-control absen text-center" style="border:none" type="text"
                                            id="dnsluar" name="dnsluar" placeholder="Dinas Luar" /></td>
                                    <td><input value="{{ old('cuti', $absensi->cuti) }}"
                                            class="form-control absen text-center" style="border:none" type="text" id="cuti"
                                            name="cuti" placeholder="Cuti" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--/ Bordered Table -->
    <hr class="my-5" />
@endsection
