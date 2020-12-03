@extends('layout.main')
@extends('layout.sidebar')

@section('title', 'Student Data')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Student Lists</h1>
      <a href="/students/create" class="btn btn-primary my-3"> Add Data</a>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif 
      <ul class="list-group">
        @foreach( $students as $student )
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
          <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>  
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection