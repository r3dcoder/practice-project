@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{asset('frontend/img/sylhet/jaflong.jpg')}}" alt="Jaflong Sylhet" style="background-size: cover">
                        <div class="carousel-caption">
                            <h3>Jaflong</h3>
                            <p>Cool Water</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('frontend/img/sylhet/tea-garden.jpg')}}" alt="Chicago" style="width:200%; height: 700px;">
                        <div class="carousel-caption">
                            <h3>Tea garden</h3>
                            <p>One of the oldest tea graden in Bangladesh!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend/img/sylhet/lalakhal.jpg')}}" alt="Chicago" style="width:100%; height: 700px;">
                        <div class="carousel-caption">
                            <h3>Lala Khal</h3>
                            <p>The sky-blue color water!</p>
                        </div>
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>



@endsection
