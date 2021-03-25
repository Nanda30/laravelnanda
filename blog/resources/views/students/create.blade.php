
@extends('layout/baru')

@section('title', 'Form Tambah data Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="nama"
                  placeholder="Masukan Nama" name="Nama" value="{{ old('Nama') }}">
                  @error('Nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="NRP">NRP</label>
                  <input type="text" class="form-control @error('NRP') is-invalid @enderror" id="NRP"
                  placeholder="Masukan NRP" name="NRP" value="{{ old('NRP') }}">
                  @error('NRP')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="Email">Email</label>
                  <input type="text" class="form-control @error('Email') is-invalid @enderror" id="Email"
                  placeholder="Masukan Email" name="Email" value="{{ old('Email') }}">
                </div>
                <div class="form-group">
                <label for="jurusan">jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                  placeholder="Masukan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data!</button>

              </form>


        </div>
    </div>
</div


@endsection

