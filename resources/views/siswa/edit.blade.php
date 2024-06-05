@extends('layouts.index')

@section('content')

<div class="container">
    <h2>Edit Siswa</h2>
    <form action="{{ route('siswa_edit') }}" method="post">
        @csrf
    <div class="mb-3">
        <label class="form-label">Siswa</label>
        <input type="text"  name="siswa" value="{{ $dataSiswa->siswa  }}"  class="form-control" placeholder="Masukan Siswa" >
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" value="{{ $dataSiswa->siswa }}"  class="form-control" placeholder="Masukan Alamat" >
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    
    </form>
    
</div>

@endsection