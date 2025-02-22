@extends('layouts.index')

@section('title','Adding list of names')

@section('content')
<h2>Add names</h2>

<form action="{{ route('store.name') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection