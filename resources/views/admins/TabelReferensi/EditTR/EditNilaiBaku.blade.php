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
                        <form id="formAccountSettings" method="POST" action="{{ route('nilai.update', $nilai->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">St_Peg</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Kode Unit" name="st_peg"
                                            value="{{ old('st_peg', $nilai->st_peg) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">St_Tugas</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Kode Sub-Unit" name="st_tugas"
                                            value="{{ old('st_tugas', $nilai->st_tugas) }}" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JKM</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jkm"
                                            value="{{ old('jkm', $nilai->jkm) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JKK</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jkk"
                                            value="{{ old('jkk', $nilai->jkk) }}" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JHT</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jht"
                                            value="{{ old('jht', $nilai->jht) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JHT_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jht_prs"
                                            value="{{ old('jht_prs', $nilai->jht_prs) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JHT_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jht_peg"
                                            value="{{ old('jht_peg', $nilai->jht_peg) }}" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPK</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpk"
                                            value="{{ old('jpk', $nilai->jpk) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPK_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpk_prs"
                                            value="{{ old('jpk_prs', $nilai->jpk_prs) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JPK_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jpk_peg"
                                            value="{{ old('jpk_peg', $nilai->jpk_peg) }}" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPP</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpp"
                                            value="{{ old('jpp', $nilai->jpp) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">JPP_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jpp_prs"
                                            value="{{ old('jpp_prs', $nilai->jpp_prs) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">JPP_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jpp_peg"
                                            value="{{ old('jpp_peg', $nilai->jpp_peg) }}" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Jamsostek</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jamsostek"
                                            value="{{ old('jamsostek', $nilai->jamsostek) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Jams_Prs</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="jams_prs"
                                            value="{{ old('jams_prs', $nilai->jams_prs) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Jams_Peg</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="jams_peg"
                                            value="{{ old('jams_peg', $nilai->jams_peg) }}" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Pajak Jamsostek</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="pajak_jamsostek"
                                            value="{{ old('pajak_jamsostek', $nilai->pajak_jamsostek) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Menit Telat</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="menit_telat"
                                            value="{{ old('menit_telat', $nilai->menit_telat) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Hari Kerja</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="hari_kerja"
                                            value="{{ old('hari_kerja', $nilai->hari_kerja) }}" />
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">PurnaJab_Dir</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="purnajab_dir"
                                            value="{{ old('purnajab_dir', $nilai->purnajab_dir) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Purna Karya</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="purna_karya"
                                            value="{{ old('purna_karya', $nilai->purna_karya) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Dana Pensiun</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="dana_pensiun"
                                            value="{{ old('dana_pensiun', $nilai->dana_pensiun) }}" />
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <div class="row g-2 mt-2">
                                    <div class="col mb-0">
                                        <label for="emailWithTitle" class="form-label">Tarif 1</label>
                                        <input type="text" id="emailWithTitle" class="form-control"
                                            placeholder="Keterangan Unit" name="tarif_1"
                                            value="{{ old('tarif_1', $nilai->tarif_1) }}" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="dobWithTitle" class="form-label">Tarif 2</label>
                                        <input type="text" id="dobWithTitle" class="form-control"
                                            placeholder="Keterangan Sub-Unit" name="tarif_2"
                                            value="{{ old('tarif_2', $nilai->tarif_2) }}" />
                                    </div>
                                </div>
                                <hr class="mt-5" />
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('nilai.index') }}" class="btn btn-outline-secondary">Cancel</a>
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
