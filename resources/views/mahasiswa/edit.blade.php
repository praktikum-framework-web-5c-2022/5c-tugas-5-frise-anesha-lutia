@extends('layouts')
@section('content')
<div class="container mt-5">
    <h1 style="text-align: center">Edit Data Mahasiswa</h1>
    <hr>
    @error(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data gagal diubah, silahkan cek kembali form yang anda isi!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>    
    <div class="form-group">
        <label class="form-label col-sm-2" for="exampleInputEmail1">NPM</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter NPM" name="npm" value="{{ $mahasiswa->npm }}">
        </div>
    </div> 
    <br>
    <div class="form-group">
        <label class="form-label col-sm-2" for="exampleInputEmail1">Nama</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" name="nama" value="{{ $mahasiswa->nama }}">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label class="form-label col-sm-2" for="exampleInputEmail1">Program Studi</label>
        <div class="col-sm-5">
            <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prodi" value="{{ $mahasiswa->prodi }}">
                <option>Teknik Kimia</option>
                <option>Teknik Elektro</option>
                <option>Teknik Mesin</option>
                <option>Teknik Industri</option>
                <option>Teknik Lingkungan</option>
            </select>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label class="form-label col-sm-2" for="exampleInputEmail1">No KTM</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter No KTM" name="no_ktm" value="{{ $mahasiswa->kartu_mahasiswa->no_ktm }}">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label class="form-label col-sm-2" for="exampleInputEmail1">Masa Berlaku Kartu</label>
        <div class="col-sm-5">
            <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="masa_berlaku" value="{{ $mahasiswa->kartu_mahasiswa->masa_berlaku }}">
                <option selected value="Berlaku">Berlaku</option>
                <option value="Habis">Habis</option>
            </select>
        </div>
    </div>
    <br>
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
    </form>
</div>
@endsection