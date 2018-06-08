@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="text-center display-4">Users</div>
        <br><br>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <table class="table table-hover table-responsive-lg">
                    <thead class="table-success">
                    <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Type</th>
                        <th>User Section</th>
                        <th>User Mobile</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                        <tbody>
                        <tr>
                            <td>{{$user->user_id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type->type_name}}</td>
                            <td>{{$user->section->section_name}}</td>
                            <td>{{$user->mobile}}</td>
                            <td><a href="/users/{{$user->user_id}}">Edit</a></td>
                            <td><a href="/users/{{$user->user_id}}/delete" class="text-danger">Delete</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-md-4 jumbotron">
                <div class="display-4 text-center">Add New User</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile"
                               class="col-md-4 col-form-label text-md-right">{{ __('Mobile Phone') }}</label>

                        <div class="col-md-6">
                            <input id="mobile" type="text"
                                   class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                                   name="mobile" value="{{ old('mobile') }}" required>

                            @if ($errors->has('mobile'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type"
                               class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>
                        <div class="col-md-6">
                            <select name="type_id" id="type"
                                    class="form-control{{ $errors->has('type_id') ? ' is-invalid' : '' }}">
                                <option value=""></option>
                                @foreach(\App\Type::get() as $type)
                                    <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('type_id'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="section"
                               class="col-md-4 col-form-label text-md-right">{{ __('Account Section') }}</label>
                        <div class="col-md-6">
                            <select name="section_id" id="section"
                                    class="form-control{{ $errors->has('section_id') ? ' is-invalid' : '' }}">
                                <option value=""></option>
                                @foreach(\App\Section::get() as $section)
                                    <option value="{{$section->section_id}}">{{$section->section_name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('type_id'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('section_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection