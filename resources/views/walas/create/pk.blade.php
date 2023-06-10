<!-- resources/views/peta_kerawanan/create.blade.php -->

@extends('layouts.db')

@section('contentadmin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Peta Kerawanan</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('kerawanan.store') }}" method="POST">
                            @csrf
                        
                            {{-- <label for="walas_id">walas</label> --}}
                            <input class="form-control" type="hidden" name="walas_id" value="{{ $walas->id }}">
                        
                            {{-- <div class="form-group col-md-12">
                                <label for="siswa_id">Siswa</label>
                                <select name="siswa_id" id="siswa_id" class="form-control">
                                     @foreach ($siswa as $siswaItem)
                                    <option value="{{ $siswaItem->id }}">{{ $siswaItem->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}


                            <div class="form-group col-md-12">
                                <label>siswa</label>
                                <select name="siswa_id" class="form-control default-select" id="maapel">
                                    @foreach ($siswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label>jenis rawan id</label>
                                <select name="jenisrawan_id" class="form-control default-select" id="maapel">
                                    @foreach ($jenisKerawanan as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            {{-- <div class="form-group col-md-12">
                                <label for="jeniskerawanan_id">Jenis Kerawanan</label>
                                <select name="jenisrawan_id[]" id="jenisrawan_id" class="form-control" multiple>
                                    @foreach ($jenisKerawanan as $jenis)
                                    <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                        
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
