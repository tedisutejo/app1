<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
      <form class="form-signin" method="POST" action="/registration">
        @csrf
      <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
      <label for="name" class="sr-only">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" 
      id="name" placeholder="Masukkan Nama" name="name" value="{{old('name')}}">
        @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
    
      <label for="email" class="sr-only">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" 
      id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
        @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror

      <label for="password" class="sr-only">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" 
      id="password" placeholder="Masukkan Password" name="password">
        @error('password') <div class="invalid-feedback">{{ $message }}</div>@enderror

      <label for="password" class="sr-only">Confirmation Password</label>
      <input type="password" class="form-control @error('password_confrimation') is-invalid @enderror" 
      id="password_confirmation" placeholder="Ketik Ulang Password" name="password_confirmation">
  
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registration</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    <a href="{{ url('/login') }}">Back To Login</a>
    </form>
  </body>
</html>