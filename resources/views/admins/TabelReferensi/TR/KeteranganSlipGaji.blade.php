@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Keterangan Slip Gaji
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <form id="formAccountSettings" method="POST" action="{{ route('keteranganslipgaji.store') }}">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Tambah Data Keterangan Slip Gaji</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Kode Slip Gaji</label>
                                            <input type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Kode Penerimaan" name="kode" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Keterangan Slip Gaji</label>
                                            <input type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Keterangan Penerimaan Lain" name="keterangan" />
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
                            <th>Kode Keterangan</th>
                            <th>Keterangan Slip Gaji</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($keteranganslipgajis as $ketslipgaji)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <strong>{{ $ketslipgaji->kode }}</strong>
                                </td>
                                <td>
                                    <strong>{{ $ketslipgaji->keterangan }}</strong>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('keteranganslipgaji.destroy', $ketslipgaji->id) }}"
                                        method="POST">
                                        <a href="{{ route('keteranganslipgaji.edit', $ketslipgaji->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
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
        <!--/ Hoverable Table rows -->
        <ul class="pagination justify-content-center mt-3">{{ $keteranganslipgajis->links('pagination::bootstrap-4') }}
        </ul>
    </div>
    <hr class="my-5" />
@endsection
