@extends('Layouts.app')
@section('content')

<!-- resources/views/login.blade.php -->
<form method="GET" action="/login"style="background-color: gray;
        color: white;
        text-align: center;
        padding: 20px;
        border-radius: 10px;"class="form-group">
    @csrf
    <label>Email
        <br><input type="email" name="email" required></label>
    
    <label>Password <br><input type="password" name="password" required></label>
    <br>
    <button type="submit" class="btn btn-info">Login</button>
    <br>
    <br>
    <button onclick="location.href='/register';" type="button" class="btn btn-primary btn-lg ">Register Here</button>
</form>

@endsection