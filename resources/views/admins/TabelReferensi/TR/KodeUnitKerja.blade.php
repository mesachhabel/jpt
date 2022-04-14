@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Kode Unit Kerja
        </h4>

        <div class="col-lg-12 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>
                <!-- Hoverable Table rows -->
                <div class="card mt-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Unit</th>
                                    <th>Kode Sub-Unit</th>
                                    <th>Keterangan Unit</th>
                                    <th>Keterangan Sub-Unit</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                <?php $no = 1; ?>
                                @forelse ($kodeunitkerjas as $kodeunitkerja)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $kodeunitkerja->kuk }}</strong>
                                        </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $kodeunitkerja->sub }}</strong>
                                        </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $kodeunitkerja->uuk }}</strong>
                                        </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $kodeunitkerja->ksu }}</strong>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('kodeunitkerja.destroy', $kodeunitkerja->id) }}"
                                                method="POST">
                                                <a href="{{ route('kodeunitkerja.edit', $kodeunitkerja->id) }}"
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
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3">{{ $kodeunitkerjas->links('pagination::bootstrap-4') }} </ul>
    <!--/ Hoverable Table rows -->

    <hr class="my-5" />
    <!-- Modal -->
    <form id="formAccountSettings" method="POST" action="{{ route('kodeunitkerja.store') }}">
        @csrf
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah Data Unit Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Kode Unit</label>
                                <input name="kuk" type="text" id="emailWithTitle" class="form-control"
                                    placeholder="Kode Unit" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">Kode Sub-Unit</label>
                                <input name="sub" type="text" id="dobWithTitle" class="form-control"
                                    placeholder="Kode Sub-Unit" />
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Keterangan Unit</label>
                                <input name="uuk" type="text" id="emailWithTitle" class="form-control"
                                    placeholder="Keterangan Unit" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">Keterangan Sub-Unit</label>
                                <input name="ksu" type="text" id="dobWithTitle" class="form-control"
                                    placeholder="Keterangan Sub-Unit" />
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
@endsection
