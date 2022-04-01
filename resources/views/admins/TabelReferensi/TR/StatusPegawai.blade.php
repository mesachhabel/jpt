@extends('layouts.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Status Pegawai
    </h4>

    <div class="col-lg-4 col-md-6">
        <div class="mt-3 mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                + Tambah Data
            </button>

            <!-- Modal -->
            <form id="formAccountSettings" method="POST" action="{{ route('statuspegawai.store') }}">
                @csrf
            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Data Status Pegawai</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Kode Status Pegawai</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Kode Penerimaan" name="kodestatuspegawai"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Keterangan Status Pegawai</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="Keterangan Penerimaan Lain" name="keteranganpegawai"/>
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
        </div>
    </div>

    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Kode Status Pegawai</th>
                        <th>Keterangan Status Pegawai</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($statuspegawais as $stp)
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$stp->kodestatuspegawai}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$stp->keteranganpegawai}}</strong></td>
                        <td>
                            <a href="{{url('view-skalagaji')}}" type="button" class="btn btn-sm btn-secondary"><i class="bx bx-file"></i></a>
                            <a href="{{url('edit-skalagaji')}}" type="button" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            <a href="{{url('delete-skalagaji')}}" type="button" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
    <ul class="pagination justify-content-center mt-3">{{ $statuspegawais->links('pagination::bootstrap-4') }} </ul>
</div>
<hr class="my-5" />
@endsection