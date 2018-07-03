@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-auto">
                <img src="{{asset('images/logot.png')}}" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card cardY">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-lg-8">
                                Welcome Back {{Auth::user()->name}}
                                <br>

                                You are logged in as <b>{{\App\User::find(Auth::user()->user_id)->type->type_name}}</b>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <button class="btn btn-outline-light" onclick="addNewPost()">Add New Post</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            @foreach($posts as $post)
                <div class="card bg-transparent" style="margin-bottom: 5px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{$post->post_title}}</h2>
                            <h6><b>By :</b> {{$post->user->name}}</h6>
                            <h6>
                                <span class="youssryicon youssryicon-calendar"></span>
                                {{date('d-m-Y', strtotime($post->created_at))}}
                                <span class="youssryicon youssryicon-time"></span>
                                {{date('h:i:s', strtotime($post->created_at))}}
                            </h6>
                        </div>
                        <div class="card-image-top">
                            <img src="{{Storage::url($post->post_image)}}" alt='Park' class="img-fluid"
                                 style="border-radius: 8px;">
                        </div>
                        <br>
                        <div class="card-text">
                            <h5>{{$post->post_body}}</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary youssryicon youssryicon-like"
                                        onclick="AddLike({{$post->post_id}})" id="btnLike{{$post->post_id}}"
                                        @if(\App\Like::select('user_id')->where('user_id' ,\Illuminate\Support\Facades\Auth::user()->user_id)->where('post_id' ,$post->post_id)->first() != null)
                                        disabled
                                        @endif>
                                    @if($post->likes->count() != 0)
                                        {{$post->likes->count()}}
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        </div>

    </div>
    <!-- Modal Add New Post -->
    <div class="modal fade" id="AddPost" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-info">Add New Post.....</h4>
                </div>
                <div class="modal-body">
                    <form action="/posts" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="post_title" placeholder="Post Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="post_body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="post_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Select Section</label>
                            <select name="section_id" class="form-control">
                                @foreach(\App\Section::where('section_name' ,'!=' ,'Admin')->get() as $section)
                                    <option value="{{$section->section_id}}">{{$section->section_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Add" class="btn btn-outline-primary form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btnYoussry" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Error-->
@endsection
