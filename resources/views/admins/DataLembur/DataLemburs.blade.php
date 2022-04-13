@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data /</span> Lembur Karyawan
        </h4>
        <a href="{{ route('lembur.create') }}" class="btn btn-primary mb-3">+ Tambah Data<i class="fas fa-print"></i></a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="float-right mb-3 row">
                <label for="html5-month-input" style="text-transform: none; font-size: 12px;"
                    class="form-label">Pencarian Data</label>
                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <input class="form-control search" id="search" name="search" type="text" placeholder="Cari ...">
                    </div>
                </div>
                <hr class="my-0" />
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Bulan & Tahun</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Jabatan</th>
                            <th rowspan="2">Npp</th>
                            <th colspan="3">Detail Jam Lembur</th>
                            <th colspan="3">Detail Insentif</th>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jumlah<br>Jam</th>
                            <th>Jenis<br>Hari</th>
                            <th>Jumlah</th>
                            <th>Rp.Insentif</th>
                            <th>Total<br>Insentif</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 tbody">
                        <?php $no = 1; ?>
                        @forelse ($lemburs as $lembur)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lembur->bulan }}</td>
                                <td>{{ $lembur->nama }}</td>
                                <td>{{ $lembur->jabatan }}</td>
                                <td>{{ $lembur->npp }}</td>
                                <td>{{ $lembur->tanggal_lembur }}</td>
                                <td>{{ $lembur->jumlah_jam_lembur }}</td>
                                <td>{{ $lembur->jenis_hari_lembur }}</td>
                                <td>{{ $lembur->jumlah_insentif }}</td>
                                <td>{{ $lembur->nilai_insentif }}</td>
                                <td>{{ $lembur->total_insentif }}</td>
                                <td>tes</td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Lembur Karyawan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            fetch_nama();

            function fetch_nama(query2 = '') {
                $.ajax({
                    url: "{{ route('lemburs.action') }}",
                    method: 'GET',
                    data: {
                        query2: query2
                    },
                    dataType: 'json',
                    success: function(data2) {
                        $('.tbody').html(data2.table_data2);
                    }
                })
            }

            $(document).on('keyup', '.search', function() {
                var query2 = $(this).val();
                fetch_nik(query2);
            });
        });
    </script>
@endsection
