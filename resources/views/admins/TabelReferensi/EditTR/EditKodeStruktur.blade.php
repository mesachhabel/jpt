@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Kode Struktur
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Kode Struktur</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('kodestruktur.update', $kodestruktur->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="kode" class="form-label">Kode Struktur</label>
                                    <input class="form-control" type="text" id="kode" name="kode"
                                        value="{{ old('kode', $kodestruktur->kode) }}" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="uraian" class="form-label">Keterangan Struktur</label>
                                    <input class="form-control" type="text" name="uraian" id="uraian"
                                        value="{{ old('kode', $kodestruktur->uraian) }}" />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('kodestruktur.index') }}"
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
