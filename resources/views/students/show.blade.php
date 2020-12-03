@extends('layout.main')
@extends('layout.sidebar')

@section('title', 'Student Details')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Students Details</h1>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $student->nama }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $student->noreg }}</h6>
          <p class="card-text">{{ $student->tingkatan }}</p>
          <p class="card-text">{{ $student->email }}</p>
          <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
          <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/students" class="card-link">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection