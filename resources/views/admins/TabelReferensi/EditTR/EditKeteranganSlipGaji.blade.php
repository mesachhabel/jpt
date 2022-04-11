@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Keterangan Slip Gaji
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Keterangan Slip Gaji</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="NPWP" class="form-label">Kode Slip Gaji</label>
                                    <input class="form-control" type="text" id="NPWP" name="NPWP" value="HRD" autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="NoKTP" class="form-label">Keterangan Slip Gaji</label>
                                    <input class="form-control" type="text" name="NoKTP" id="NoKTP" value="Rudistiar" />
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
