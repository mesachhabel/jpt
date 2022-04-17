@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Kode Jabatan
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Kode Jabatan</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('kodejabatan.update', $kodejabatan->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="kode" class="form-label">Kode Jabatan</label>
                                    <input class="form-control" type="text" id="kode" name="kode"
                                        value="{{ old('kode', $kodejabatan->kode) }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="golongan" class="form-label">Golongan</label>
                                    <input class="form-control" type="text" name="golongan" id="golongan"
                                        value="{{ old('kode', $kodejabatan->golongan) }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="klp" class="form-label">Kelompok</label>
                                    <input class="form-control" type="text" name="klp" id="klp"
                                        value="{{ old('kode', $kodejabatan->klp) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="uraianjabatan" class="form-label">Nama Jabatan</label>
                                    <input class="form-control" type="text" id="uraianjabatan" name="uraianjabatan"
                                        value="{{ old('kode', $kodejabatan->uraianjabatan) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="sebutanjabatan" class="form-label">Sebutan Jabatan</label>
                                    <input class="form-control" type="text" name="sebutanjabatan" id="sebutanjabatan"
                                        value="{{ old('kode', $kodejabatan->sebutanjabatan) }}" />
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
