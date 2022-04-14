@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Lembur Karyawan /</span> Edit Data
        </h4>
        <form id="formAccountSettings" method="POST" action="{{ route('lembur.update', $lembur->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Karyawan</h5>
                        <!-- Account -->
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                                    <div id="datetimepicker" class="col-md-12">
                                        <input name="bulan" class="form-control" type="month"
                                            value="{{ old('bulan', $lembur->bulan) }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input class="form-control" value="{{ old('nama', $lembur->nama) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">NPP</label>
                                    <input class="form-control" value="{{ old('npp', $lembur->npp) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jabatan</label>
                                    <input class="form-control" value="{{ old('jabatan', $lembur->jabatan) }}" />
                                </div>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <hr class="my-4" />
            <div class="row">
                <!-- Basic Badges -->
                <div class="col-md-3">
                    <div class="card mb-4">
                        <h5 class="card-header">Input Detail Jam Lembur</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mb-3 col-md-12">
                                <label for="tanggal_lembur" class="form-label">Tanggal</label>
                                <input class="form-control" type="date" name="tanggal_lembur" id="intanggal"
                                    value="{{ old('tanggal_lembur', $lembur->tanggal_lembur) }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_jam_lembur" class="form-label">Jumlah Jam</label>
                                <input class="form-control" type="text" name="jumlah_jam_lembur" id="injam"
                                    placeholder="Masukan Jumlah Jam"
                                    value="{{ old('jumlah_jam_lembur', $lembur->jumlah_jam_lembur) }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="defaultSelect" class="form-label">Jenis Hari</label>
                                <input name="jenis_hari_lembur" id="injenishari" class="form-select"
                                    value="{{ old('jenis_hari_lembur', $lembur->jenis_hari_lembur) }}" disabled />
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mb-4">
                        <h5 class="card-header">Detail Jam Lembur</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead class="text-center" style="vertical-align:middle;">
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah Jam</th>
                                                <th>Jenis Hari</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            @foreach ($lemburs as $lembur)
                                                <tr>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            value="{{ $no++ }}" type="text" disabled />
                                                    </td>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            value="{{ $lembur->tanggal_lembur }}" type="text" id="tanggal"
                                                            name="tanggal" disabled />
                                                    </td>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            value="{{ $lembur->jumlah_jam_lembur }}" type="text" id="jam"
                                                            name="jam" disabled />
                                                    </td>
                                                    <td>
                                                        @if ($lembur->jenis_hari_lembur == '1')
                                                            <input class="form-control absen text-center"
                                                                style="border:none" value="Hari Kerja" type="text" id="jam"
                                                                name="jam" disabled />
                                                        @elseif ($lembur->jenis_hari_lembur == '2')
                                                            <input class="form-control absen text-center"
                                                                style="border:none" value="Hari Libur" type="text" id="jam"
                                                                name="jam" disabled />
                                                        @elseif ($lembur->jenis_hari_lembur == '3')
                                                            <input class="form-control absen text-center"
                                                                style="border:none" value="Libur Nasional" type="text"
                                                                id="jam" name="jam" disabled />
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <div class="row">
                <!-- Basic Badges -->
                <div class="col-md-3">
                    <div class="card mb-4">
                        <h5 class="card-header">Input Data Insentif</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mb-3 col-md-12">
                                <label for="jumlahinsentif" class="form-label">Jumlah</label>
                                <input class="form-control" type="text" name="jumlah_insentif" id="jumlah"
                                    placeholder="Jumlah Insentif"
                                    value="{{ old('jumlah_insentif', $lembur->jumlah_insentif) }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="rpinsentif" class="form-label">Rp. Insentif</label>
                                <input class="form-control" type="text" name="nilai_insentif" id="insentif"
                                    placeholder="Nilai PerInsentif"
                                    value="{{ old('nilai_insentif', $lembur->nilai_insentif) }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="totalinsentif" class="form-label">Total Insentif</label>
                                <input class="form-control" type="text" name="total_insentif" id="total"
                                    placeholder="Total Insentif" readonly
                                    value="{{ old('total_insentif', $lembur->total_insentif) }}" />
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mt-0">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    <a href="{{ route('lembur.index') }} ">Cancel</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mb-4">
                        <h5 class="card-header">Detail Insentif</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead class="text-center" style="vertical-align:middle;">
                                            <tr>
                                                <th>No</th>
                                                <th>Jumlah</th>
                                                <th>Rp. Insentif</th>
                                                <th>Total Insentif</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            @foreach ($lemburs as $lembur)
                                                <tr>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            value="{{ $no++ }}" type="text" disabled /></td>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            type="text" id="jumlahinsentif"
                                                            value="{{ $lembur->jumlah_insentif }}" name="jumlahinsentif"
                                                            placeholder="-" disabled /></td>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            type="text" id="rpinsentif"
                                                            value="{{ $lembur->nilai_insentif }}" name="rpinsentif"
                                                            placeholder="-" disabled />
                                                    </td>
                                                    <td><input class="form-control absen text-center" style="border:none"
                                                            type="text" id="totalinsentif"
                                                            value="{{ $lembur->total_insentif }}" name="totalinsentif"
                                                            placeholder="-" disabled />
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
@endsection
