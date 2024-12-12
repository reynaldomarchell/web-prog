@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" required>

                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required>

                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan">
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}" {{ $mahasiswa->jurusan_id == $jurusan->id ? 'selected' : '' }}>{{ $jurusan->nama_jurusan }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
    </div>
@endsection