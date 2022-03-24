@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data / Data Karyawan /</span> Tambah Data Karyawan
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="NIK" class="form-label">NIK</label>
                                <input class="form-control" type="text" id="NIK" name="NIK" value="10001" autofocus />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="Nama" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" name="Nama" id="Nama" value="Dwi Suprihatiningsih, SE" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="NPP" class="form-label">NPP Instansi</label>
                                <input class="form-control" type="text" id="NPP" name="NPP" value="01600" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option value="1">Laki Laki</option>
                                    <option value="2">Perempuan</option>
                                    <option value="3">Lain Lain ..</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="defaultSelect" class="form-label">Agama</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Agama --</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen Protestan</option>
                                    <option value="3">Kristen Katholik</option>
                                    <option value="4">Buddha</option>
                                    <option value="5">Hindu</option>
                                    <option value="6">Konghuchu</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="defaultSelect" class="form-label">Status Keluarga</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Status Keluarga --</option>
                                    <option value="1">Belum Kawin</option>
                                    <option value="2">Kawin</option>
                                    <option value="3">Janda</option>
                                    <option value="4">Duda</option>
                                </select>
                            </div>
                        </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="defaultSelect" class="form-label">Instansi Asal</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Instansi Asal --</option>
                                    <option value="1">PT. Jasamarga Pandaan Tol</option>
                                    <option value="2">PT. Jasamarga (Persero) TBK</option>
                                    <option value="3">PT. Trans Optima Luhur</option>
                                    <option value="4">PT. Entrada Utama</option>
                                    <option value="5">PT. Jalan Tol Kabupaten Pasuruan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="defaultSelect" class="form-label">Golongan Instansi</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Golongan Instansi --</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">.....</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NPWP" class="form-label">NPWP</label>
                                <input class="form-control" type="text" id="NPWP" name="NPWP" value="47.664.977.7-609.000" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoKTP" class="form-label">Nomor KTP</label>
                                <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="-" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoBPJST" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                <input class="form-control" type="text" id="NoBPJST" name="NoBPJST" value="83J82011368" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoBPJSK" class="form-label">Nomor BPJS Kesehatan</label>
                                <input class="form-control" type="text" name="NoBPJSK" id="NoBPJSK" value="-" />
                            </div>
                        </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="html5-date-input" class="form-label">Tanggal Masuk Kerja</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Status Karyawan --</option>
                                    <option value="1">[DR] Direksi</option>
                                    <option value="2">[KM] Komisaris</option>
                                    <option value="3">[OP] Operasional</option>
                                    <option value="4">[OS] Outsourcing</option>
                                    <option value="5">[TP] Karyawan Tetap</option>
                                    <option value="6">[TX] PKWT Jasamarga</option>
                                    <option value="7">[TY] PKWT Eksternal</option>
                                    <option value="8">[TZ] Tenaga Ahli</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="defaultSelect" class="form-label">Jabatan</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>-- Pilih Jabatan --</option>
                                    <option value="1">.....</option>
                                    <option value="2">.....</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NPWP" class="form-label">Golongan Jabatan</label>
                                <input class="form-control" type="text" id="NPWP" name="NPWP" value="47.664.977.7-609.000" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoKTP" class="form-label">Baris Golongan</label>
                                <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="-" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoBPJST" class="form-label">Anggota Serikat</label>
                                <input class="form-control" type="text" id="NoBPJST" name="NoBPJST" value="83J82011368" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="NoBPJSK" class="form-label">Unit Kerja</label>
                                <input class="form-control" type="text" name="NoBPJSK" id="NoBPJSK" value="-" />
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

            <div class="card mb-4">
                <h5 class="card-header">Data Jasamarga</h5>
                <!-- Account -->
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-3">
                                <label for="NPP" class="form-label">NPP Instansi</label>
                                <input class="form-control" type="text" id="NPP" name="NPP" value="01600" />
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="Gol" class="form-label">Gol Instansi</label>
                                <input class="form-control" type="text" id="Gol" name="Gol" value="1C" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="PhDP" class="form-label">PhDP</label>
                                <input class="form-control" type="text" id="PhDP" name="PhDP" value="8.134.245" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="UpahJSMR" class="form-label">Upah JSMR</label>
                                <input class="form-control" type="text" id="UpahJSMR" name="UpahJSMR" value="21.784.439" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="PhDA" class="form-label">PhDA</label>
                                <input class="form-control" type="text" id="PhDA" name="PhDA" value="19.784.439" autofocus />
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
</div>
<!--/ Striped Rows -->
<hr class="my-5" />
@endsection