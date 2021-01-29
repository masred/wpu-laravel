@extends('layout/main')

@section('title', 'Masred')

@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Students List</h1>
            <a href="/students/create" class="btn btn-sm btn-primary my-2">Add Data</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student->nama }}
                        <a href="/students/{{ $student->id }}"><span  class="badge bg-info">detail</span></a>
                    </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection