@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Kode Unit Kerja
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
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Data Unit Kerja</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Kode Unit</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Kode Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Kode Sub-Unit</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Kode Sub-Unit" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Keterangan Unit</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Keterangan Sub-Unit</label>
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
                        <th>Kode Unit</th>
                        <th>Kode Sub-Unit</th>
                        <th>Keterangan Unit</th>
                        <th>Keterangan Sub-Unit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Unit Kerja</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Unit Kerja</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Unit Kerja</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Unit Kerja</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Struktur</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Struktur</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Struktur</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Struktur</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Jabatan</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Jabatan</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Jabatan</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Jabatan</strong></td>
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