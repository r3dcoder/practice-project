@extends('layouts.master')

@section('content')

    <div class="container" style="padding-top: 100px; background-image: url('{{ asset('frontend/img/room.jpg')}}')">
        <div class="row">
            <div class="col-lg-5">
                <div class="book-a-room" style="background-color: #ffffff; padding: 15px">
                    <form action="{{ route('roomBooked') }}" method="post">
                    @csrf

                        <!--== Pick Up Date ==-->
                        <div class="pick-up-date book-item">
                            <h4 style="color: #9b0a0d">PICK-UP DATE:</h4>
                            <div class='input-group date' id='datetimepicker1'>
                                <input name="picUpDate" type='date' class="form-control"  />
                                <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>


                        <div class="return-date book-item">
                            <h4 style="color: #9b0a0d">Return DATE:</h4>
                            <div class='input-group date' id='datetimepicker2'>
                                <input name="returnDate" type='date' class="form-control"  />
                                <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
                            </div>

                        </div>
                        <!--== Pick Up Location ==-->

                        <!--== Car Choose ==-->
                        <div class="choose-car-type book-item">
                            <h4 style="color: #9b0a0d">CHOOSE ROOM:</h4>
                            <select name="roomType" class="custom-select">
                                <option selected>Select</option>
                                <option value="1">1 </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">Other</option>
                            </select>
                        </div>
                        <div class="choose-car-type mobile">
                            <h4  style="color: #9b0a0d">Mobile Number:</h4>
                            <input name="mobile" type="number" class="form-control">

                        </div>
                        <!--== Car Choose ==-->

                        <div class="btn btn-outline-primary" style="padding: 8px">
                            <button class="book-now-btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
