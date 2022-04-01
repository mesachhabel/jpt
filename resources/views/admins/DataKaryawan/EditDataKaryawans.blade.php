@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Data Karyawan /</span> Tambah Data Karyawan
        </h4>

        <div class="row">
            <form id="formAccountSettings" method="POST" action="{{ route('data_karyawans.update', $post->id) }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="../../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                                    width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="inputImage" class="btn btn-primary me-2 mb-0" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" name="image" id="inputImage"
                                            class="form-control @error('image') is-invalid @enderror">
                                    </label>
                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="NIK" class="form-label">NIK</label>
                                    <input class="form-control" type="text" id="NIK" name="nik" placeholder="NIK"
                                        value="{{ old('nik', $post->nik) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="Nama" class="form-label">Nama Lengkap</label>
                                    <input value="{{ old('nama', $post->nama) }}" class="form-control" type="text"
                                        name="nama" id="Nama" placeholder="Nama Lengkap" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="NPP" class="form-label">NPP
                                        Instansi</label>
                                    <input {{ old('title', $post->nppi) }} class="form-control" type="text" id="NPP"
                                        name="nppi" placeholder="NPP" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                                    <select id="defaultSelect" {{ old('title', $post->jk) }} name="jk"
                                        class="form-select">
                                        <option disabled selected>-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki - Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Lain - Lain">Lain Lain ..</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Agama</label>
                                    <select {{ old('title', $post->agama) }} id="defaultSelect" name="agama"
                                        class="form-select">
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
                                    <select {{ old('title', $post->skk) }} name="skk" id="defaultSelect"
                                        class="form-select">
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
                                    <select {{ old('title', $post->ia) }} name="ia" id="defaultSelect"
                                        class="form-select">
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
                                    <select {{ old('title', $post->gi) }} name="gi" id="defaultSelect"
                                        class="form-select">
                                        <option disabled selected>-- Pilih Golongan Instansi --</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NPWP" class="form-label">NPWP</label>
                                    <input {{ old('title', $post->npwp) }} class="form-control" type="text" id="NPWP"
                                        name="npwp" placeholder="NPWP" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoKTP" class="form-label">Nomor KTP</label>
                                    <input {{ old('title', $post->nktp) }} class="form-control" type="text" name="nktp"
                                        id="NoKTP" placeholder="Nomor KTP" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJST" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                    <input {{ old('title', $post->nbpkt) }} class="form-control" type="text"
                                        id="NoBPJST" name="nbpkt" placeholder="BPJS Ketenagakerjaan" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJSK" class="form-label">Nomor BPJS Kesehatan</label>
                                    <input {{ old('title', $post->nbpks) }} class="form-control" type="text"
                                        name="nbpks" id="NoBPJSK" placeholder="BPJS Kesehatan" />
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="html5-date-input" class="form-label">Tanggal Masuk Kerja</label>
                                    <div class="col-md-12">
                                        <input {{ old('title', $post->tmk) }} class="form-control" type="date"
                                            placeholder="Tanggal Masuk Kerja" name="tmk" id="html5-date-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select {{ old('title', $post->ska) }} name="ska" id="defaultSelect"
                                        class="form-select">
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
                                    <select {{ old('title', $post->jabatan) }} name="jabatan" id="defaultSelect"
                                        class="form-select">
                                        <option disabled selected>-- Pilih Jabatan --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="GOLJAB" class="form-label">Golongan Jabatan</label>
                                    <input {{ old('title', $post->gj) }} class="form-control" type="text" id="GOLJAB"
                                        name="gj" placeholder="Golongan Jabatan" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="Barjab" class="form-label">Baris Golongan</label>
                                    <input {{ old('title', $post->bg) }} class="form-control" type="text" name="bg"
                                        id="Barjab" placeholder="Baris Golongan" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Anggota Serikat</label>
                                    <select {{ old('title', $post->as) }} name="as" id="defaultSelect"
                                        class="form-select">
                                        <option disabled selected>-- Pilih Serikat --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Uker" class="form-label">Unit Kerja</label>
                                    <input {{ old('title', $post->uk) }} class="form-control" type="text" id="Uker"
                                        name="uk" placeholder="Unit Kerja" autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="AUker" class="form-label">Anaknya Unit Kerja</label>
                                    <input {{ old('title', $post->auk) }} class="form-control" type="text" id="AUker"
                                        name="auk" placeholder="anaknya Unit Kerja" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Struktur Organisasi</label>
                                    <select {{ old('title', $post->so) }} name="so" id="defaultSelect"
                                        class="form-select">
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
                                    <select {{ old('title', $post->bank) }} name="bank" id="defaultSelect"
                                        class="form-select">
                                        <option disabled selected>-- Pilih Bank --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Rek" class="form-label">No Rekening</label>
                                    <input {{ old('title', $post->norek) }} class="form-control" type="text" id="Rek"
                                        name="norek" placeholder="no rekening" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="AtNa" class="form-label">Atas Nama</label>
                                    <input {{ old('title', $post->an) }} class="form-control" type="text" id="AtNa"
                                        name="an" placeholder="Nama Pemegang Rekening" autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <input {{ old('title', $post->ip) }} type="checkbox" name="ip" id="iuranpen">
                                    <label for="iuranpen" class="form-label">Iuran Pensiun</label>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select {{ old('title', $post->sky) }} name="sky" id="defaultSelect"
                                        class="form-select" onChange="statuskar(this.value)">
                                        <option>-- Bukan status keluarga --</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non-Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="tb" class="form-label">Tanggal Berhenti</label>
                                    <div class="col-md-12">
                                        <input {{ old('title', $post->tb) }} name="tb" class="form-control"
                                            type="date" id="tb" data-date-inline-picker="true" />
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
                                    <input {{ old('title', $post->nppin) }} class="form-control" type="text" id="NPP"
                                        name="nppin" placeholder="NPP" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Gol" class="form-label">Gol Instansi</label>
                                    <input {{ old('title', $post->goli) }} class="form-control" type="text" id="Gol"
                                        name="goli" placeholder="Golongan Instansi" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDP" class="form-label">PhDP</label>
                                    <input {{ old('title', $post->phdp) }} class="form-control" type="text" id="PhDP"
                                        name="phdp" placeholder="PhDP" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="UpahJSMR" class="form-label">Upah JSMR</label>
                                    <input {{ old('title', $post->ujsm) }} class="form-control" type="text"
                                        id="UpahJSMR" name="ujsm" placeholder="Upah JSMR" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDA" class="form-label">PhDA</label>
                                    <input {{ old('title', $post->phda) }} class="form-control" type="text" id="PhDA"
                                        name="phda" placeholder="PhDA" autofocus />
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
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
    <script src="../../assets/js/datakaryawan.js"></script>
@endsection
