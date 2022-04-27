@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Account /</span> List Account
        </h4>

        <div class="col-lg-12 col-md-6">
            <div class="mt-3 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    + Tambah Data
                </button>
                <!-- Hoverable Table rows -->
                <div class="card mt-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover table-bordered table-striped">
                            <thead class="text-center" style="vertical-align:middle;">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th>Password</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="vertical-align:middle;">
                                @forelse ($account as $ac)
                                    <tr>
                                        <td>{{ $ac->id }}</td>
                                        <td>{{ $ac->name }}</td>
                                        <td>{{ $ac->email }}</td>
                                        <td>
                                            @if ($ac->role == 1)
                                                Admin
                                            @elseif ($ac->role == 2)
                                                Karyawan
                                            @elseif ($ac->role == 3)
                                                Editor
                                            @endif
                                        </td>
                                        <td>{{ $ac->password }}</td>
                                        <td>
                                            <a href="{{ route('account.edit', $ac->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('account.destroy', $ac->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Account Belum Dibuat, Silahkan Buat !!.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="pagination justify-content-center mt-3"></ul>
    <!--/ Hoverable Table rows -->

    <hr class="my-5" />
    <!-- Modal -->
    <form id="formAccountSettings" method="POST" action="{{ route('account.store') }}">
        @csrf
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah Data Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Name</label>
                                <input name="name" type="text" id="emailWithTitle" class="form-control" placeholder="Name"
                                    required />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">E-mail</label>
                                <input name="email" type="email" id="dobWithTitle" class="form-control"
                                    placeholder="E-mail" required />
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Role</label>
                                <select name="role" id="role" class="form-control" required>
                                    <option disabled selected>-- Silahkan Pilih Role --</option>
                                    <option value=1>Admin</option>
                                    <option value=2>User</option>
                                    <option value=3>Editor</option>
                                </select>
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">Password</label>
                                <input name="password" type="password" id="dobWithTitle" class="form-control" data-eye
                                    placeholder="Enter password" required />
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
