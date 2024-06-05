@extends('layouts.index')

@section('content')

<div class="container">
    <h2>Edit Kelas</h2>
    <form action="{{ route('aksi_edit',$dataKelas->id) }}" method="post">
        @csrf
    <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text"  name="kelas" value="{{ $dataKelas->kelas  }}"  class="form-control" placeholder="Masukan Kelas" >
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    
    </form>
    
</div>

@endsection