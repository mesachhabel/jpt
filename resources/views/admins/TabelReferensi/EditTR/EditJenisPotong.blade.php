@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Jenis Potongan Lain
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Jenis Potongan Lain</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="{{ route('potong.update', $potong->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Kode Potongan</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Kode Unit" name="kode"
                                            value="{{ old('kode', $potong->kode) }}" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Keterangan Potongan
                                            Lain</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Kode Sub-Unit" name="uraian"
                                            value="{{ old('kode', $potong->uraian) }}" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <h6 class="modal-title mt-3" id="modalCenterTitle">Alamat Transfer</h6>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Nama Bank</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="bank"
                                            value="{{ old('kode', $potong->bank) }}" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">No. Rekening</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="norek"
                                            value="{{ old('kode', $potong->norek) }}" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Atas Nama</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="atasnama"
                                            value="{{ old('kode', $potong->atasnama) }}" />
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('potong.index') }}" class="btn btn-outline-secondary">Cancel</a>
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
