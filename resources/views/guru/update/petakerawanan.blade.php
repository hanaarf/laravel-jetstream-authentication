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
                    <h4 class="card-title">Add User</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="/dbgurubk/{{ $petaKerawanan->id}}/editpk"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>siswa</label>
                                    <select name="siswa_id" class="form-control default-select" id="maapel">
                                        @foreach ($siswa as $item)
                                        <option value="{{ $item->id }}" @if($item->id == $petaKerawanan->siswa_id)
                                            selected @endif>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div><br>

                                <div class="form-group col-md-12">
                                    <label>walas</label>
                                    <select class="select2 form-control" name="walas_id" data-toggle="select2">
                                        <option value="{{ $wakel->id }}">{{ $wakel->name }}</option>
                                    </select>
                                </div><br>

                                {{-- <div class="form-group col-md-12">
                                    <label>jenis rawan</label>
                                    <select name="jenisrawan_id" class="form-control default-select" id="maapel">
                                        <option value="{{ $petaKerawanan->jenisrawanid->id }}"
                                selected>{{ $petaKerawanan->jenisrawanid->name }}
                                @foreach ($jenisrawanid as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div> --}}

                            <div class="form-group col-md-12">
                                <label>kerawanan</label>
                                <select class="multi-select" name="jenis_kerawanan[]" multiple="multiple">
                                    <option value="{{ $petaKerawanan->jenis_kerawanan }}"
                                        selected>{{ $petaKerawanan->jenis_kerawanan }}
                                      </option>
                                      <option value="Sering sakit">Sering sakit</option>
                                      <option value="Sering ijin">Sering ijin</option>
                                      <option value="Sering alpha">Sering alpha</option>
                                      <option value="Bolos">Bolos</option>
                                      <option value="Kelainan jasmani">Kelainan jasmani</option>
                                      <option value="Minat/ motivasi belajar kurang">Minat/ motivasi belajar kurang</option>
                                      <option value="Introvert / pendiam">Introvert / pendiam</option>
                                      <option value="Tinggal dengan wali">Tinggal dengan wali</option>
                                      <option value="Kemampuan kurang">Kemampuan kurang</option>
                                      <option value="Berkelahi">Berkelahi</option>
                                      <option value="Menentang guru">Menentang guru</option>
                                      <option value="Mengganggu teman">Mengganggu teman</option>
                                      <option value="pacaran">pacaran</option>
                                      <option value="Broken home">Broken home</option>
                                      <option value="Kondisi ekonomi kurang">Kondisi ekonomi kurang</option>
                                      <option value="Pergaulan di luar sekolah">Pergaulan di luar sekolah</option>
                                      <option value="Pengguna narkoba">Pengguna narkoba</option>
                                      <option value="Merokok">Merokok</option>
                                      <option value="Membiayai sekolah sendiri / bekerja">Membiayai sekolah sendiri / bekerja</option>
                                </select>
                            </div>


                            <div class="form-group col-md-12">
                                <label>kesimpulan</label>
                                <input name="kesimpulan" type="text" class="form-control" placeholder=""
                                    value="{{ $petaKerawanan->kesimpulan}}">
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
