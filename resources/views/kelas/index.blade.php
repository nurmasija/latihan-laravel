
@extends('layouts.index')


    @section('content')

<!-- table -->
    <div class="container mt-5">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <p>Data yang dicari = {{ $search }}</p>
    <a href="{{ route('tambah_kelas') }}" class="btn btn-primary">Tambah Data</a>
    <a href="{{ route('kelas') }}" class="btn btn-primary">Refresh</a>
    <table class="table mt-3 border border-5 border-success">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dataKelas as $item)

    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->kelas }}</td>
      <td>
      <a href="{{ route('editkelas',$item->id) }}" class="btn btn-secondary">Edit</a>
      <form action="{{ route('hapuskelas',$item->id) }}" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">Hapus</button>
      </form>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
  {{ $dataKelas->links('vendor.pagination.bootstrap-5') }}
    </div>
    
  @endsection
