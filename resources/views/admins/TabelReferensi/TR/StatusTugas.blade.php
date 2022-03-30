@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Status Tugas
    </h4>

    <div class="col-lg-4 col-md-6">
        <div class="mt-3 mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                + Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Data Status Tugas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Kode</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Kode Unit" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Instansi Asal</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Kode Sub-Unit" />
                                </div>
                            </div>
                            <hr class="my-3" />
                            <h6 class="modal-title mt-3" id="modalCenterTitle">Transfer Jamsostek</h6>
                            <div class="row mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Nama Bank</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">No. Rekening</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Atas Nama</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th rowspan="2">Kode</th>
                        <th rowspan="2">Instansi Asal</th>
                        <th colspan="3">Transfer Jamsostek</th>
                        <th rowspan="2">Actions</th>
                    </tr>
                    <tr>
                        <th>Bank</th>
                        <th>No. Rekening</th>
                        <th>Atas Nama</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>AAA</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>K0</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>KM</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>AAA</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>K0</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>KM</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>AAA</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>K0</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>KM</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>AAA</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>K0</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Komisaris Utama</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>KM</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>
<hr class="my-5" />
@endsection