@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Kode Jabatan
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <form id="formAccountSettings" method="POST" action="{{ route('kodejabatan.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Jabatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Kelas Jabatan</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Kode Unit" name="kelas" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Nama Jabatan</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="jabatan" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Kelompok</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="klp" />
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
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>No</th>
                            <th>Kelas Jabatan</th>
                            <th>Jabatan</th>
                            <th>Kelompok</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($kodejabatans as $kodejabatan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $kodejabatan->kelas }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $kodejabatan->jabatan }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $kodejabatan->klp }}</strong>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('kodejabatan.destroy', $kodejabatan->id) }}" method="post">
                                        <a href="{{ route('kodejabatan.edit', $kodejabatan->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Kode Jabatan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination justify-content-center mt-3">{{ $kodejabatans->links('pagination::bootstrap-4') }} </ul>
        <!--/ Hoverable Table rows -->
    </div>
    <hr class="my-5" />
@endsection
