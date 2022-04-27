@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Lainnya /</span> Data Remunerasi Tunjangan
        </h4>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>Golongan</th>
                            <th>Kode</th>
                            <th>Jabatan</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan UMK</th>
                            <th>Tunjangan Transport</th>
                            <th>Tunjangan Proyek</th>
                            <th>Tunjangan Komunikasi</th>
                            <th>Tunjangan Pulsa</th>
                            <th>Tunjangan Utilitas</th>
                            <th>Tunjangan Perumahan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        
                        @forelse ($remunerasis as $rem)
                            <tr>
                                <td>
                                    <!-- Golongan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->golongan }}</strong>
                                </td>
                                <td>
                                    <!-- Kode -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->kode }}</strong>
                                </td>
                                <td>
                                    <!-- Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->jabatan }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_jabatan }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan UMK -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_umk }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Transport -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_transport }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Proyek -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_proyek }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Komunikasi -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_komunikasi }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Pulsa -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_pulsa }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Utilitas -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_utilitas }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Perumahan-->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_perumahan}}</strong>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Remunerasi Tunjangan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3">{{ $remunerasis->links('pagination::bootstrap-4') }}
    </ul>
@endsection
