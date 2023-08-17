@extends('main')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Laravel Project news site</h1>
                <p class="lead">This is a site to show news for my laravel project for my class Backend Web</p>
            </div> <!-- end of jumbotron -->
        </div>
    </div> <!-- end of header row -->

    <div class="row">
        <div class="col-md-10 offset-md-1">
            @foreach($news as $key => $data)
                <div class="post">
                    <h3>{{$data->title}}</h3>
                    <p>temp</p>
                    <p>{{$data->content}}</p>
                    <p>{{$data->date}}</p>
                </div>
                <hr>
            @endforeach
        </div>
    </div> <!-- end of body row -->
@endsection
