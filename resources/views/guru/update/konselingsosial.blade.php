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
                       

                        <form method="POST" action="/dbgurubk/{{ $konselingpribadi->id}}/editsosial"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf

                          


                            <div class="form-row">
                              
                                    <input name="deskripsi" type="hidden" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->deskripsi}}">
                               

                              
                                    <input name="jeniskonseling_id" type="hidden" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->jeniskonseling_id}}">
                               
                              
                                    <input name="siswa_id" type="hidden" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->siswa_id}}">
                               
                              
                                    <input name="gurubk_id" type="hidden" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->gurubk_id}}">
                               
                              
                                    <input name="walas_id" type="hidden" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->walas_id}}">
                               

                                <div class="form-group col-md-12">
                                    <label>status</label>
                                    <select class="multi-select" name="status">
                                        <option value="{{ $konselingpribadi->status }}" selected>
                                            {{ $konselingpribadi->status }}
                                        <option value="Approved">Approved</option>
                                        <option value="Reschedule">Reschedule</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Tanggal</label>
                                    <input name="tanggal" type="date" class="form-control" placeholder="tanggal"
                                        value="{{ $konselingpribadi->tanggal}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Default Clock Picker</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" name="jam" value="{{ $konselingpribadi->jam}}"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                </div>
                               
                                <div class="form-group col-md-6">
                                    <label>tempat</label>
                                    <input name="tempat" type="text" class="form-control" placeholder="tempat"
                                        value="{{ $konselingpribadi->tempat}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Hasil</label>
                                    <input name="hasil" type="text" class="form-control" placeholder="hasil"
                                      >
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
