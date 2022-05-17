@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pelaporan Data / Slip Gaji /</span> Slip Gaji Direksi
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($dataslipdireksi as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong> {{ $data->nik }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i> <strong>{{ $data->nama }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i>
                                    <strong>{{ $data->remunerasi->jabatan }}</strong>
                                </td>
                                <td>
                                    <a href="{{ route('slipgaji.cetak', $data->nik) }}"
                                        class="btn btn-sm btn-primary">Cetak</a>
                                    <a href="{{ route('karyawan.edit', $data->nik) }}"
                                        class="btn btn-sm btn-secondary">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Direksi Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
