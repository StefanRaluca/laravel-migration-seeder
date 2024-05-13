@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($trains as $train)
                        <li class="list-group-item">
                            <h3>{{ $train->train_Code }}</h3>
                            <p> {{ $train->company }}</p>
                            <p>{{ $train->departure_station }}</p>
                            <p> {{ $train->arrival_station }}</p>
                            <p>{{ $train->departure_time }}</p>
                            <p>{{ $train->arrival_time }}</p>
                            <p>{{ $train->carriages_number }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button class="btn btn-secondary py-2 "><a class="text-decoration-none text-black" href="/others">See All
                Trains</a></button>
    </div>
@endsection
