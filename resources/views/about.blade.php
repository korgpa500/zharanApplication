@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <img src="{{asset('images/logot.png')}}" class="img-fluid">
        <h1 class="textTitleY">ABOUT US</h1>
        <br><br>
        <h4>Zahran Language Schools [Z.L.S]</h4>
        <h4>Opened 1998 accepting students from all schools Upto Senior 1 grade.</h4>
        <h4>First class graduated at 2001.</h4>
        <h4>Zahran Boys School won the Pioneers Competition against all Alexandria Schools on 2002.</h4>
        <h4>Zahran Girls School won it on 2008.</h4>
        <br><br>

        <h1 class="textTitleY">School Planning</h1>


        <div class="tz-gallery">

            <div class="row">

                @for ($x = 1; $x <= 12; $x++)
                    <div class='col-sm-3 col-md-3 col-xs-3'>
                        <a class='lightbox' href='{{asset("images/drwa/$x.jpg")}}'>
                            <img src="{{asset("images/drwa/$x.jpg")}}" alt='Park'>
                        </a>
                    </div>
                @endfor
            </div>

        </div>

    </div>

@endsection