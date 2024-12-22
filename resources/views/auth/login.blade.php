@extends('layouts.app')

@section('content')
<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
@if ($errors->any())
    <p style="color:red;">{{ $errors->first('email') }}</p>
@endif
<a href="{{ route('register') }}">Belum punya akun? Daftar di sini</a>
@endsection
