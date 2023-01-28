@extends('layout')

@section('content')

<h1>{{ $job['jobtitle'] }}</h1>

<p>
    <small>{{ $job['company'] }}, {{ $job['formattedLocation'] }}</small>
</p>
<p>
    <small>{{ $job['date'] }}</small>
</p>
<p>
    {{ $job['snippet'] }}
</p>


@endsection