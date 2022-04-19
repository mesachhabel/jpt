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
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 1</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas1') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 2</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas2') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 3</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas3') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 4</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas4') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 5</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas5') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
