@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Lainnya/</span> Data Remunarasi Tunjangan
        </h4>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Jabatan</label>
                                    <select class="form-select dynamic" name="jabatan" id="jabatan" data-dependent="kelas">
                                        <option disabled selected>Pilih Jabatan</option>
                                        @foreach ($jabatan as $jabatan)
                                            <option value="{{ $jabatan->jabatan }}">{{ $jabatan->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Kode</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="Kode"
                                        name="kode" />
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Kelas</label>
                                <Select name="kelas" id="kelas" class="form-control" readonly="readonly"></Select>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tunjangan Jabatan</label>
                                    <input type="text" id="dobWithTitle" class="form-control"
                                        placeholder="Tunjangan Jabatan" name="tunj_jabatan" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tunjangan Prestasi</label>
                                    <input type="text" id="emailWithTitle" class="form-control"
                                        placeholder="Tunjangan Prestasi" name="tunj_prestasi" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tunjangan Shift</label>
                                    <input type="text" id="emailWithTitle" class="form-control"
                                        placeholder="Tunjangan Prestasi" name="tunj_shift" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tunjangan Transport</label>
                                    <input type="text" id="dobWithTitle" class="form-control"
                                        placeholder="Tunjangan Transport" name="tunj_transport" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tunjangan Proyek</label>
                                    <input type="text" id="emailWithTitle" class="form-control"
                                        placeholder="Tunjangan Proyek" name="tunj_proyek" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tunjangan Komunikasi</label>
                                    <input type="text" id="dobWithTitle" class="form-control"
                                        placeholder="Tunjangan Komunikasi" name="tunj_komunikasi" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tunjangan Pulsa</label>
                                    <input type="text" id="emailWithTitle" class="form-control"
                                        placeholder="Tunjangan Pulsa" name="tunj_pulsa" />
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tunjangan Utilitas</label>
                                    <input type="text" id="dobWithTitle" class="form-control"
                                        placeholder="Tunjangan Utilitas" name="tunj_utilitas" />
                                </div>
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tunjangan Perumahan</label>
                                    <input type="text" id="emailWithTitle" class="form-control"
                                        placeholder="Tunjangan Perumahan" name="tunj_perumahan" />
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
                            <th>Jabatan</th>
                            <th>Kode</th>
                            <th>Kelompok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Prestasi</th>
                            <th>Tunjangan Shift</th>
                            <th>Tunjangan Transport</th>
                            <th>Tunjangan Proyek</th>
                            <th>Tunjangan Komunikasi</th>
                            <th>Tunjangan Pulsa</th>
                            <th>Tunjangan Utilitas</th>
                            <th>Tunjangan Perumahan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align:middle;">

                        @forelse ($remunerasis as $rem)
                            <tr>
                                <td>
                                    <!-- Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->jabatan }}</strong>
                                </td>
                                <td>
                                    <!-- Kode -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->kode_mg }}</strong>
                                </td>
                                <td>
                                    <!-- Kelas -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->klp }}</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Jabatan -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>@idr($rem->tunj_jabatan) </strong>
                                </td>
                                <td>
                                    <!-- Tunjangan UMK -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>@idr($rem->tunj_prestasi)</strong>
                                </td>
                                <td>
                                    <!-- Tunjangan Shift -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>@idr($rem->tunj_shift)</strong>
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
                                    <strong>{{ $rem->tunj_perumahan }}</strong>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.dynamic').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('remunerasi.fetch') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#jabatan').change(function() {
                $('#kelas').val('');
            });
        });
    </script>
@endsection
