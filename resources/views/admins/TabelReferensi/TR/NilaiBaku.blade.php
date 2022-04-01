@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Nilai Baku
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <form id="formAccountSettings" method="POST" action="{{ route('nilai.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Nilai Baku</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>St_Peg</th>
                            <th>St_Tugas</th>
                            <th>JKM</th>
                            <th>JKK</th>
                            <th>JHT</th>
                            <th>JHT_Prs</th>
                            <th>JHT_Peg</th>
                            <th>JPK</th>
                            <th>JPK_Prs</th>
                            <th>JPK_Peg</th>
                            <th>JPP</th>
                            <th>JPP_Prs</th>
                            <th>JPP_Peg</th>
                            <th>Pajak Jamsostek</th>
                            <th>Jamsostek</th>
                            <th>Jams_Prs</th>
                            <th>Jams_Peg</th>
                            <th>Menit Telat</th>
                            <th>Hari Kerja</th>
                            <th>PurnaJab_Dir</th>
                            <th>Purna Karya</th>
                            <th>Dana Pensiun</th>
                            <th>Tarif 1</th>
                            <th>Tarif 2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1; ?>
                        @forelse ($nilaibakus as $nilai)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->st_peg }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->st_tugas }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jkm }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jkk }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jht }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jht_prs }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jht_peg }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpk }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpk_prs }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpk_peg }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpp }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpp_prs }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jpp_peg }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->pajak_jamsostek }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jamsostek }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jams_prs }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->jams_peg }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->menit_telat }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->hari_kerja }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->purnajab_dir }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->purna_karya }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->dana_pensiun }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->tarif_1 }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $nilai->tarif_2 }}</strong>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('nilai.destroy', $nilai->id) }}" method="POST">
                                        <a href="{{ route('nilai.edit', $nilai->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Karyawan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination justify-content-center mt-3">{{ $nilaibakus->links('pagination::bootstrap-4') }} </ul>
        <!--/ Hoverable Table rows -->
    </div>
    <hr class="my-5" />
@endsection
