@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Penandatangan
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <form id="formAccountSettings" method="POST" action="{{ route('penandatangan.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Penandatangan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">NIK</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Kode Sub-Unit" name="nik" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Nama</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Keterangan Unit" name="nama" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Jabatan</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="jabatan" />
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
                <table class="table table-hover table-bordered table-striped">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($penandatangans as $ttd)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $ttd->nik }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $ttd->nama }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $ttd->jabatan }}</strong>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('penandatangan.destroy', $ttd->id) }}" method="POST">
                                        <a href="{{ route('penandatangan.edit', $ttd->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data penandatangan Belum Ada.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination justify-content-center mt-3">{{ $penandatangans->links('pagination::bootstrap-4') }} </ul>
        <!--/ Hoverable Table rows -->
    </div>
    <hr class="my-5" />
@endsection
