@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Jenis Potongan Lain
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <form id="formAccountSettings" method="POST" action="{{ route('potong.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Potongan Lain</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Kode Potongan</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Kode Unit" name="kode" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Keterangan Potongan
                                                Lain</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Kode Sub-Unit" name="uraian" />
                                        </div>
                                    </div>
                                    <hr class="my-3" />
                                    <h6 class="modal-title mt-3" id="modalCenterTitle">Alamat Transfer</h6>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Nama Bank</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="bank" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">No. Rekening</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="norek" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Atas Nama</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Sub-Unit" name="atasnama" />
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
                <table class="table table-striped table-bordered table-hover">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th colspan="3">Jenis Potongan Lain</th>
                            <th colspan="3">Alamat Transfer</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Kode Potongan</th>
                            <th>Keterangan Potongan Lain</th>
                            <th>Bank</th>
                            <th>No. Rekening</th>
                            <th>Atas Nama</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($potongs as $potong)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $potong->kode }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $potong->uraian }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $potong->bank }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $potong->norek }}</strong>
                                </td>
                                <td><i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $potong->atasnama }}</strong>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('potong.destroy', $potong->id) }}" method="POST">
                                        <a href="{{ route('potong.edit', $potong->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination justify-content-center mt-3">{{ $potongs->links('pagination::bootstrap-4') }} </ul>
        <!--/ Hoverable Table rows -->
    </div>
    <hr class="my-5" />
@endsection
