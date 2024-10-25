@extends('layout.master')


@section('kontenberita')
<div class="row">
  <div class="col-12">
    <h1>Daftar Mahasiswa</h1>
    <h2>Jurusan : {{ $jurusan }} </h2>
    <h3>Nilai : {{ $nilai }}</h3>
    @if( ($nilai>=0) and ($nilai<50))
      <div class="alert alert-danger d-inline-block">Maaf, anda tidak lulus</div>
    @elseif( ($nilai>=50) and ($nilai<=100))
      <div class="alert alert-success d-inline-block">Selamat, anda lulus</div>
    @else
      <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endif
    
    @for ($i =0; $i<=10; $i++)
    <div class="alert alert-success d-inline-block">Selamat, {{ $i }}</div>
    </br>
    @endfor
    
    </br>
    {{ date('d-M-Y') }}
    
    {{-- @if ()
    
    @elseif ()
    
    @else
      
    @endif --}}
    
    <ul>
        @foreach ($mahasiswa as $mhs )
            <li> {{ $mhs }} </li>
        @endforeach
    
        @forelse ($mahasiswa as $nama)
          <li>{{ $nama }}</li>
        @empty
          <li>Data mahasiswa tidak ada</li>
        @endforelse
    </ul>
  </div>
</div>
@endsection