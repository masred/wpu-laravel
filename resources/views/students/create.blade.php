@extends('layout/main')

@section('title', 'Add Data')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form add student data</h1>
            <form method="POST" action="/students">
              @csrf
              <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Enter name" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Enter NRP" value="{{ old('nrp') }}">
                @error('nrp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Enter jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>
@endsection