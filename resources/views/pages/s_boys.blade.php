@extends('layouts.app')
@section('content')

    <div class="text-center"><img src="{{asset('images/sboys.jpg')}}" class="img-fluid"></div>

    <div class="container">

        <!-- about -->
        <div id="aboutSec">
            <div class="containerY text-center">
                <h2 class="textTitleY">ZAHRAN SECONDARY SCHOOL BOYS</h2>
                <h2 class="textTitleY">ABOUT</h2>
                <h4>The middle stage in Mohammed Zahran School is the stage of personal, intellectual, skillful and informative formation of the student or student. This stage is considered the stage of the national formation of the student and his belonging to the local community in particular and the international community in general</h4>
                <br>
                <h4>Middle Stage</h4>
                <h4>A message of love and respect for each student</h4>
                <h4>Think and learn and grow up</h4>
                <h4>Her sunshine is shining everywhere</h4>
                <h4>New life and hope in all her students</h4>

            </div>
        </div>
        <!-- end about -->

        <!-- mission -->
        <div id="newSec">
            <div class="container text-center">
                <h2 class="textTitleY">MISSION AND VISION</h2>
                <h2>Vision</h2>
                <h4>Raising a creative for student, intellectually conscious, interacting with his community</h4>
                <h2>Mission</h2>
                <h4>
                    <ol>
                        <li>Student development Comprehensive development from all aspects of growth</li>
                        <li>Developing the talents of our Students through participation in competitions and various activities</li>
                        <li>Continuing training for the teacher in order to achieve comprehensive and sustainable development</li>
                        <li>Involve parents with students in activities</li>
                        <li>Students visiting the surrounding environment</li>
                        <li>Training both the Students and the teacher on modern technology</li>
                    </ol>
                </h4>
            </div>
        </div>
        <!--end mission -->

        <!-- quality -->
        <div id="qualitySec">
            <div class="container text-center">
                <h2 class="textTitleY">QUALITY</h2>
                <br>
                <h4>Quality Certificate in Education</h4>
                <h4>Renewal of the certificate of accreditation and quality in education 2016</h4>
                <h4>The first place in the music education competition for 14 consecutive years</h4>
                <h4>The first place and the police shield for the competition to develop the child's traffic awareness</h4>
                <h4>First place for the kindergarten competition for 6 years</h4>
            </div>
        </div>
        <!-- end quality -->


        <!-- Contact -->
        <div id="contact" class="text-center container-fluid">
            <h1 class="textTitleY">CONTACT US</h1>
            <br><br>
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
                    <img src="{{asset('images/logot.png')}}" class="img-fluid">
                    <h3>Tel : 03 4269675</h3>
                    <h3>Email : zahran.middleboys@windowslive.com</h3>
                </div>

            </div>
        </div>
    </div>

@endsection