@extends('layouts.admin')


@section('title')

Room Booking@endsection


@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light"> Room </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Pic Up date</th>
                            <th>return Date</th>

                            <th>Room Number</th>
                            <th>Mobile Number</th>


                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->pic_up_date}}</td>
                                <td>{{ $room->return_date}}</td>
                                <td>{{ $room->room_number}}</td>
                                <td>{{ $room->mobile_number}}</td>


                                <td>{{ $room->created_at }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
