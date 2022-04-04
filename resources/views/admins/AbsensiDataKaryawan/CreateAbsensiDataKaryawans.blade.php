@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Absensi Data Karyawan /</span> Tambah Data Absensi
        </h4>
        <!-- Bordered Table -->
        <form id="formAccountSettings" method="POST" action="{{ route('absensi.store') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="form-label">Month</label>
                        <div class="col-md-4 mb-3">
                            <input name="bulan" class="form-control" type="month" value="2021-01" id="html5-month-input" />
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="bx bx-plus me-1"></i> Simpan</button>
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
                                <tr>
                                    <td>
                                        {{-- <input name="nik" value="{{ $karyawan->nik }}"
                                                class="form-control absen text-center" style="border:none" type="text" /> --}}
                                        <select name="nik" id="defaultSelect" class="form-select">
                                            <option disabled selected>-- Pilih NIK --</option>
                                            @foreach ($data_karyawans as $karyawan)
                                                <option value="{{ $karyawan->nik }}">{{ $karyawan->nik }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        @if ($karyawan->skk == '1')
                                            {{ $karyawan->nama }}
                                        @endif
                                        <input name="nama" class="form-control absen text-center" style="border:none"
                                            type="text" />
                                    </td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="telat" name="telat" placeholder="Telat" />
                                    </td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="plgcpt" name="plgcpt" placeholder="Pulang Cepat" /></td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="alpha" name="alpha" placeholder="Alpha" />
                                    </td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="ijin" name="ijin" placeholder="Ijin" />
                                    </td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="sakit" name="sakit" placeholder="Sakit" />
                                    </td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="dnsluar" name="dnsluar" placeholder="Dinas Luar" /></td>
                                    <td><input class="form-control absen text-center" style="border:none" type="text"
                                            id="cuti" name="cuti" placeholder="Cuti" />
                                    </td>
                                    <td>
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
