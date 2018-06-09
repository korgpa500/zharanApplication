<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name' ,'Z.L.S')}}</title>

    <!--script -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/myJs.js')}}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- icon -->
    <link rel="icon" href="{{asset('images/logot.png')}}">
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top myNavBar">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                <li><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
            @else
                <li><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link active" href="{{ route('register') }}">Register</a></li>
                @endauth
            @endif
        </ul>
    </div>
</nav>
<br><br>
<!-- carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/111.JPG')}}" alt="First slide">
            <div class="carousel-caption">
                <img src="{{asset('images/logot.png')}}" style="opacity: 0.3;width:50%;height: 50%;">
                <h1>Zahran Language Schools</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/222.JPG')}}" alt="Second slide">
            <div class="carousel-caption">
                <img src="{{asset('images/logot.png')}}" style="opacity: 0.3;width:50%;height: 50%;">
                <h1>Zahran Language Schools</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/333.JPG')}}" alt="Third slide">
            <div class="carousel-caption">
                <img src="{{asset('images/logot.png')}}" style="opacity: 0.3;width:50%;height: 50%;">
                <h1>Zahran Language Schools</h1>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Sections-->
<div id="Sections" class="text-center container">
    <h1 class="textTitleY">ZAHRAN LANGUAGE SCHOOLS</h1>
    <div class="row">
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="kg">K.G</button>
            </a>
        </div>
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="ps">Primary Stage</button>
            </a>
        </div>
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="mg">Middle Girls</button>
            </a>
        </div>
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="mb">Middle Boys</button>
            </a>
        </div>
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="sg">Secondary Girls</button>
            </a>
        </div>
        <div class="col-sm-4 col-lg-2 mx-auto">
            <a href="#">
                <button class="btnStage animated infinite pulse" id="sb">Secondary Boys</button>
            </a>
        </div>
    </div>
</div>
<!-- End Sections-->

<!-- Bout US -->
<div id="aboutus" class="text-center containerY">
    <h1 class="textTitleY">About School</h1>
    <h4>Zahran Language Schools [Z.L.S]</h4>
    <h4>Opened 1998 accepting students from all schools Upto Senior 1 grade.</h4>
    <h4>First class graduated at 2001.</h4>
    <h4>Zahran Boys School won the Pioneers Competition against all Alexandria Schools on 2002.</h4>
    <h4>Zahran Girls School won it on 2008.</h4>
    <h4><a href="#">More</a></h4>
</div>
<!-- End About Us -->

<!-- TOUR -->
<div id="tour">
    <div class="text-center container">
        <h1 class="textTitleY">MISSION AND VISION</h1>
        <br>
        <h2 class="textTitleY">OUR VISION</h2>
        <h4>We aspire to be pioneers in distinguish quality education and develop innovative student who are capable of
            meeting the requirements of the age under the umbrella of effective community service</h4>
        <br>
        <h2 class="textTitleY">OUR MISSION</h2>
        <h4>Providing an attractive education & technological environment to build a good citizen with mature and sound
            personality through :
            <br>
            <ol>
                <li>Implementing the latest technology and most up-to-date education programs.</li>
                <li>Updating the knowledge and skills of teaching and support staffs through ongoing training and
                    professional development programs.
                </li>
                <li>Encouraging teamwork and self-learning skills.</li>
                <li>Activating interaction and cooperation between MCILS and parents and civil community institutions.
                </li>
                <li>Developing positive and ethical values and consolidating the concept of citizenship and
                    commitment.
                </li>
                <li>Providing good medical ,psychological and social care for all students, teacher and support staff.
                </li>
                <li>Giving due care to all curricular and extracurricular activities to detect talents, encourage and
                    boost innovations.
                </li>
            </ol>
        </h4>

    </div>
</div>
<!-- END TOUR -->

<!-- Contact -->
<div id="contact" class="text-center container-fluid">
    <h1 class="textTitleY">CONTACT US</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>We will be happy with your suggestions and opinions</h5>
            <h5>Pleases fill This Fields</h5>
            <form action="/suggestions" method="post">
                @csrf
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="sender_name" placeholder="Your Name" id="youssry"
                           class="form-control{{ $errors->has('sender_name') ? ' is-invalid' : '' }}"
                           value="{{old('sender_name')}}" required>
                </div>
                <div class="form-group">
                    <label>E-mail :</label>
                    <input type="text" name="sender_email" placeholder="Your E-mail" id="youssry"
                           class="form-control{{ $errors->has('sender_email') ? ' is-invalid' : '' }}"
                           value="{{old('sender_email')}}" required>
                </div>
                <div class="form-group">
                    <label>Message :</label>
                    <textarea class="form-control textareaY{{ $errors->has('sender_message') ? ' is-invalid' : '' }}"
                              rows="5" placeholder="Your Message......"
                              name="sender_message">{{old('sender_message')}}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send" class="btn btn-info btnYoussry">
                </div>
            </form>
            <h5>You can contact with us in</h5>
            <h5><b>FAX : 03 - 4249620</b></h5>
            <h5><b>FAX : 03 - 4249620</b></h5>
            <h5><b>Email : zahranschools1998@yahoo.com</b></h5>
            <a href="https://www.facebook.com/ZAHRAN.SCHOOLS"><i class="fa fa-facebook-square"
                                                                 style="font-size:48px;"></i></a>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <!-- Add Google Maps -->
            <div id="googleMap"></div>
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(31.2136642, 29.9458012);
                    var mapProp = {
                        center: myCenter,
                        zoom: 18,
                        scrollwheel: false,
                        draggable: false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    var marker = new google.maps.Marker({position: myCenter});
                    marker.setMap(map);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA969mxX2sK9WNAP5BSxNkP7IQLsuO5p4Q&callback=myMap"></script>
            <!-- End Google Maps -->
        </div>
    </div>
    <br><br>
</div>
<!-- End Contact -->

@if($errors)
    <!-- Modal Error Message-->
    <div class="modal fade" id="MsgError" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Warning......</h4>
                </div>
                <div class="modal-body">
                    <label class="text-danger active textWarning">
                        @foreach($errors->all() as $error)
                            <script type='text/javascript'>
                                $(document).ready(function () {
                                    $('#MsgError').modal('show');
                                });
                            </script>

                            {{$error}} <br>
                        @endforeach
                    </label>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-danger btnYoussry" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Error-->
@endif

@if(session()->has('message'))
    <!-- Modal Sent Message-->
    <div class="modal fade" id="MsgSent" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-info">Success.....</h4>
                </div>
                <div class="modal-body">
                    <label class="text-info active textWarning">
                            <script type='text/javascript'>
                                $(document).ready(function () {
                                    $('#MsgSent').modal('show');
                                });
                            </script>
                            Thank you,your message has ben sent........
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btnYoussry" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Error-->

@endif


</body>
</html>
