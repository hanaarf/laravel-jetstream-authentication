<!-- resources/views/peta_kerawanan/create.blade.php -->

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
    <div class="project-nav">
        <div class="card-action card-tabs  mr-auto">
            <ul class="nav nav-tabs style-2">
                <li class="nav-item">
                    <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">All Class <span class="badge badge-pill shadow-primary badge-primary">154</span></a>
                </li>
              
            </ul>
        </div>
       
    </div>
    <div class="tab-content project-list-group" id="myTabContent">	
        <div class="tab-pane fade active show" id="navpills-1">


            @foreach($kelas as $k) 
            {{-- @foreach($jenisRawan as $jr) --}}
            <div class="card">
                <div class="project-info">
                    <div class="col-xl-3 my-2 col-lg-4 col-sm-6">
                        <p class="text-primary mb-1">#P-000441425</p>
                        <h5 class="title font-w600 mb-2"><a href="post-details.html" class="text-black">{{ $k->name }}</a></h5>
                        <div class="text-dark"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
                    </div>
                    <div class="col-xl-2 my-2 col-lg-4 col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="project-media">
                               
                            </div>
                            <div class="ml-2">
                                <span></span>
                                <h5 class="mb-0 pt-1 font-w50 text-black"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 my-2 col-lg-4 col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="project-media">
                               
                            </div>
                            <div class="ml-2">
                                <span></span>
                                <h5 class="mb-0 pt-1 font-w500 text-black"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 my-2 col-lg-6 col-sm-6">
                        <div class="d-flex align-items-center">
                           
                            <div class="ml-2">
                                <span></span>
                                <h5 class="mb-0 pt-1 font-w500 text-black"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 my-2 col-lg-6 col-sm-6">
                        <div class="d-flex project-status align-items-center">
                            {{-- <div class="power-ic" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                            </div> --}}
                          <a href="/dbgurubk-formpk-kelas/{{ $k->id }}"><button type="button" class="btn btn-primary mb-2" >+</button></a>  


                            
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Modal body text goes here.</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="dropdown">
                                <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach  --}}
            @endforeach
        </div>
        
    </div>
</div>




@endsection
