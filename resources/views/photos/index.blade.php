@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1 class="display-3 text-info">GALLERY</h1>
        <Br>
        @foreach($sections as $section)
            <a class="btn btn-outline-info"
               onclick="show_section_photos({{$section->first()->section->section_id}})">
                {{$section->first()->section->section_name}}
            </a>
        @endforeach

        <br><br>

        <div id="showPhotos">

        </div>

        <div id="wrong" style="display: none;">
            wrong....from ajax
        </div>

    </div>


@endsection