@extends('layouts.index')

@section('title, Homepage')

@section('content')
<header>
    @include('partials.navbar')
</header>
    <div class="container">
        <h2>This is the homepage</h2>
        <p>Hello this is the homepage</p>

        <button>
            <a href="{{ route('add') }}">Add name</a>
        </button>
        <button>
            <a href="{{ route('name') }}">See names</a>
        </button>
    </div>
@endsection