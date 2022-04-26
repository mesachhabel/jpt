@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Data Karyawan /</span> Tambah Data Karyawan
        </h4>

        <div class="row">
            <form id="formAccountSettings" method="POST" action="{{ route('karyawan.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="../../assets/img/avatars/ImageUser.svg" alt="user-avatar" class="d-block rounded"
                                    height="150" width="150" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="inputImage" class="btn btn-primary me-10 mb-0" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" name="image" id="inputImage"
                                            class="form-control @error('image') is-invalid @enderror" required>
                                    </label>

                                    <p class="text-muted mt-1">Allowed JPG, JPEG, GIF or PNG. Max size of 2MB</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="NIK" class="form-label">NIK</label>
                                    <input class="form-control" type="text" id="NIK" name="nik" placeholder="NIK"
                                        autofocus required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="Nama" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" id="Nama"
                                        placeholder="Nama Lengkap" required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="NPP" class="form-label">NPP Instansi</label>
                                    <input class="form-control" type="text" id="NPP" name="nppi" placeholder="NPP"
                                        required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Jenis Kelamin</label>
                                    <select id="defaultSelect" name="jk" class="form-select" required>
                                        <option disabled selected>-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki - Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Lain - Lain">Lain Lain ..</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Agama</label>
                                    <select id="defaultSelect" name="agama" class="form-select" required>
                                        <option disabled selected>-- Pilih Agama --</option>
                                        @foreach ($agamas as $agama)
                                            <option value="{{ $agama->namaagama }}">
                                                {{ $agama->namaagama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Status Keluarga</label>
                                    <select name="skk" id="defaultSelect" class="form-select" required>
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
                                    <select name="ia" id="defaultSelect" class="form-select" required>
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
                                    <select name="gi" id="defaultSelect" class="form-select" required>
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
                                    <input class="form-control" type="text" id="NPWP" name="npwp" placeholder="NPWP"
                                        autofocus required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoKTP" class="form-label">Nomor KTP</label>
                                    <input class="form-control" type="text" name="nktp" id="NoKTP" placeholder="Nomor KTP"
                                        required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJST" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                    <input class="form-control" type="text" id="NoBPJST" name="nbpkt"
                                        placeholder="BPJS Ketenagakerjaan" autofocus required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="NoBPJSK" class="form-label">Nomor BPJS Kesehatan</label>
                                    <input class="form-control" type="text" name="nbpks" id="NoBPJSK"
                                        placeholder="BPJS Kesehatan" />
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="html5-date-input" class="form-label">Tanggal Masuk Kerja</label>
                                    <div class="col-md-12">
                                        <input class="form-control" type="date" placeholder="Tanggal Masuk Kerja"
                                            name="tmk" id="html5-date-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select name="ska" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Pilih Status Karyawan --</option>
                                        <option value="Direksi">Direksi</option>
                                        <option value="Komisaris">Komisaris</option>
                                        <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-select dynamic" data-dependent="klp">
                                        <option disabled selected>-- Pilih Jabatan -- </option>
                                        @foreach ($jabatan as $jb)
                                            <option value="{{ $jb->jabatan }}">[{{ $jb->kelas }}]
                                                {{ $jb->jabatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="klp" class="form-label">Kelompok Jabatan</label>
                                    <select name="klp" id="klp" class="form-control input-lg" readonly="readonly">
                                    </select>
                                </div>
                                <div class=" mb-3 col-md-6">
                                    <label for="Barjab" class="form-label">Skala Gaji Pokok</label>
                                    <input name="sgp" id="sgp" class="form-control"
                                        placeholder="Silahkan Masukan Skala Gaji" required />
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
                                    <input class="form-control" type="text" id="Uker" name="uk" placeholder="Unit Kerja"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="AUker" class="form-label">Anaknya Unit Kerja</label>
                                    <input class="form-control" type="text" id="AUker" name="auk"
                                        placeholder="anaknya Unit Kerja" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Struktur Organisasi</label>
                                    <select name="so" id="defaultSelect" class="form-select">
                                        <option disabled selected>-- Struktur --</option>
                                        <option value="1">.....</option>
                                        <option value="2">.....</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="defaultSelect" class="form-label">Bank</label>
                                    <select name="bank" id="defaultSelect" class="form-select" required>
                                        <option disabled selected>-- Pilih Bank --</option>
                                        @foreach ($banks as $bank)
                                            <option value="{{ $bank->bank }}">[{{ $bank->kode }}]
                                                {{ $bank->bank }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Rek" class="form-label">No Rekening</label>
                                    <input class="form-control" type="text" id="Rek" name="norek"
                                        placeholder="no rekening" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="AtNa" class="form-label">Atas Nama</label>
                                    <input class="form-control" type="text" id="AtNa" name="an"
                                        placeholder="Nama Pemegang Rekening" autofocus />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Status Karyawan</label>
                                    <select name="sky" id="defaultSelect" class="form-select"
                                        onChange="statuskar(this.value)">
                                        <option disabled selected>-- Bukan status keluarga --</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non-Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="tb" class="form-label">Tanggal Berhenti</label>
                                    <div class="col-md-12">
                                        <input name="tb" class="form-control" type="date" id="tb"
                                            data-date-inline-picker="true" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 mt-4">
                                    <input type="hidden" id="ip" name="ip" value="0">
                                    <input value="1" type="checkbox" name="iuranpen" id="iuranpen"
                                        onchange="document.getElementById('ip').value = this.checked ? 1 : 0">
                                    <label for="ip" class="form-label">Iuran Pensiun</label>
                                </div>
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
                                    <input class="form-control" type="text" id="NPP" name="nppin" placeholder="NPP" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="Gol" class="form-label">Gol Instansi</label>
                                    <input class="form-control" type="text" id="Gol" name="goli"
                                        placeholder="Golongan Instansi" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDP" class="form-label">PhDP</label>
                                    <input class="form-control" type="text" id="PhDP" name="phdp" placeholder="PhDP"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="UpahJSMR" class="form-label">Upah JSMR</label>
                                    <input class="form-control" type="text" id="UpahJSMR" name="ujsm"
                                        placeholder="Upah JSMR" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PhDA" class="form-label">PhDA</label>
                                    <input class="form-control" type="text" id="PhDA" name="phda" placeholder="PhDA"
                                        autofocus />
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
    <script src="../../../assets/js/datakaryawan.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.dynamic').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('kry.fetch') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#jabatan').change(function() {
                $('#klp').val('');
            });
        });
    </script>
@endsection
