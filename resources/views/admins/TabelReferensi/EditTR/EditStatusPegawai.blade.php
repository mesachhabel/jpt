@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Status Pegawai
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Status Pegawai</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('statuspegawai.update', $statuspegawai->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="kodestatuspegawai" class="form-label">Kode Status Pegawai</label>
                                    <input class="form-control" type="text" id="kodestatuspegawai"
                                        name="kodestatuspegawai"
                                        value="{{ old('kode', $statuspegawai->kodestatuspegawai) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="keteranganpegawai" class="form-label">Keterangan Status Pegawai</label>
                                    <input class="form-control" type="text" name="keteranganpegawai"
                                        id="keteranganpegawai"
                                        value="{{ old('keteranganpegawai', $statuspegawai->keteranganpegawai) }}" />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('statuspegawai.index') }}"
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
