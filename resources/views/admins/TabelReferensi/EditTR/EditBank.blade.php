@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Bank Transfer
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Bank Transfer</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="{{ route('bank.update', $bank->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="kode" class="form-label">Kode Bank</label>
                                    <input class="form-control" type="text" id="kode" name="kode"
                                        value="{{ old('kode', $bank->kode) }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="bank" class="form-label">Nama Bank</label>
                                    <input class="form-control" type="text" name="bank" id="bank"
                                        value="{{ old('bank', $bank->bank) }}" />
                                </div>
                                <hr class="my-0" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('bank.index') }}" class="btn btn-outline-secondary">Cancel</a>
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
