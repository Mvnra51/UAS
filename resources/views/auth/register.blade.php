@extends('layouts.app')

@section('content')
<h2>Register</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form>
@if ($errors->any())
    <p style="color:red;">{{ $errors->first() }}</p>
@endif
<a href="{{ route('login') }}">Sudah punya akun? Login di sini</a>
@endsection
