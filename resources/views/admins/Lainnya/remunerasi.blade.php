@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Lainnya /</span> Data Remunarasi Tunjangan
        </h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
        </button>
        <!-- Modal -->
        <form id="formAccountSettings" method="POST" action="{{ route('remunerasi.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Remunarasi Tunjangan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Golongan</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Kode Unit" name="golongan" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Kode</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Kode Sub-Unit" name="kode" />
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Jabatan</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="jabatan" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Tunjangan Jabatan</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="tunj_jabatan" />
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Tunjangan UMK</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="tunj_umk" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Tunjangan Transport</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="tunj_transport" />
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Tunjangan Proyek</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="tunj_proyek" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Tunjangan Komunikasi</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="tunj_komunikasi" />
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Tunjangan Pulsa</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="tunj_pulsa" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Tunjangan Utilitas</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="tunj_utilitas" />
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Tunjangan Perumahan</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="tunj_perumahan" />
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


        <!-- Striped Rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>Golongan</th>
                            <th>Kode</th>
                            <th>Jabatan</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan UMK</th>
                            <th>Tunjangan Transport</th>
                            <th>Tunjangan Proyek</th>
                            <th>Tunjangan Komunikasi</th>
                            <th>Tunjangan Pulsa</th>
                            <th>Tunjangan Utilitas</th>
                            <th>Tunjangan Perumahan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        
                        @forelse ($remunerasis as $rem)
                            <tr>
                                <td>
                                    <!-- Golongan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->golongan }}</strong>
                                </td>
                                <td>
                                    <!-- Kode -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->kode }}</strong>
                                </td>
                                <td>
                                    <!-- Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->jabatan }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_jabatan }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan UMK -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_umk }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Transport -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_transport }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Proyek -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_proyek }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Komunikasi -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_komunikasi }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Pulsa -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_pulsa }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Utilitas -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_utilitas }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Perumahan-->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->tunj_perumahan}}</strong>
                                </td>
                                <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('remunerasi.destroy', $rem->id) }}" method="POST">
                                        <a href="{{ route('remunerasi.edit', $rem->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Remunerasi Tunjangan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3">{{ $remunerasis->links('pagination::bootstrap-4') }}
    </ul>
@endsection
