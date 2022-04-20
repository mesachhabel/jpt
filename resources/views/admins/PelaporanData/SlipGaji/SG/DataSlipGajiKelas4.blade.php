@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pelaporan Data / Slip Gaji /</span> Slip Gaji Golongan Kelas 4
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($dataslipkelas4 as $data)
                            <tr>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong> {{ $data->nik }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i> <strong>{{ $data->nama }}</strong>
                                <td><i class="fa-lg text-danger me-3"></i> <strong>{{ $data->jabatan }}</strong>
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Cetak</a>
                                    <a href="" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Golongan Kelas 4 Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
