@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Data Karyawan /</span> Tambah Data Karyawan
        </h4>

        <div class="row">
            <form id="formAccountSettings" method="POST" action="{{ route('admin.add-datakaryawan') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                                    width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
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
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="NIK" class="form-label">NIK</label>
                                    <input class="form-control" type="text" id="NIK" name="nik" placeholder="10001"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="Nama" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" id="Nama"
                                        placeholder="Dwi Suprihatiningsih, SE" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="NPP" class="form-label">NPP Instansi</label>
                                    <input class="form-control" type="text" id="NPP" name="nppi" placeholder="01600" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                                    <select id="defaultSelect" name="jk" class="form-select">
                                        <option disabled selected>-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki - Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Lain - Lain">Lain Lain ..</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Agama</label>
                                    <select id="defaultSelect" name="agama" class="form-select">
                                        <option disabled selected>-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katholik">Kristen Katholik</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Status Keluarga</label>
                                    <select name="skk" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Status Keluarga --</option>
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
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Instansi Asal</label>
                                    <select name="ia" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Instansi Asal --</option>
                                        <option value="PT. Jasamarga Pandaan Tol">PT. Jasamarga Pandaan Tol</option>
                                        <option value="PT. Jasamarga (Persero) TBK">PT. Jasamarga (Persero) TBK</option>
                                        <option value="PT. Trans Optima Luhur">PT. Trans Optima Luhur</option>
                                        <option value="PT. Entrada Utama">PT. Entrada Utama</option>
                                        <option value="PT. Jalan Tol Kabupaten Pasuruan">PT. Jalan Tol Kabupaten Pasuruan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Golongan Instansi</label>
                                    <select name="gi" id="defaultSelect" class="form-select">
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
                                    <input class="form-control" type="text" id="NPWP" name="npwp"
                                        placeholder="47.664.977.7-609.000" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoKTP" class="form-label">Nomor KTP</label>
                                    <input class="form-control" type="text" name="nktp" id="NoKTP" placeholder="-" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJST" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                    <input class="form-control" type="text" id="NoBPJST" name="nbpkt"
                                        placeholder="83J82011368" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJSK" class="form-label">Nomor BPJS Kesehatan</label>
                                    <input class="form-control" type="text" name="nbpks" id="NoBPJSK" placeholder="-" />
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="html5-date-input" class="form-label">Tanggal Masuk Kerja</label>
                                    <div class="col-md-12">
                                        <input class="form-control" type="date" placeholder="2021-06-18" name="tmk"
                                            id="html5-date-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select name="ska" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Status Karyawan --</option>
                                        <option value="Direksi">[DR] Direksi</option>
                                        <option value="Komisaris">[KM] Komisaris</option>
                                        <option value="Operasional">[OP] Operasional</option>
                                        <option value="Outsourcing">[OS] Outsourcing</option>
                                        <option value="Karyawan Tetap">[TP] Karyawan Tetap</option>
                                        <option value="PKWT Jasamarga">[TX] PKWT Jasamarga</option>
                                        <option value="PKWT Eksternal">[TY] PKWT Eksternal</option>
                                        <option value="Tenaga Ahli">[TZ] Tenaga Ahli</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Jabatan</label>
                                    <select name="jabatan" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Jabatan --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="GOLJAB" class="form-label">Golongan Jabatan</label>
                                    <input class="form-control" type="text" id="GOLJAB" name="gj" placeholder="Blabla"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="Barjab" class="form-label">Baris Golongan</label>
                                    <input class="form-control" type="text" name="bg" id="Barjab" placeholder="-" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Anggota Serikat</label>
                                    <select name="as" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Serikat --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Uker" class="form-label">Unit Kerja</label>
                                    <input class="form-control" type="text" id="Uker" name="uk" placeholder="blabla"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="AUker" class="form-label">Anaknya Unit Kerja</label>
                                    <input class="form-control" type="text" id="AUker" name="auk" placeholder="blabla"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Struktur Organisasi</label>
                                    <select name="so" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Struktur --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="Jab" class="form-label">Jabatan</label>
                                    <input class="form-control" type="text" id="Jab" placeholder="Kok Jabatannya ada 2?"
                                        autofocus readonly />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="defaultSelect" class="form-label">Bank</label>
                                    <select name="bank" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Bank --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Rek" class="form-label">No Rekening</label>
                                    <input class="form-control" type="text" id="Rek" name="norek"
                                        placeholder="no rekening" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="AtNa" class="form-label">Atas Nama</label>
                                    <input class="form-control" type="text" id="AtNa" name="as"
                                        placeholder="Nama yang punya rekening" autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <input type="checkbox" id="iuranpen">
                                    <label for="iuranpen" name="ia" class="form-label">Iuran Pensiun</label>

                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select name="sky" id="defaultSelect" class="form-select">
                                        <option>-- Bukan status keluarga --</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non-Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="html5-date-input" class="form-label">Tanggal Berhenti</label>
                                    <div class="col-md-12">
                                        <input name="tb" class="form-control" type="date" placeholder="2021-06-18"
                                            id="html5-date-input" />
                                    </div>
                                </div>
                                </label>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>

                    <div class="card mb-4">
                        <h5 class="card-header">Data Jasamarga</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="NPP" class="form-label">NPP Instansi</label>
                                    <input class="form-control" type="text" id="NPP" name="nppin" placeholder="01600" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Gol" class="form-label">Gol Instansi</label>
                                    <input class="form-control" type="text" id="Gol" name="goli" placeholder="1C" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDP" class="form-label">PhDP</label>
                                    <input class="form-control" type="text" id="PhDP" name="phdp" placeholder="8.134.245"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="UpahJSMR" class="form-label">Upah JSMR</label>
                                    <input class="form-control" type="text" id="UpahJSMR" name="ujsm"
                                        placeholder="21.784.439" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDA" class="form-label">PhDA</label>
                                    <input class="form-control" type="text" id="PhDA" name="phda"
                                        placeholder="19.784.439" autofocus />
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('admin.datakaryawan') }}" class="btn btn-outline-secondary">
                                        Cancel</a>
                                </div>
                            </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
    </div>
    </form>
    </div>
    </div>
    <!-- / Content -->
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
@endsection
