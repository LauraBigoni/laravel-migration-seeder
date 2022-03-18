@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Ecco i treni in ritardo:</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">COMPANY</th>
                            <th scope="col">DEPARTURE STATION</th>
                            <th scope="col">ARRIVAL STATION</th>
                            <th scope="col">DEPARTURE TIME</th>
                            <th scope="col">ARRIVAL TIME</th>
                            <th scope="col">CODE</th>
                            <th scope="col">CARRIAGES</th>
                            <th scope="col">IN TIME</th>
                            <th scope="col">CANCELED</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->company_name }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->code_number }}</td>
                                <td>{{ $train->carriages }}</td>
                                <td>{{ $train->in_time ? 'in time' : 'delayed'}} </td>
                                <td>{{ $train->canceled ? 'yes' : 'no' }}</td>
                                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
