@extends('layouts')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Daftar Mahasiswa</h1>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>      
            </div>
            @endif
            
            @error(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data gagal ditambahkan, periksa kembali data anda!</strong>
            </div>
            @enderror

            <div class="tambahdata mb-3 d-flex justify-content-end">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-bordered table-hover">
                    <thead>
                        <tr class="align-middle" style="text-align: center">
                            <th rowspan="2">No</th>
                            <th rowspan="2">NPM</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Program Studi</th>
                            <th rowspan="2">No KTM</th>
                            <th rowspan="2">Masa Berlaku</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $index => $mhs)
                        <tr style="text-align: center">
                            <td>{{ $index + $mahasiswas->firstItem()}}</td>
                            <td>{{ $mhs->npm }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->prodi }}</td>
                            <td>{{ $mhs->kartu_mahasiswa->no_ktm ?? '-'}}</td>
                            <td>{{ $mhs->kartu_mahasiswa->masa_berlaku ?? '-' }}</td>
                        <td>
                            <form action="{{ route('mahasiswa.delete',$mhs->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary" href="{{ route('mahasiswa.edit',$mhs->id) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>   
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection