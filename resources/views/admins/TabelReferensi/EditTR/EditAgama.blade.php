@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Agama
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Agama</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="{{ route('agama.update', $agama->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="kode" class="form-label">Kode Agama</label>
                                    <input class="form-control" type="text" id="kode" name="kode"
                                        value="{{ old('kode', $agama->kode) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="namaagama" class="form-label">Keterangan Agama</label>
                                    <input class="form-control" type="text" name="namaagama" id="namaagama"
                                        value="{{ old('nama', $agama->namaagama) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kodekelompok" class="form-label">Kode Kelompok</label>
                                    <input class="form-control" type="text" id="kodekelompok" name="kodekelompok"
                                        value="{{ old('kodekelompok', $agama->kodekelompok) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kelompok" class="form-label">Kelompok Agama</label>
                                    <input class="form-control" type="text" name="kelompok" id="kelompok"
                                        value="{{ old('kelompok', $agama->kelompok) }}" />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('agama.index') }}" class="btn btn-outline-secondary">Cancel</a>
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
