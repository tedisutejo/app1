@extends('layout.main')
@extends('layout.sidebar')

@section('title', 'Create New Student Data')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="h3 mb-3 font-weight-normal">Create New Student Data</h1>
      <form method="POST" action="/students">
        @csrf
        <div class="form-group">
          <label for="nama" class="sr-only">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" 
          id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
            @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="noreg" class="sr-only">No Registration</label>
            <input type="text" class="form-control @error('noreg') is-invalid @enderror" 
            id="noreg" placeholder="Masukkan Noreg" name="noreg" value="{{old('noreg')}}">
            @error('noreg') <div class="invalid-feedback">{{ $message }}</div>@enderror  
        </div>
        <div class="form-group">
            <label for="tingkatan" class="sr-only">Tingkatan Sabuk</label>
            <input type="text" class="form-control @error('tingkatan') is-invalid @enderror" 
            id="tingkatan" placeholder="Masukkan Tingkatan" name="tingkatan" value="{{old('tingkatan')}}">
            @error('tingkatan') <div class="invalid-feedback">{{ $message }}</div>@enderror  
        </div>
        <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" 
            id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection