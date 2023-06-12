@extends('layouts.db')

@section('contentadmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Buat jadwal konseling</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="/dbsiswa-form-konselingpribadi" method="POST">
                        @csrf

                        {{-- <input class="form-control" type="hidden" name="siswa_id" value="{{ $siswa->name }}">

                        <input class="form-control" type="hidden" name="gurubk_id" value="{{ $siswa->name }}"> --}}

                        {{-- <input class="form-control" type="hidden" name="walas_id" value="{{ $siswa->name }}"> --}}
                     
                        <div class="form-group col-md-12">
                            <input type="hidden" class="form-control" id="siswa_id" name="siswa_id" value="{{ $siswa->id }}" readonly>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="hidden" class="form-control" id="walas_id" name="walas_id" value="{{ $walas->id }}" readonly>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="hidden" class="form-control" id="gurubk_id" name="gurubk_id" value="{{ $gurubk->id }}" readonly>
                        </div>

                         <input class="form-control" type="hidden" name="status" value="waiting"> 

                        

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
