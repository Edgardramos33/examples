@extends('layouts.index')

@section('title', 'Names List')

@section('content')
    <h2>Names List</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($names as $index => $name)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $name->first_name }}</td>
                    <td>{{ $name->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
