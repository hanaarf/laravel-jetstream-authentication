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
                <span>Datatable</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
    </div>


    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">History</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example5" class="display" style="min-width: 845px">
                        <a href="/dbsiswa-form-konselingpribadi">
                            <button type="button" class="btn btn-rounded btn-primary"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                </span>Add</button></a><br>
                        <br>
                        <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox ml-2">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th>Student</th>
                                <th>HR Teacher</th>
                                <th>Kelas</th>
                                <th>Descripition</th>
                                <th>Datetime</th>
                                <th>Status</th>
                                <th>Result</th>
                                <th>Place</th>
                            </tr>
                        </thead>
                      <tbody>
                        @foreach($konselingpribadi as $item)
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                </div>
                            </td>
                            <td>{{$item->siswaid->name}}</td>
                            <td>{{$item->walasid->name}}</td>
                            <td>{{$item->siswaid->kelas->name}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->tanggal}},{{$item->jam}}</td>
                            <td>
                                <span class="badge light badge-success">
                                    <i class="fa fa-circle text-success mr-1"></i>
                                    {{$item->status}}
                                </span>
                            </td>
                            <td>{{$item->hasil}}</td>
                            <td>{{$item->tempat}}</td>
                            {{-- <td>
                                <div class="dropdown ml-auto text-right">
                                    <div class="btn-link" data-toggle="dropdown">
                                        <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </td>												 --}}
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


   

 
</div>


@endsection
