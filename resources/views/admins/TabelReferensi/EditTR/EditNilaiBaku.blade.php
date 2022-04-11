@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Edit Nilai Baku
        </h4>


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Nilai Baku</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">St_Peg</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Kode Unit" name="st_peg" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">St_Tugas</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Kode Sub-Unit" name="st_tugas" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JKM</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jkm" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JKK</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jkk" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JHT</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jht" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JHT_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jht_prs" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JHT_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jht_peg" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPK</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpk" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPK_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpk_prs" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JPK_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jpk_peg" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPP</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpp" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPP_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpp_prs" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JPP_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jpp_peg" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Jamsostek</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jamsostek" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Jams_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jams_prs" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Jams_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jams_peg" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Pajak Jamsostek</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="pajak_jamsostek" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Menit Telat</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="menit_telat" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Hari Kerja</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="hari_kerja" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">PurnaJab_Dir</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="purnajab_dir" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Purna Karya</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="purna_karya" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Dana Pensiun</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="dana_pensiun" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Tarif 1</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="tarif_1" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Tarif 2</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="tarif_2" />
                                    </div>
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
