@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Transaksi Data / Penerimaan dan Potongan Lain /</span> Tambah Data
        </h4>
        <form id="formAccountSettings" method="POST" action="{{ route('terimapotong.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Karyawan</h5>
                        <!-- Account -->
                        <hr class="my-0" />
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="html5-month-input" class="form-label">Bulan - Tahun</label>
                                    <div class="col-md-12">
                                        <input class="form-control" name="bulan" type="month" value="2021-01"
                                            id="html5-month-input" required />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">NIK</label>
                                    <select name="nik" id="nik" class="form-select dynamic" data-dependent="nama">
                                        <option disabled selected readonly="readonly">Pilih NIK</option>
                                        @foreach ($data_karyawans as $karyawan)
                                            <option value="{{ $karyawan->nik }}">[{{ $karyawan->nik }}]
                                                {{ $karyawan->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="defaultSelect" class="form-label">Nama</label>
                                    <select name="nama" id="nama" class="form-control input-lg" readonly="readonly">
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select id="defaultSelect" name="jabatan" class="form-select" required>
                                        <option disabled selected readonly="readonly">--- Pilih Jabatan --- </option>
                                        @foreach ($data_karyawans as $lembur)
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
                        <h5 class="card-header">Data Penerimaan</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mb-3 col-md-12">
                                <label for="defaultSelect" class="form-label">Kode Penerimaan</label>
                                <select name="kode_penerimaan" id="defaultSelect" class="form-select" required>
                                    <option disabled selected readonly="readonly">-- Pilih Penerimaan --</option>
                                    <option value="1">.....</option>
                                    <option value="2">.....</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="uraian_penerimaan" class="form-label">Uraian Penerimaan</label>
                                <input class="form-control" type="text" name="uraian_penerimaan" id="uraian_penerimaan"
                                    required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_penerimaan" class="form-label">Jumlah Penerimaan</label>
                                <input class="form-control" type="text" name="jumlah_penerimaan" id="jumlah_penerimaan"
                                    required />
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
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            @forelse ($potongs as $potong)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $potong->kode_penerimaan }}</td>
                                                    <td>{{ $potong->uraian_penerimaan }}</td>
                                                    <td>{{ $potong->jumlah_penerimaan }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Rincian Penerimaan Lain - Lain Belum Ada.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center mt-3">{{ $potongs->links('pagination::bootstrap-4') }}
                    </ul>
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
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1; ?>
                                            @forelse ($potongs as $potongan)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $potongan->kode_potongan }}</td>
                                                    <td>{{ $potongan->uraian_potongan }}</td>
                                                    <td>{{ $potongan->jumlah_potongan }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Rincian Potongan Lain - Lain Belum Ada.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination justify-content-center mt-3">
                            {{ $potongs->links('pagination::bootstrap-4') }}</ul>
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
                                <select name="kode_potongan" id="defaultSelect" class="form-select" required>
                                    <option disabled selected>-- Pilih Potongan --</option>
                                    <option value="1">.....</option>
                                    <option value="2">.....</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="uraian_potongan" class="form-label">Uraian Potongan</label>
                                <input class="form-control" type="text" name="uraian_potongan" id="uraian_potongan"
                                    required />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="jumlah_potongan" class="form-label">Jumlah Potongan</label>
                                <input class="form-control" type="text" name="jumlah_potongan" id="jumlah_potongan"
                                    required />
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="mt-0">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                <button type="button" class="btn btn-danger me-2"><a
                                        href="{{ route('terimapotong.index') }}" style="color: #fff">Back</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--/ Striped Rows -->
    <hr class="my-5" />

    {{-- jquery Ajax Dyanmic Table --}}
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
                        url: "{{ route('potong.fetch') }}",
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
