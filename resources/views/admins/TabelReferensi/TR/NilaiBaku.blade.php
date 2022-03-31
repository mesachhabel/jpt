@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Nilai Baku
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
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Data Nilai Baku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">St_Peg</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Kode Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">St_Tugas</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Kode Sub-Unit" />
                                </div>
                            </div>
                            <hr class="my-3" />
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JKM</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JKK</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                            </div>
                            <hr class="my-3" />
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JHT</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JHT_Prs</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">JHT_Peg</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JPK</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JPK_Prs</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">JPK_Peg</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JPP</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">JPP_Prs</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">JPP_Peg</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Jamsostek</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Jams_Prs</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Jams_Peg</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <hr class="my-3" />
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">PajakJamsostek</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Menit Telat</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Hari Kerja</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">PurnaJab_Dir</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Purna Karya</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Dana Pensiun</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Sub-Unit" />
                                </div>
                            </div>
                            <hr class="my-3" />
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tarif 1</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Keterangan Unit" />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tarif 2</label>
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
                        <th>St_Peg</th>
                        <th>St_Tugas</th>
                        <th>JKM</th>
                        <th>JKK</th>
                        <th>JHT</th>
                        <th>JHT_Prs</th>
                        <th>JHT_Peg</th>
                        <th>JPK</th>
                        <th>JPK_Prs</th>
                        <th>JPK_Peg</th>
                        <th>JPP</th>
                        <th>JPP_Prs</th>
                        <th>JPP_Peg</th>
                        <th>Pajak Jamsostek</th>
                        <th>Jamsostek</th>
                        <th>Jams_Prs</th>
                        <th>Jams_Peg</th>
                        <th>Menit Telat</th>
                        <th>Hari Kerja</th>
                        <th>PurnaJab_Dir</th>
                        <th>Purna Karya</th>
                        <th>Dana Pensiun</th>
                        <th>Tarif 1</th>
                        <th>Tarif 2</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>000</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Kantor Pusat</strong></td>
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