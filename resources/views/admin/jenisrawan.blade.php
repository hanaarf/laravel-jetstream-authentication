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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data kerawanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                       <a href="/dbadmin-form-jenisrawan">
                        <button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button></a><br>
                        <br><thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                       <tbody>
                            @foreach ($jenisrawan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <span style="display: flex">
                                        <a href="/dbadmin/{{ $item->id }}/editjenisrawan">
                                            <button type="submit" class="ml-3 btn btn-primary shadow btn-xs sharp"><i class="fa fa-pencil color-muted"></i>  </button>
                                        </a><br>
                                      
                                        <form action="/dbadmin-hapusjenisrawan/{{ $item->id }}" method="POST"
                                            onsubmit="return confirm('yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn btn-warning shadow btn-xs sharp"><i class="fa fa-close color-danger"></i> </button>
                                        </form>
                                    </span>
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