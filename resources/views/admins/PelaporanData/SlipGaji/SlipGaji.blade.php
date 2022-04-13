@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pelaporan Data /</span> Slip Gaji
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Slip Gaji</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Slip Gaji Komisaris</strong></td>
                            <td>
                                <a href="{{ route('slipgaji.slipkomisaris') }}" type="button" 
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Slip Gaji Direksi</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.slipdireksi') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Slip Gaji Karyawan Tetap</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.slipkaryawantetap') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Slip Gaji Karyawan Tidak Tetap</strong>
                            </td>
                            <td>
                                <a href="{{ route('kodejabatan.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
