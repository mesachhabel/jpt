@extends('layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pemeliharaan Data /</span> Tabel Referensi
        </h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Tabel Referensi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Skala Gaji</strong></td>
                            <td>
                                <a href="{{ route('skalagaji.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Unit Kerja</strong>
                            </td>
                            <td>
                                <a href="{{ route('kodeunitkerja.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Struktur</strong>
                            </td>
                            <td>
                                <a href="{{ route('kodestruktur.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Kode Jabatan</strong>
                            </td>
                            <td>
                                <a href="{{ route('kodejabatan.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Jenis
                                    Penerimaan</strong></td>
                            <td>
                                <a href="{{ route('terima.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Jenis Potongan</strong>
                            </td>
                            <td>
                                <a href="{{ route('potong.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Keterangan Slip
                                    Gaji</strong></td>
                            <td>
                                <a href="{{ route('keteranganslipgaji.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Agama</strong></td>
                            <td>
                                <a href="{{ route('agama.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Nilai Baku</strong></td>
                            <td>
                                <a href="{{ route('nilai.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Penandatangan</strong>
                            </td>
                            <td>
                                <a href="{{ route('penandatangan.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Bank Transfer</strong>
                            </td>
                            <td>
                                <a href="{{ route('bank.index') }}" type="button" class="btn btn-sm btn-success"><i
                                        class="bx bx-edit"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Status Pegawai</strong>
                            </td>
                            <td>
                                <a href="{{ route('statuspegawai.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tabel Status Tugas</strong>
                            </td>
                            <td>
                                <a href="{{ route('statustugas.index') }}" type="button"
                                    class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr class="my-5" />
@endsection
