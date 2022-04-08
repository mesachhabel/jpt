@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Lembur Karyawan /</span> Tambah Data
        </h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Data Karyawan</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                                    <div class="col-md-12">
                                        <input class="form-control" type="month" value="2021-06" id="html5-month-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">NPP</label>
                                    <select id="defaultSelect" class="form-select">
                                        <option>-- Pilih NPP --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NPWP" class="form-label">Jabatan</label>
                                    <input class="form-control" type="text" id="NPWP" name="NPWP" value="HRD" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoKTP" class="form-label">Nama</label>
                                    <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Rudistiar" />
                                </div>
                            </div>
                        </form>
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
                            <label for="NoKTP" class="form-label">Tanggal</label>
                            <input class="form-control" type="date" name="NoKTP" id="NoKTP" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="NoKTP" class="form-label">Jumlah Jam</label>
                            <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="7" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="defaultSelect" class="form-label">Jenis Hari</label>
                            <select id="defaultSelect" class="form-select">
                                <option>-- Pilih Hari --</option>
                                <option value="1">Hari Kerja</option>
                                <option value="2">Hari Libur</option>
                                <option value="3">Libur Nasional</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-0" />

                </div>
            </div>
            <!-- Label Badges -->
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
                                            <th>Tanggal</th>
                                            <th>Jumlah Jam</th>
                                            <th>Jenis Hari</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="tanggal" name="tanggal" disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jam" name="jam" value="7" disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jenishari" name="jenishari" value="Hari Kerja"
                                                    disabled /></td>

                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-detail me-1"></i> Detail</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                            <input class="form-control" type="text" name="jumlah" id="jumlah"
                                placeholder="Jumlah Insentif" onkeyup="lembur();" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="rpinsentif" class="form-label">Rp. Insentif</label>
                            <input class="form-control" type="text" name="insentif" id="insentif"
                                placeholder="Nilai PerInsentif" onkeyup="lembur();" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="totalinsentif" class="form-label">Total Insentif</label>
                            <input class="form-control" type="text" name="total" id="total" placeholder="Total Insentif"
                                disabled />
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="mt-0">
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Label Badges -->
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
                                            <th>Jumlah</th>
                                            <th>Rp. Insentif</th>
                                            <th>Total Insentif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jumlahinsentif" name="jumlahinsentif" value="2"
                                                    disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="rpinsentif" name="rpinsentif" value="10000" disabled />
                                            </td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="totalinsentif" name="totalinsentif" value="20000"
                                                    disabled /></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-detail me-1"></i> Detail</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ Striped Rows -->
        <hr class="my-5" />
        <script src="../../../assets/js/lembur.js"></script>
    @endsection
