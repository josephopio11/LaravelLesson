@extends('layouts.app')


@section('content')

@forelse ($names as $name)
    <h3>The name is {{ $name }}</h3>
@empty
    <h3>There are no names here</h3>
@endforelse

{{ $i = 0 }}

@while ($i < 10)
<h2>{{ $i++ }}</h2>

@endwhile

@endsection
