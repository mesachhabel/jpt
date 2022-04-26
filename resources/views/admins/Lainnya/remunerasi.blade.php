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
                            <th>Golongan</th>
                            <th>Baris</th>
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
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->golongan }}</strong>
                                </td>
                                <td>
                                    <!-- Gaji Pokok -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->baris }}</strong>
                                </td>
                                <td>
                                    <!-- Honorarium -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->Gaji_pokok }}</strong>
                                </td>
                                <td>
                                    <!-- Honorarium -->
                                    <i class=" fa-lg text-danger me-3"></i>
                                    <strong>{{ $rem->Honorarium }}</strong>
                                </td>
                                
                                <td>
                                   
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    
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
