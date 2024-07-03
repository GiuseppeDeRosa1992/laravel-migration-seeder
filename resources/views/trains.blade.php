@extends('layouts.app')

@section('content')
	@foreach ($trains as $train)
		<div class="text-center">
			<p>{{ $train->id }}: Treno</p>
			<p>Nome. {{ $train->name }}</p>
			<p>Stazione di Partenza: {{ $train->departure_station }}</p>
			<p>Stazione di Arrivo: {{ $train->arrival_station }}</p>
			<p>Orario di Partenza: {{ $train->departure_time }}</p>
			<p>Orario di Arrivo: {{ $train->arrival_time }}</p>
			<p>Codice Treno: {{ $train->train_code }}</p>
			<p>Numero Carrozze Totali: {{ $train->number_carriages }}</p>
			<p>In Orario?
				@if ($train->in_time == 0)
					In orario
				@else
					In Ritardo
				@endif
			</p>
		</div>
	@endforeach
@endsection
