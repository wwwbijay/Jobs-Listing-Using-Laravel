<h1> {{ $heading; }} </h1>


@if (count($jobs) == 0)
    <p>
        No listing found.
    </p>
@endif
@foreach($jobs as $job)

<h3>
    <a href="{{ $job['url'] }}">
        {{ $job['jobtitle'] }}
    </a>
</h3>
<p>
    <small>{{ $job['company'] }}, {{ $job['formattedLocation'] }}</small>
</p>
<p>
    <small>{{ $job['date'] }}</small>
</p>
<p>
    {{ $job['snippet'] }}
</p>
@endforeach