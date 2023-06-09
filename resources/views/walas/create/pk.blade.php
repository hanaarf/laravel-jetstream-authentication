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

                        <form action="{{ route('peta-kerawanan.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="walas_id">Wali Kelas</label>
                                <input type="text" id="walas_id" class="form-control" value="{{ $walas->nama }}" readonly>
                                <input type="hidden" name="walas_id" value="{{ $walas->id }}">
                            </div>

                            <div class="form-group">
                                <label for="siswa_id">Siswa</label>
                                <select name="siswa_id" id="siswa_id" class="form-control">
                                    @foreach ($siswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kerawanan">Jenis Kerawanan</label>
                                <select name="jenis_kerawanan[]" id="jenis_kerawanan" class="form-control" multiple>
                                    <option value="Kerawanan 1">Kerawanan 1</option>
                                    <option value="Kerawanan 2">Kerawanan 2</option>
                                    <option value="Kerawanan 3">Kerawanan 3</option>
                                    <!-- Tambahkan opsi lainnya jika diperlukan -->
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
