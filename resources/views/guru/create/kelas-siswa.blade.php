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

                    <form action="" method="POST">
                        @csrf
                    
                        <div class="form-group col-md-12">
                            <label>siswa</label>
                            <select name="siswa_id" class="form-control default-select" id="siswa_id">
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    

                        <div class="form-group col-md-12">
                            <label>jenis rawan id</label>
                            <select name="jenisrawan_id" class="form-control default-select" id="maapel">
                                @foreach ($jenisRawan as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
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