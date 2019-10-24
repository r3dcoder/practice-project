@extends('layouts.admin')


@section('title')

Car Rent Request
@endsection


@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
Car            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Pic Up Location</th>
                            <th>Pic Up date</th>
                            <th>return Date</th>

                            <th>Car Type</th>
                            <th>Mobile Number</th>


                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->pic_up_location}}</td>
                                <td>{{ $car->pic_up_date}}</td>
                                <td>{{ $car->return_date}}</td>
                                <td>{{ $car->car_type}}</td>
                                <td>{{ $car->mobile_number}}</td>


                                <td>{{ $car->created_at }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
