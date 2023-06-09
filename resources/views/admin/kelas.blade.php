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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Datatable</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                       <table id="example" class="display" style="min-width: 845px">
                        <a href="/dbadmin-form-kelas" class="btn btn-rounded btn-outline-primary">+ Add</a>
                        <br>
                           <br> <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Gurubk</th>
                                    <th>Walas</th>
                                    <th>Murid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                           <tbody>
                            @foreach ($kelas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><a href="javascript:void(0);"><strong>{{ $item->guru->name }}</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>{{ $item->walas->name }}</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>
                                    @foreach ($item->siswa as $item)
                                   - {{ $item->name }} <br>
                                    @endforeach
                                </strong></a></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/dbadmin/{{ $item->id }}/editkelas" ><button type="button" class="ml-3 mb-1 btn btn-primary shadow btn-xs sharp mr-1">   <i class="mdi mdi-border-color"></i> </button></a>

                                        <form action="/dbadmin-hapuskelas/{{ $item->id }}" method="POST"
                                            onsubmit="return confirm('yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn btn-warning shadow btn-xs sharp"> <i
                                                    class="fa fa-trash"></i> </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                           </tbody>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Gurubk</th>
                                    <th>Walas</th>
                                    <th>Murid</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</div>
@endsection