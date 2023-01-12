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
            <div class="post">
                <h3>Title 1</h3>
                <p>image 1</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec blandit mauris, vel interdum metus.
                    Praesent vel odio sed enim tincidunt consectetur.</p>
                <p>2022-01-10</p>
            </div>
            <hr>
            <div class="post">
                <h3>Title 2</h3>
                <p>image 2</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec blandit mauris, vel interdum metus.
                    Praesent vel odio sed enim tincidunt consectetur.</p>
                <p>2022-01-11</p>
            </div>
            <hr>
            <div class="post">
                <h3>Title 3</h3>
                <p>image 3</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec blandit mauris, vel interdum metus.
                    Praesent vel odio sed enim tincidunt consectetur.</p>
                <p>2022-01-12</p>
            </div>
        </div>
    </div> <!-- end of body row -->
@endsection
