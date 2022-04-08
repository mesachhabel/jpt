@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Absensi Data Karyawan /</span> Tambah Data Absensi
        </h4>
        <!-- Bordered Table -->
        <form id="formAccountSettings" method="POST" action="{{ route('absensi.store') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="form-label">Pilih Tahun Dan Bulan</label>
                        <div class="col-md-4 mb-3">
                            <div class="col-md-12">
                                <input class="form-control" name="bulantahun" type="month" value="2022-01"
                                    id="html5-month-input" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button class="btn btn-primary" type="submit"><i class="bx bx-plus me-1"></i> Simpan</button>
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
                                    <td>
                                        <select name="nik" id="nik" class="form-select dynamic" data-dependent="nama">
                                            <option disabled selected>-- Pilih NIK --</option>
                                            @foreach ($data_karyawans as $karyawan)
                                                <option value="{{ $karyawan->nik }}">[{{ $karyawan->nik }}]
                                                    {{ $karyawan->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select style="border:none" name="nama" id="nama" class="form-control input-lg">
                                        </select>
                                    </td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="telat" name="telat" placeholder="Telat" />
                                    </td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="plgcpt" name="plgcpt" placeholder="Pulang Cepat" /></td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="alpha" name="alpha" placeholder="Alpha" />
                                    </td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="ijin" name="ijin" placeholder="Ijin" />
                                    </td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="sakit" name="sakit" placeholder="Sakit" />
                                    </td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="dnsluar" name="dnsluar" placeholder="Dinas Luar" /></td>
                                    <td><input value="0" class="form-control absen text-center" style="border:none"
                                            type="text" id="cuti" name="cuti" placeholder="Cuti" />
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                {{ csrf_field() }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--/ Bordered Table -->
    <hr class="my-5" />
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
                        url: "{{ route('dynamicdependent.fetch') }}",
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

            $('#nik').change(function() {
                $('#nama').val('');
            });
        });
    </script>
@endsection
