@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Lainnya / Tabel Remunerasi Tunjangan /</span> Edit Remunerasi Tunjangan
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Remunerasi Tunjangan</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('remunerasi.update', $remunerasi->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Golongan</label>
                                    <input class="form-control" type="text" name="kelas"
                                        value="{{ old('kelas', $remunerasi->kelas) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kode</label>
                                    <input class="form-control" type="text" name="kode"
                                        value="{{ old('kode', $remunerasi->kode) }}" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan"
                                        value="{{ old('jabatan', $remunerasi->jabatan) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Jabatan</label>
                                    <input class="form-control" type="text" name="tunj_jabatan"
                                        value="{{ old('tunj_jabatan', $remunerasi->tunj_jabatan) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan UMK</label>
                                    <input class="form-control" type="text" name="tunj_umk"
                                        value="{{ old('tunj_umk', $remunerasi->tunj_umk) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Transport</label>
                                    <input class="form-control" type="text" name="tunj_transport"
                                        value="{{ old('tunj_transport', $remunerasi->tunj_transport) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Proyek</label>
                                    <input class="form-control" type="text" name="tunj_proyek"
                                        value="{{ old('tunj_proyek', $remunerasi->tunj_proyek) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Komunikasi</label>
                                    <input class="form-control" type="text" name="tunj_komunikasi"
                                        value="{{ old('tunj_komunikasi', $remunerasi->tunj_komunikasi) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Pulsa</label>
                                    <input class="form-control" type="text" name="tunj_pulsa"
                                        value="{{ old('tunj_pulsa', $remunerasi->tunj_pulsa) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Utilitas</label>
                                    <input class="form-control" type="text" name="tunj_utilitas"
                                        value="{{ old('tunj_utilitas', $remunerasi->tunj_utilitas) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tunjangan Perumahan</label>
                                    <input class="form-control" type="text" name="tunj_perumahan"
                                        value="{{ old('tunj_perumahan', $remunerasi->tunj_perumahan) }}" autofocus />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('remunerasi.index') }}"
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
