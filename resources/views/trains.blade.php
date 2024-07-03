@extends('layouts.app')

@section('content')
	<ul>
		@foreach ($trains as $train)
			<li>
				{{ $train->id }}: {{ $train->name }} {{ $train->departure_station }} {{ $train->arrival_station }}
				{{ $train->departure_time }}
			</li>
		@endforeach
	</ul>
@endsection
