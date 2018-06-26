@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1>Notifications</h1>
        <br>
        <h3>Message And Suggestions</h3>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Title</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suggestions as $suggestion)
                <tr>
                    @if($suggestion->read == 0)
                        <td class="animated infinite swing text-danger">New</td>
                    @else
                        <td class="animated infinite pulse text-info">Seen</td>
                    @endif
                    <td>{{date('d-m-Y', strtotime($suggestion->created_at))}}</td>
                    <td>{{$suggestion->title}}</td>
                    <td><a href="/notification/{{$suggestion->id}}/suggestion" class="btn btn-info">Show</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$suggestions->links()}}
        <hr>
        <h3>Register</h3>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($registers as $register)
                <tr>
                    @if($register->read == 0)
                        <td class="animated infinite swing text-danger">New</td>
                    @else
                        <td class="animated infinite pulse text-info">Seen</td>
                    @endif
                    <td>{{date('d-m-Y', strtotime($register->created_at))}}</td>
                    <td>{{$register->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$registers->links()}}
    </div>


@endsection