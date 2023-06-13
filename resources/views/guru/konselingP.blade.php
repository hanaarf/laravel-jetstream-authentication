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
                <h4 class="card-title">All Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example4" class="display" style="min-width: 845px">
                        {{-- <a href="/dbsiswa-form-konselingpribadi">
                            <button type="button" class="btn btn-rounded btn-primary"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                </span>Add</button></a><br> --}}
                        <br>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>jenis layanan</th>
                                <th>Date</th>
                                <th>Time </th>
                                <th>Place</th>
                                <th>Status </th>
                                <th>Counsultant</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($konselingpribadi as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td><a href="javascript:void(0);"><strong>{{ $item->jeniskonseling->name }}</strong></a></td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->jam}}</td>
                                <td>{{$item->tempat}}</td>
                                <td>
                                    <span class="badge light badge-warning">
                                        <i class="fa fa-circle text-warning mr-1"></i>
                                        {{$item->status}}
                                    </span>
                                </td>
                                <td>{{$item->gurubkid->name}}</td>
                                <td>{{$item->walasid->name}}</td>
                                {{-- <td>
                                    <span style="display: flex">

                                        <form action="/dbsiswa-hapuskp/{{  $item->id }}" method="POST"
                                            onsubmit="return confirm('yakin cancel?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn btn-warning shadow btn-xs sharp"><i
                                                    class="fa fa-close color-danger"></i> </button>
                                        </form>
                                    </span>
                                </td> --}}
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
