@extends('layouts.index')

@section('title','Edit Name')

@section('content')
    <h2>Edit Name</h2>

    <form action="{{ route('update.name', $name->id) }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ $name->first_name }}" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ $name->last_name }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
