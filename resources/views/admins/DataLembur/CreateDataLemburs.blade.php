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
                            <label  class="form-label">Tanggal</label>
                            <input class="form-control" type="date" name="intanggal" id="intanggal" onchange="preview();"/>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label  class="form-label">Jumlah Jam</label>
                            <input class="form-control" type="text" name="injam" id="injam" placeholder="-" onchange="preview();"/>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="injenishari" class="form-label">Jenis Hari</label>
                            <select id="injenishari" class="form-select" onchange="preview();">
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="tanggal" name="tanggal" disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jam" name="jam" disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jenishari" name="jenishari" value="Hari Kerja"
                                                    disabled /></td>

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
                                placeholder="Jumlah Insentif" onchange="lembur();" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="rpinsentif" class="form-label">Rp. Insentif</label>
                            <input class="form-control" type="text" name="insentif" id="insentif"
                                placeholder="Nilai PerInsentif" onchange="lembur();" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="totalinsentif" class="form-label">Total Insentif</label>
                            <input class="form-control" type="text" name="total" id="total" placeholder="Total Insentif" onchange="lembur();"
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
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="jumlahinsentif" name="jumlahinsentif" placeholder="-"
                                                    disabled /></td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="rpinsentif" name="rpinsentif" placeholder="-"
                                                    disabled />
                                            </td>
                                            <td><input class="form-control absen text-center" style="border:none"
                                                    type="text" id="totalinsentif" name="totalinsentif" placeholder="-"
                                                    disabled /></td>
                                            
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
