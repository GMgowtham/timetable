@extends('Layouts.app')
@section('content')
<!-- resources/views/timetable.blade.php -->
<form method="POST" action="/manage-timetable">
    @csrf
    <label>Select Class:
        <select name="class">
            @foreach(range(1,7) as $class)
                <option value="{{ $class }}">Class {{ $class }}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Manage</button>
    <button onclick="location.href='/logout';" type="button">Logout</button>
</form>

<form method="POST" action="/create-timetable">
    @csrf
    <label>Enter Class: <input type="text" name="class" required></label>
    <label>Number of Days: <input type="number" name="days" required></label>
    <label>Number of Periods: <input type="number" name="periods" required></label>
    <label>Time (HH:MM): <input type="time" name="time" required></label>
    <label>Duration of Each Class (in minutes): <input type="number" name="duration" required></label>
    <label>Number of Breaks (1 to 3): 
        <select name="breaks">
            @foreach(range(1,3) as $break)
                <option value="{{ $break }}">{{ $break }}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Submit</button>
</form>
@endsection