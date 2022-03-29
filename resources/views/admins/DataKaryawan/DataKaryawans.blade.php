@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data /</span> Data Karyawan
        </h4>
        <a href="{{ route('admin.create-datakaryawan') }}" class="btn btn-primary mb-3">+ Tambah Data<i
                class="fas fa-print"></i></a>
        <!-- Striped Rows -->
        <div class="card">
            <!-- <h5 class="card-header">Striped rows</h5> -->
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Unit Kerja</th>
                            <th>Status</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data_karyawans as $datakaryawan)
                            <tr>
                                <td>
                                    {{ $datakaryawan->id }}
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $datakaryawan->nik }}</strong>
                                </td>
                                <td>
                                    {{ $datakaryawan->nama }}
                                </td>
                                <td>
                                    @if ($datakaryawan->jabatan == '1')
                                        <p>Kepala Bagian</p>
                                    @elseif ($datakaryawan->jabatan == '2')
                                        <p>Kepala Sub Bagian</p>
                                    @elseif ($datakaryawan->jabatan == '3')
                                        <p>Kepala Divisi</p>
                                    @endif
                                </td>
                                <td>
                                    <strong> {{ $datakaryawan->ska }}</strong>
                                </td>
                                <td>
                                    @if ($datakaryawan->skk == '1')
                                        <span class="badge bg-label-primary me-1">Belum Kawin</span>
                                    @elseif ($datakaryawan->skk == '2')
                                        <span class="badge bg-label-warning me-2">Kawin</span>
                                    @elseif ($datakaryawan->skk == '3')
                                        <span class="badge bg-label-danger me-3">Janda</span>
                                    @elseif ($datakaryawan->skk == '4')
                                        <span class="badge bg-label-purple me-4">Duda</span>
                                    @endif
                                </td>
                                <td>
                                <td><img width="150px" src="{{ url('images/' . $datakaryawan->image) }}"></td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-center mt-3"> {{ $data_karyawans->links() }}</div>
            </div>
        </div>
        
</div>
        
    @endsection
