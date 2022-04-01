@extends('layouts.main')

@section('container')
@include('sweetalert::alert')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemeliharaan Data /</span> Data Karyawan
    </h4>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">+ Tambah Data<i class="fas fa-print"></i></a>
    <!-- Striped Rows -->
    <div class="card">
        <!-- <h5 class="card-header">Striped rows</h5> -->
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($karyawans as $post)
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{ $post->nik }}</strong>
                        </td>
                        <td>
                            {{ $post->nama }}
                        </td>
                        <td>
                            @if ($post->jabatan == '1')
                            <p>Kepala Bagian</p>
                            @elseif ($post->jabatan == '2')
                            <p>Kepala Sub Bagian</p>
                            @elseif ($post->jabatan == '3')
                            <p>Kepala Divisi</p>
                            @endif
                        </td>
                        <td>
                            <strong> {{ $post->ska }}</strong>
                        </td>
                        <td>
                            @if ($post->skk == '1')
                            <span class="badge bg-label-primary me-1">Belum Kawin</span>
                            @elseif ($post->skk == '2')
                            <span class="badge bg-label-warning me-2">Kawin</span>
                            @elseif ($post->skk == '3')
                            <span class="badge bg-label-danger me-3">Janda</span>
                            @elseif ($post->skk == '4')
                            <span class="badge bg-label-purple me-4">Duda</span>
                            @endif
                        </td>
                        <td>
                            <img width="50" height="50" src="{{ Storage::url('public/posts/') . $post->image }}">
                        </td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('karyawan.destroy', $post->id) }}" method="post">
                                <a href="{{ route('karyawan.edit', $post->id) }}" class="btn btn-sm btn-secondary">Edit</a>
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
<ul class="pagination justify-content-center mt-3">{{ $karyawans->links('pagination::bootstrap-4') }}
</ul>
@endsection