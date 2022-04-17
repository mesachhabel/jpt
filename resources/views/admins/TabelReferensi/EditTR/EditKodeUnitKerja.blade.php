@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Kode Unit Kerja
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Kode Unit Kerja</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('kodeunitkerja.update', $kodeunitkerja->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="kuk" class="form-label">Kode Unit</label>
                                    <input class="form-control" type="text" id="kuk" name="kuk"
                                        value="{{ old('kuk', $kodeunitkerja->kuk) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="sub" class="form-label">Kode Sub-Unit</label>
                                    <input class="form-control" type="text" name="sub" id="sub"
                                        value="{{ old('sub', $kodeunitkerja->sub) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="uuk" class="form-label">Keterangan Unit</label>
                                    <input class="form-control" type="text" id="uuk" name="uuk"
                                        value=" {{ old('uuk', $kodeunitkerja->uuk) }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="ksu" class="form-label">Keterangan Sub-Unit</label>
                                    <input class="form-control" type="text" name="ksu" id="ksu"
                                        value=" {{ old('ksu', $kodeunitkerja->ksu) }} " />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('kodeunitkerja.index') }}"
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
