@extends('layout.main')
@extends('layout.sidebar')

@section('title', 'Dashboard')

@section('container')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
    @endif 
    <div class="title m-b-md">
        HELLO TAEKWONDO
    </div>
    @if (isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->email }}</strong>
            <br/>
        </div>
    @endif  
</div>
@endsection