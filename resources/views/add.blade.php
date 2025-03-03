@extends('layouts.index')

@section('title','Adding List of Names')

@section('content')
    <h2>Add Names</h2>

    <x-alert />

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
