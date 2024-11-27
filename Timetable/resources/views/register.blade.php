@extends('Layouts.app')
@section('content')
<!-- resources/views/register.blade.php -->
<div class="form-group" class="a" style="background-color: gray;
        color: white;
        text-align: center;
        padding: 20px;
        border-radius: 10px;">
<form method="POST" action="/register" style="margin-top: 50px;">
    @csrf
    <label>Name: <input type="text" name="name" class="form-control"  required></label>
    <br>
    <label>Email: <input type="email" name="email" class="form-control"required></label>
    <br>
    <label>Phone Number: <input type="text" name="phone" class="form-control"required></label>
    <br>
    <label>Password: <input type="password" name="password"class="form-control" required></label>
    <br>
    <label>Confirm Password: <input type="password" name="confirm_password" class="form-control"required></label>
    <br>
    <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
    
</form>
</div>

<a href="/login" class="btn btn-info" style="margin-top: 30px;">Login Here</a>
@endsection