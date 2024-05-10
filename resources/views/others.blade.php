@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($otherTrains as $train)
                        <li class="list-group-item">
                            <h3>{{ $train->Train_Code }}</h3>
                            <p> {{ $train->Company }}</p>
                            <p>{{ $train->Departure_station }}</p>
                            <p> {{ $train->Arrival_station }}</p>
                            <p>{{ $train->Departure_time }}</p>
                            <p>{{ $train->Arrival_time }}</p>
                            <p>{{ $train->Carriages_number }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <button class="btn btn-secondary py-2 "><a class="text-decoration-none text-black" href="/">Back today
                trains</a></button>
    </div>
@endsection