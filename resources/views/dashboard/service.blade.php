@extends('layouts.dashboard')

@section('title')
    Service
@endsection

@section('active-service')
    active
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Service</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary" id="serviceBtn" >Add Service</button>

                            <table id="tableService" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <div class="modal fade p-4 py-md-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
        id="serviceModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <form enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-4 mb-2">Add Service</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0 mb-4">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <label for="title" class="form-label">Title</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{old('title')}}">
                                <div class="invalid-feedback d-block" id="title-error"></div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="description" class="form-label">Description</label><span class="text-danger">
                                    *</span>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{old('description')}}</textarea>
                                <div class="invalid-feedback d-block" id="description-error"></div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="gambar" class="form-label">Gambar</label><span class="text-danger">
                                    *</span>
                                <input type="file" class="form-control" name="gambar" id="gambar" value="{{old('gambar')}}">
                                <div class="invalid-feedback d-block" id="gambar-error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                        <button type="button" id="saveServiceBtn" class="btn btn-lg btn-primary">Send</button>
                        <button type="button" class="btn btn-lg btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade p-4 py-md-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
        id="serviceEditModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <form enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-4 mb-2">Add Service</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0 mb-4">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <label for="titleEdit" class="form-label">Title</label><span class="text-danger">
                                    *</span>
                                <input type="text" class="form-control" name="titleEdit" id="titleEdit" placeholder="" value="{{old('titleEdit')}}">
                                <div class="invalid-feedback d-block" id="titleEdit-error"></div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="descriptionEdit" class="form-label">Description</label><span class="text-danger">
                                    *</span>
                                <textarea name="descriptionEdit" id="descriptionEdit" class="form-control" cols="30" rows="10">{{old('descriptionEdit')}}</textarea>
                                <div class="invalid-feedback d-block" id="descriptionEdit-error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                        <button type="button" id="updateServiceBtn" class="btn btn-lg btn-primary">Save</button>
                        <button type="button" class="btn btn-lg btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
