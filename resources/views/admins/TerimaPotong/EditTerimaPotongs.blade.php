@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Penerimaan dan Potongan Lain /</span> Edit Data
        </h4>
        <form id="formAccountSettings" method="POST" action="{{ route('terimapotong.update', $terimapotong->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Karyawan</h5>
                        <!-- Account -->
                        <hr class="my-0" />
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                                    <div class="col-md-12">
                                        <input class="form-control" name="bulan" type="month"
                                            value="{{ old('bulan', $terimapotong->bulan) }}" id="html5-month-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">NIK</label>
                                    <input class="form-control" type="text" value="{{ old('nik', $terimapotong->nik) }}"
                                        disabled>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Nama</label>
                                    <input class="form-control" value="{{ old('nama', $terimapotong->nama) }}"
                                        disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input class="form-control" value="{{ old('jabatan', $terimapotong->jabatan) }}"
                                        disabled />
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
                        <h5 class="card-header">Data Penerimaan</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mb-3 col-md-12">
                                <label for="defaultSelect" class="form-label">Kode Penerimaan</label>
                                <select name="kode_penerimaan" id="defaultSelect" class="form-select">
                                    <option value="{{ old('kode_penerimaan', $terimapotong->kode_penerimaan) }}" disabled
                                        selected>
                                        {{ old('kode_penerimaan', $terimapotong->kode_penerimaan) }}
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="uraian_penerimaan" class="form-label">Uraian Penerimaan</label>
                                <input class="form-control"
                                    value="{{ old('kode_penerimaan', $terimapotong->kode_penerimaan) }}" type="text"
                                    name="uraian_penerimaan" id="uraian_penerimaan" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_penerimaan" class="form-label">Jumlah Penerimaan</label>
                                <input class="form-control"
                                    value="{{ old('jumlah_penerimaan', $terimapotong->jumlah_penerimaan) }}" type="text"
                                    name="jumlah_penerimaan" id="jumlah_penerimaan" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Label Badges -->
                <div class="col-md-9">
                    <div class="card mb-4">
                        <h5 class="card-header">Rincian Penerimaan Lain-lain</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead class="text-center" style="vertical-align:middle;">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ old('kode_penerimaan', $terimapotong->kode_penerimaan) }}</td>
                                                <td>{{ old('uraian_penerimaan', $terimapotong->uraian_penerimaan) }}</td>
                                                <td>{{ old('jumlah_penerimaan', $terimapotong->jumlah_penerimaan) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>
            <hr class="my-4" />

            <div class="row">
                <!-- Label Badges -->
                <div class="col-md-9">
                    <div class="card mb-4">
                        <h5 class="card-header">Rincian Potongan Lain-lain</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="card">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead class="text-center" style="vertical-align:middle;">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ old('kode_potongan', $terimapotong->kode_potongan) }}</td>
                                                <td>{{ old('uraian_potongan', $terimapotong->uraian_potongan) }}</td>
                                                <td>{{ old('jumlah_potongan', $terimapotong->jumlah_potongan) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Badges -->
                <div class="col-md-3">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Potongan</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mb-3 col-md-12">
                                <label for="defaultSelect" class="form-label">Kode Potongan</label>
                                <select name="kode_potongan" id="defaultSelect" class="form-select" disabled>
                                    <option value="{{ old('kode_potongan', $terimapotong->kode_potongan) }}" disabled
                                        selected>{{ old('kode_potongan', $terimapotong->kode_potongan) }}</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="uraian_potongan" class="form-label">Uraian Potongan</label>
                                <input class="form-control" type="text" name="uraian_potongan" id="uraian_potongan"
                                    value="{{ old('uraian_potongan', $terimapotong->uraian_potongan) }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_potongan" class="form-label">Jumlah Potongan</label>
                                <input class="form-control" type="text" name="jumlah_potongan" id="jumlah_potongan"
                                    value="{{ old('jumlah_potongan', $terimapotong->jumlah_potongan) }}" />
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mt-0">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                <button type="button" class="btn btn-danger me-2"><a
                                        href="{{ route('terimapotong.index') }}" style="color: #fff">Back</a></button>
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
