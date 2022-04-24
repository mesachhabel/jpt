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
                                <div class="mb-3 col-md">
                                    <label for="kelas" class="form-label">Kelas Jabatan</label>
                                    <input class="form-control" type="text" id="kelas" name="kelas"
                                        value="{{ old('kelas', $kodejabatan->kelas) }}" />
                                </div>
                                <div class="mb-3 col-md">
                                    <label for="jabatan" class="form-label">Nama Jabatan</label>
                                    <input class="form-control" type="text" id="jabatan" name="jabatan"
                                        value="{{ old('jabatan', $kodejabatan->jabatan) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md">
                                    <label for="klp" class="form-label">Kelompok</label>
                                    <input class="form-control" type="text" name="klp" id="klp"
                                        value="{{ old('klp', $kodejabatan->klp) }}" />
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
