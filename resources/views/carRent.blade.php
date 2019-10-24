@extends('layouts.master')

@section('content')
    <div class="container" style="padding-top: 80px; background-image: url('{{ asset('frontend/img/car.jpg')}}')">
        <div class="row">
            <div class="col-lg-5">
                <div class="book-a-car" style="background-color: #ffffff; padding: 15px">
                    <form action="{{ route('bookedCar') }}" method="post">
                        @csrf
                        <!--== Pick Up Location ==-->
                        <div class="pickup-location book-item">
                            <h4 style="color: #9b0a0d">PICK-UP LOCATION:</h4>
                            <select name="pic_up_location" class="custom-select">
                                <option selected>Sylhet</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Rangpur">Rangpur</option>
                            </select>
                        </div>
                        <!--== Pick Up Location ==-->

                        <!--== Pick Up Date ==-->
                        <div class="pick-up-date book-item">
                            <h4 style="color: #9b0a0d">PICK-UP DATE:</h4>
{{--                            <input id="startDate" placeholder="Pick Up Date" />--}}
                            <div class='input-group date' id='datetimepicker1'>
                                <input name="picUpDate" type='text' class="form-control"  />
                                <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>


                        <div class="return-date book-item">
                            <h4 style="color: #9b0a0d">Return DATE:</h4>
                            {{--                            <input id="startDate" placeholder="Pick Up Date" />--}}
                            <div class='input-group date' id='datetimepicker2'>
                                <input name="returnDate" type='text' class="form-control"  />
                                <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
                            </div>

{{--                            <div class="return-car">--}}
{{--                                <h4 >Return DATE:</h4>--}}
{{--                                <input id="endDate" placeholder="Return Date" />--}}
{{--                            </div>--}}
                        </div>
                        <!--== Pick Up Location ==-->

                        <!--== Car Choose ==-->
                        <div class="choose-car-type book-item">
                            <h4 style="color: #9b0a0d">CHOOSE CAR TYPE:</h4>
                            <select name="carType" class="custom-select">
                                <option selected>Select</option>
                                <option value="Noha">Noha (7 sit)</option>
                                <option value="Car">Car(3 sit)</option>
                                <option value="Hi Ace ">Hi Ace (12 sit)</option>
                                <option value="Mini Bus">Mini Bus (30-40sit)</option>
                                <option value="Other">Other</option>
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
