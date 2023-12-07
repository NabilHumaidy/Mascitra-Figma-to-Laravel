@extends('layouts.dashboard')

@section('title')
    Admin
@endsection

@section('active-admin')
    active
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Admin</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">DataTables Admin</h5>
                        </div>
                        <div class="card-body">
                            <table id="tableAdmins" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
