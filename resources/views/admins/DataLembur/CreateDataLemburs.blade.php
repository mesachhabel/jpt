@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Lembur Karyawan /</span> Tambah Data
        </h4>
        <form id="formAccountSettings" method="POST" action="{{ route('lembur.store') }}">
            @csrf
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
                                        <input name="bulan" class="form-control" type="month" value="2022-01"
                                            id="html5-month-input" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <select name="nama" id="nama" class="form-select dynamic" data-dependent="nppi"
                                        required>
                                        <option disabled selected>Pilih Nama</option>
                                        @foreach ($karyawans as $lembur)
                                            <option value="{{ $lembur->nama }}">[{{ $lembur->nik }}]
                                                {{ $lembur->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">NPP</label>
                                    <select name="npp" id="nppi" class="form-control input-lg" readonly="readonly">
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jabatan</label>
                                    <select id="defaultSelect" name="jabatan" class="form-select" required>
                                        <option disabled selected>--- Pilih Jabatan --- </option>
                                        @foreach ($karyawans as $lembur)
                                            <option value="{{ $lembur->jabatan }}">
                                                {{ $lembur->jabatan }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                    onchange="preview();" required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_jam_lembur" class="form-label">Jumlah Jam</label>
                                <input class="form-control" type="text" name="jumlah_jam_lembur" id="injam"
                                    placeholder="Masukan Jumlah Jam" onchange="preview();" required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="defaultSelect" class="form-label">Jenis Hari</label>
                                <select name="jenis_hari_lembur" id="injenishari" class="form-select"
                                    onchange="preview();" required>
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
                                                        type="text" id="tanggal" name="tanggal" disabled />
                                                </td>
                                                <td><input class="form-control absen text-center" style="border:none"
                                                        type="text" id="jam" name="jam" disabled />
                                                </td>
                                                <td><input class="form-control absen text-center" style="border:none"
                                                        type="text" id="jenishari" name="jenishari" value="Hari Kerja"
                                                        disabled />
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
                                <input class="form-control" type="text" name="jumlah_insentif" id="jumlah"
                                    placeholder="Jumlah Insentif" onchange="lembur();" required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="rpinsentif" class="form-label">Rp. Insentif</label>
                                <input class="form-control" type="text" name="nilai_insentif" id="insentif"
                                    placeholder="Nilai PerInsentif" onchange="lembur();" required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="totalinsentif" class="form-label">Total Insentif</label>
                                <input class="form-control" type="text" name="total_insentif" id="total"
                                    placeholder="Total Insentif" onchange="lembur();" readonly required />
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
                                                <th>Jumlah</th>
                                                <th>Rp. Insentif</th>
                                                <th>Total Insentif</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td><input class="form-control absen text-center" style="border:none"
                                                        type="text" id="jumlahinsentif" name="jumlahinsentif"
                                                        placeholder="-" disabled /></td>
                                                <td><input class="form-control absen text-center" style="border:none"
                                                        type="text" id="rpinsentif" name="rpinsentif" placeholder="-"
                                                        disabled />
                                                </td>
                                                <td><input class="form-control absen text-center" style="border:none"
                                                        type="text" id="totalinsentif" name="totalinsentif" placeholder="-"
                                                        disabled />
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
        </form>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
    <script src="../../../assets/js/lembur.js"></script>
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
                        url: "{{ route('lembur.fetch') }}",
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

            $('#nama').change(function() {
                $('#nppi').val('');
            });
        });
    </script>
@endsection
