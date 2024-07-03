@extends('layouts.app')

@section('content')
	<div class="row m-0">
		@foreach ($trains as $train)
			<div class="text-center col-3 p-0 mt-1">
				<div class="bg-success mx-1">
					<p>{{ $train->id }}: Treno</p>
					<p>Nome. {{ $train->name }}</p>
					<p>Stazione di Partenza: {{ $train->departure_station }}</p>
					<p>Stazione di Arrivo: {{ $train->arrival_station }}</p>
					<p>Orario di Partenza: {{ date('H:i:s', strtotime($train->departure_time)) }}</p>
					<p>Orario di Arrivo: {{ date('H:i:s', strtotime($train->arrival_time)) }}</p>
					<p>Codice Treno: {{ $train->train_code }}</p>
					<p>Numero Carrozze Totali: {{ $train->number_carriages }}</p>
					<p>In Orario?
						@if ($train->in_time == 0)
							In orario
						@else
							In Ritardo
						@endif
					</p>
					<p>Parte?
						@if ($train->deleted == 0)
							In arrivo
						@else
							Cancellato
						@endif
					</p>
				</div>
			</div>
		@endforeach
	</div>
@endsection
