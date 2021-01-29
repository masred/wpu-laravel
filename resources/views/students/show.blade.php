@extends('layout/main')

@section('title', 'Student Detail')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Student Detail</h1>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->nama }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                  <p class="card-text">{{ $student->jurusan }}</p>
                  <button type="submit" class="btn btn-sm btn-primary">edit</button>
                  <button type="submit" class="btn btn-sm btn-danger">delete</button>
                  <a href="/students" class="card-link">kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection