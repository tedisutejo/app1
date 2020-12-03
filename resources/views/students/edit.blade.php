@extends('layout.main')
@extends('layout.sidebar')

@section('title', 'Edit Student Data')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Edit Student Data</h1>
      <form method="POST" action="/students/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" 
          id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
            @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="noreg">No Registration</label>
            <input type="text" class="form-control @error('noreg') is-invalid @enderror" 
            id="noreg" placeholder="Masukkan Noreg" name="noreg" value="{{$student->noreg}}">
            @error('noreg') <div class="invalid-feedback">{{ $message }}</div>@enderror  
        </div>
        <div class="form-group">
            <label for="tingkatan">Tingkatan Sabuk</label>
            <input type="text" class="form-control @error('tingkatan') is-invalid @enderror" 
            id="tingkatan" placeholder="Masukkan Tingkatan" name="tingkatan" value="{{$student->tingkatan}}">
            @error('tingkatan') <div class="invalid-feedback">{{ $message }}</div>@enderror  
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" 
            id="email" placeholder="Masukkan Email" name="email" value="{{$student->email}}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
  </div>
</div>
@endsection