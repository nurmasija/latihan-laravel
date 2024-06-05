@extends('layouts.index')

@section('content')

<div class="container">
    <h2>Tambah Kelas</h2>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <div class="text-danger">
        <li>{{ $error  }}</li>
        </div>
        
        @endforeach
    </ul>
    @endif
    <form action="{{ route('aksi_tambah') }}" method="post">
        @csrf
    <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text"  name="kelas" class="form-control" placeholder="Masukan Kelas" >
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    
    </form>
    
</div>

@endsection