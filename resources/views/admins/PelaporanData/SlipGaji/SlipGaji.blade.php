@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pelaporan Data /</span> Slip Gaji
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered">
                    <thead style="vertical-align:middle;">
                        <tr>
                            <th>Nama Slip Gaji</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align:middle;">
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Direksi</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipdireksi') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $count_bod }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Komisari</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkomisaris') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $count_boc }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 1</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas1') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $dataslipkelas1 }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 2</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas2') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $dataslipkelas2 }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 3</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas3') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $dataslipkelas3 }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 4</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas4') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $dataslipkelas4 }} Orang</strong>
                            </td>
                        </tr>
                        <tr>
                            <td><i class=" fa-lg text-danger me-3"></i> <strong>Slip Gaji Golongan Kelas 5</strong>
                            </td>
                            <td>
                                <a href="{{ route('slipgaji.dataslipkelas5') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                &nbsp <strong>{{ $dataslipkelas5 }} Orang</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
