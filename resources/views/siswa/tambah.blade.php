@extends('layouts.index')

@section('content')

<div class="container">
    <h2>Tambah Siswa</h2>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <div class="text-danger">
        <li>{{ $error  }}</li>
        </div>
        
        @endforeach
    </ul>
    @endif
    <form action="{{ route('siswa_tambah') }}" method="post">
        @csrf
    <div class="mb-3">
        <label class="form-label">Siswa</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Siswa" >
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" >
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    
</div>

@endsection