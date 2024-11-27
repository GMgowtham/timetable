@extends('Layouts.app')
@section('content')
<form method="POST" action="/timetable">
    @csrf
    <label for="class">Select Class:</label>
    <select name="class" required>
        @foreach(range(1, 7) as $class)
            <option value="{{ $class }}">Class {{ $class }}</option>
        @endforeach
    </select>
    <button type="submit">Manage</button>
    <button type="button" onclick="window.location='/logout'">Logout</button>
</form>
<hr>
<form method="POST" action="/create-timetable">
    @csrf
    <label>Class:</label>
    <input type="text" name="class" required>
    <label>Number of Days:</label>
    <input type="number" name="days" required>
    <label>Number of Periods:</label>
    <input type="number" name="periods" required>
    <label>Time:</label>
    <input type="time" name="time" required>
    <label>Duration of Each Class (in minutes):</label>
    <input type="number" name="duration" required>
    <label>Number of Breaks:</label>
    <select name="breaks" required>
        @foreach(range(1, 3) as $break)
            <option value="{{ $break }}">{{ $break }}</option>
        @endforeach
    </select>
    <button type="submit">Submit</button>
</form>
@endsection