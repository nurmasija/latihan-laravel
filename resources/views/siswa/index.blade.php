
@extends('layouts.index')

@section('content')

ini content coba coba

<br>
halaman siswa
<a href="/kelas">halaman kelas</a>
<br>

<!-- table -->
<div class="container mt-5">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <p>Data yang dicari = {{ $search }}</p>
    
    <a href="{{ route('tambah_siswa') }}" class="btn btn-primary">Tambah Data</a>
    <a href="{{ route('siswa') }}" class="btn btn-primary">Refresh</a>
    <table class="table mt-3 border border-5 border-success">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dataSiswa as $item)

    <tr>
      <th scope="row"> {{ $loop->iteration  }} </th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->alamat }}</td>
      <td>
      <a href="{{ route('editsiswa',$item->id) }}" class="btn btn-secondary">Edit</a>
      <form action="{{ route('hapussiswa',$item->id) }}" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">Hapus</button>
      </form>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
{{ $dataSiswa->links('vendor.pagination.bootstrap-5') }}
    </div>


@endsection