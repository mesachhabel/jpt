@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Lainnya /</span> Data Remunerasi
        </h4>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        <!-- Striped Rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center" style="vertical-align:middle;">
                        <tr>
                            <th>No</th>
                            <th>Golongan</th>
                            <th>Gaji Pokok</th>
                            <th>Honorarium</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        
                        @forelse ($remunerasis as $rem)
                            <tr>
                                <td>
                                    <!-- Golongan -->
                                    02
                                </td>
                                <td>
                                    <!-- Gaji Pokok -->
                                    30
                                </td>
                                <td>
                                    <!-- Honorarium -->
                                    30.719.100,00
                                </td>
                                <td>
                                    <!-- Honorarium -->
                                    0
                                </td>
                                
                                <td>
                                    <!-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('karyawan.destroy', $rem->nik) }}" method="POST">
                                        <a href="{{ route('karyawan.edit', $rem->nik) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form> -->
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Remunerasi Belum Ada.
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
