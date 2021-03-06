@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pelaporan Data / Slip Gaji /</span> Slip Gaji Komisaris
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        @forelse ($dataslipkomisaris as $data)
                            <tr>
                                <td><i class="fa-lg text-danger me-3"></i> <strong> {{ $data->nik }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i> <strong>{{ $data->nama }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i> <strong>{{ $data->jabatan }}</strong>
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
                                Data Komisaris Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
