@extends('layouts.db')

@section('contentadmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Peta Kerawanan</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
            <div class="mt-2 alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                    <form action="/dbgurubk-formtutor-kelas" method="POST">
                        
                        @csrf

                        <input class="form-control" type="hidden" name="gurubk_id" value="{{ $gurubk->id }}">

                        <div class="form-group col-md-12">
                            <label>walas</label>
                            <select name="walas_id" class="form-control default-select" id="siswa_id">
                                <option value="{{ $wakel->id }}">{{ $wakel->name }}</option>
                            </select>
                        </div>



                        <div class="form-group col-md-12">
                            <label>siswa</label>
                            <select name="siswa_id" class="form-control default-select" id="siswa_id">
                                @foreach ($siswa as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <input class="form-control" type="hidden" name="status" value="approved"> 

                        <div class="form-group col-md-12">
                            <label for="jeniskonseling_id">Jenis Konseling</label>
                            <select name="jeniskonseling_id" id="jeniskonseling_id" class="form-control" >
                                @foreach ($jeniskonseling as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
                                @endforeach
                            </select>
                    </div>



                        <div class="form-group col-md-12">
                            <label>deskripsi</label>
                            <input name="deskripsi" type="text" class="form-control" placeholder="enter a description">
                        </div>
                       
                        <div class="form-group col-md-12">
                            <label>tanggal</label>
                            <input name="tanggal" type="date" class="form-control" placeholder="">
                        </div>
                       
                        <div class="form-group col-md-12">
                            <label>Default Clock Picker</label>
                            <div class="input-group clockpicker">
                                <input type="text" class="form-control" name="jam"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                            </div>
                        </div>
                       
                        <div class="form-group col-md-12">
                            <label>tempat</label>
                            <input name="tempat" type="text" class="form-control" placeholder="choose a place">
                        </div>







                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
