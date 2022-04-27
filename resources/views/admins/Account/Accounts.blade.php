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
                        <table class="table table-hover">
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
    <form id="formAccountSettings" method="POST" action="{{ route('kodeunitkerja.store') }}">
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
                                <input name="kuk" type="text" id="emailWithTitle" class="form-control"
                                    placeholder="Name" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">E-mail</label>
                                <input name="sub" type="text" id="dobWithTitle" class="form-control"
                                    placeholder="E-mail" />
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Role</label>
                                <input name="uuk" type="text" id="emailWithTitle" class="form-control"
                                    placeholder="Role" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">Password</label>
                                <input name="ksu" type="text" id="dobWithTitle" class="form-control"
                                    placeholder="Password" />
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
