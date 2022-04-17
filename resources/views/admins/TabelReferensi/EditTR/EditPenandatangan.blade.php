@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Penandatangan
        </h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Penandatangan</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('penandatangan.update', $penandatangan->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input class="form-control" type="text" id="nik" name="nik"
                                        value="{{ old('nik', $penandatangan->nik) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        value="{{ old('nama', $penandatangan->nama) }}" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="Jabatan" class="form-label">Jabatan</label>
                                    <input class="form-control" type="text" name="Jabatan" id="Jabatan"
                                        value="{{ old('jabatan', $penandatangan->jabatan) }}" />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('penandatangan.index') }}"
                                        class="btn btn-outline-secondary">Cancel</a>
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
