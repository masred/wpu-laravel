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
                  <p class="card-text">{{ $student->email }}</p>
                  <p class="card-text">{{ $student->jurusan }}</p>
                  <a href="{{ $student->id }}/edit" class="btn btn-primary">edit</a>
                  <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                  </form>
                  <a href="/students" class="card-link">kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection