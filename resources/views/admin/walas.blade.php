@extends('layouts.db')

@section('contentadmin')
<div class="container-fluid">
    <!-- Add Project -->
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
    <!-- row -->


    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Profile Datatable</h4>
            </div>
            
            <div class="card-body">
                <a href="/dbadmin-form-walas" class="btn btn-rounded btn-outline-primary">+ Add</a>
                <div class="table-responsive">
                    <br><table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>name</th>
                                <th>user id</th>
                                <th>ultah</th>
                                <th>walikelas</th>
                                <th>nipd</th>
                                <th>detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($walas as $item)
                            <tr>
                                <td><img class="rounded-circle" width="35" src="" alt="">
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><a href="javascript:void(0);"><strong>{{ $item->userid->name }}</strong></a></td>
                                <td>{{ $item->ttl }}</td>
                                <td><a href="javascript:void(0);"><strong>
                                    @foreach ($item->kelas as $kelas)
                                    {{ $kelas->name}}
                                    @endforeach
                                </strong></a></td>
                                <td>{{ $item->nipd }}</td>
                                <td>detail</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/dbadmin/{{ $item->id }}/editwalas" ><button type="button" class="ml-3 mb-1 btn btn-primary shadow btn-xs sharp mr-1">   <i class="mdi mdi-border-color"></i> </button></a>

                                        <form action="/dbadmin-hapuswalas/{{ $item->id }}" method="POST"
                                            onsubmit="return confirm('yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn btn-danger shadow btn-xs sharp"> <i
                                                    class="fa fa-trash"></i> </button>
                                        </form>
                                    </div>
                                </td>
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
