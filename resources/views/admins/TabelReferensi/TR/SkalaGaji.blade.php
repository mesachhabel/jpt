@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data / Tabel Referensi /</span> Skala gaji
        </h4>

        <div class="col-lg-4 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Tabel Referensi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="formAccountSettings" method="POST" action="{{ route('skalagaji.store') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Kelas Jabatan</label>
                                            <select name="kelas" id="" class="form-control">
                                                <option value="" disabled selected>-- Silahkan Pilih Kelas Jabatan --
                                                </option>
                                                @foreach ($jabatan as $item)
                                                    <option value="{{ $item->kelas }}">{{ $item->kelas }}</option> )
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Jabatan</label>
                                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan">
                                        </div>
                                    </div>
                                    <h6 class="modal-title mt-3" style="font-size: 12px;" id="modalCenterTitle">Skala Gaji
                                        Pokok
                                    </h6>
                                    <hr class="my-3" />
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Min</label>
                                            <input name="min" type="text" id="emailWithTitle" class="form-control"
                                                placeholder="Minimum Gaji Pokok" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Mid</label>
                                            <input name="mid" type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Middle Gaji Pokok" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Max</label>
                                            <input name="max" type="text" id="dobWithTitle" class="form-control"
                                                placeholder="Maximal Gaji Pokok" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Kelas Jabatan</th>
                            <th rowspan="2">Jabatan</th>
                            <th colspan="3">Skala Gaji</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th>Min</th>
                            <th>Mid</th>
                            <th>Max</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">
                        <?php $no = 1; ?>
                        @forelse ($skalagajis as $skala)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong>{{ $skala->kelas }} </strong></td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong>{{ $skala->jabatan }}</strong></td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong>Rp. {{ $skala->min }}</strong></td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong>Rp. {{ $skala->mid }}</strong></td>
                                <td><i class=" fa-lg text-danger me-3"></i> <strong>Rp. {{ $skala->max }}</strong></td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('skalagaji.destroy', $skala->id) }}" method="POST">
                                        <a href="{{ route('skalagaji.edit', $skala->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            @empty
                        @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    <hr class="my-5" />
@endsection
