@extends('layouts.db')

@section('contentadmin')
<div class="container-fluid">

    <div class="modal fade" id="addProjectSidebar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="text-black font-w500">Project Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Deadline</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Client Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Element</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">update User</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                       

                        <form method="POST" action="/dbgurubk-simpaneditsosialisasi/{{ $sosialisasi->id}}"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>judul</label>
                                        <input name="judul" type="text" class="form-control" placeholder="tittle" value="{{ $sosialisasi->judul}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>deskripsi</label>
                                        <input name="deskripsi" type="text" class="form-control" placeholder="desc" value="{{ $sosialisasi->deskripsi}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>tempat</label>
                                        <input name="tempat" type="text" class="form-control" placeholder="place" value="{{ $sosialisasi->tempat}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>tanggal</label>
                                        <input name="tanggal" type="date" class="form-control" placeholder="desc" value="{{ $sosialisasi->tanggal}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>jam</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" name="jam" value="{{ $sosialisasi->jam}}"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                   
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
