@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-12">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                @foreach ($jurusans as $jurusan)
                <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@endsection