@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Transaksi Data / Absensi Data Karyawan /</span> Tambah Data Absensi
    </h4>
    <!-- Bordered Table -->
    <div class="card">
        <div class="card-body">
            <div class="mb-3 row">
                <label for="html5-month-input" class="form-label">Month</label>
                <div class="col-md-4 mb-3">
                    <input class="form-control" type="month" value="2021-06" id="html5-month-input" />
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
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>10000</strong></td>
                            <td>Bayu Rezky Ramadhan Rezky Ramadhan</td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control absen text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-detail me-1"></i> Detail</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-react fa-lg text-info me-3 "></i> <strong>10000</strong></td>
                            <td>2022</td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>10000</strong></td>
                            <td>2022</td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>10000</strong>
                            </td>
                            <td>2022</td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td><input class="form-control text-center" style="border:none" type="text" id="NIK" name="NIK" value="1" /></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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
<!--/ Bordered Table -->
<hr class="my-5" />
@endsection