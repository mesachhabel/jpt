@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Status Tugas
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Status Tugas</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Kode Potongan</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Kode Unit" name="kode" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Instansi Asal</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Kode Sub-Unit" name="uraian" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <h6 class="modal-title mt-3" id="modalCenterTitle">Transfer Jamsostek</h6>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Nama Bank</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="bank" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">No. Rekening</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="norek" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Atas Nama</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="atasnama" />
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
            <!-- / Content -->
        </div>
        <hr class="my-4" />
    @endsection
