@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Transaksi Data / Penerimaan dan Potongan Lain /</span> Tambah Data
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
                                <label for="defaultSelect" class="form-label">NIK</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih NIK --</option>
                                    <option value="1">.....</option>
                                    <option value="2">.....</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NPWP" class="form-label">Jabatan</label>
                                <input class="form-control" type="text" id="NPWP" name="NPWP" value="47.664.977.7-609.000" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoKTP" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Siapa aja" />
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
                <h5 class="card-header">Data Penerimaan</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="mb-3 col-md-12">
                        <label for="defaultSelect" class="form-label">Kode Penerimaan</label>
                        <select id="defaultSelect" class="form-select">
                            <option>-- Pilih Penerimaan --</option>
                            <option value="1">.....</option>
                            <option value="2">.....</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="NoKTP" class="form-label">Uraian Penerimaan</label>
                        <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Siapa aja" />
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="NoKTP" class="form-label">Jumlah Penerimaan</label>
                        <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Siapa aja" />
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
                <h5 class="card-header">Rincian Penerimaan Lain-lain</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="card">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead class="text-center" style="vertical-align:middle;">
                                    <tr>
                                        <th>Kode</th>
                                        <th>Uraian</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>10000</strong></td>
                                        <td>Bayu Rezky Ramadhan Rezky Ramadhan</td>
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
                                        <th>Kode</th>
                                        <th>Uraian</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>10000</strong></td>
                                        <td>Bayu Rezky Ramadhan Rezky Ramadhan</td>
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
        </div>
        <!-- Basic Badges -->
        <div class="col-md-3">
            <div class="card mb-4">
                <h5 class="card-header">Data Potongan</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="mb-3 col-md-12">
                        <label for="defaultSelect" class="form-label">Kode Potongan</label>
                        <select id="defaultSelect" class="form-select">
                            <option>-- Pilih Potongan --</option>
                            <option value="1">.....</option>
                            <option value="2">.....</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="NoKTP" class="form-label">Uraian Potongan</label>
                        <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Siapa aja" />
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="NoKTP" class="form-label">Jumlah Potongan</label>
                        <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Siapa aja" />
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
    </div>

</div>
<!--/ Striped Rows -->
<hr class="my-5" />
@endsection