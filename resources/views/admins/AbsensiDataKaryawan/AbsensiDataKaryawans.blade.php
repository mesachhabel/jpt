@extends('layouts.main')
@section('container')
    @include('sweetalert::alert')
    <div id="data" class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data /</span> Absensi Data Karyawan
        </h4>
        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-body">
                <div class="float-right mb-3 row">
                    <label for="html5-month-input" style="text-transform: none; font-size: 12px;"
                        class="form-label">Pencarian Data
                    </label>
                    <div class="col-md-4 mb-3">
                        <div class="input-group">
                            <input class="form-control search" id="search" name="search" placeholder="Cari Disini"
                                type="month">
                        </div>
                    </div>
                    <hr class="my-0" />
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="text-center" style="vertical-align:middle;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Tahun & Bulan</th>
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
                        <tbody class="text-center tbody" style="vertical-align:middle;">
                            <?php $no = 1; ?>
                            @forelse ($absensis as $absen)
                            @empty
                                <div class="alert alert-danger">
                                    Data Absensi Belum Ada.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
    <!--/ Striped Rows -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            fetch_nik();

            function fetch_nik(query1 = '') {
                $.ajax({
                    url: "{{ route('absensi.action') }}",
                    method: 'GET',
                    data: {
                        query1: query1
                    },
                    dataType: 'json',
                    success: function(data1) {
                        $('.tbody').html(data1.table_data1);
                    }
                })
            }

            $(document).on('change', '.search', function() {
                var query1 = $(this).val();
                fetch_nik(query1);
            });
        });
    </script>
@endsection
