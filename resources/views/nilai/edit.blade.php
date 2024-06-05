@extends('layouts.index')

@section('content')

<div class="container">
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <div class="text-danger">
        <li>{{ $error  }}</li>
        </div>
        
        @endforeach
    </ul>
    @endif


    @if (Session::has('validasi_nilai'))
    <div class="alert alert-danger">{{

        Session::get('validasi_nilai')
    }}
    </div>
    @endif
    <h4>Edit Nilai</h4>
    <form action="{{ route('nilai_aksi_edit',$nilai->id) }}" method="post">
        @csrf
        <div class="mb-3">
    <label for="siswa">Siswa</label>
    <select class="form-select"  name="siswa_id">
        <option value="">Pilih Siswa</option>
        @foreach($dataSiswa as $siswa)
            <option 
            @if ($siswa->id==$nilai->siswa_id) 
            selected
            @endif

            value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
        
        @endforeach
    </select>
    </div>
    <div class="mb-3">
        <label for="nilai">Nilai</label>
        <input type="text"  value="{{ $nilai->nilai}}"  class="form-control"  name="nilai">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    
</div>

@endsection