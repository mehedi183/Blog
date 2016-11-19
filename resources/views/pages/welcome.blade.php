@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p class="lead">I am trying to make a new blog with laravel framework. I am totaly new to Laravel. I have work on a simple project called Social App. Now trying to move on to some professional Lavel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                laborum.</p>
                <a href="#" class="btn btn-primary">Read more.</a><hr>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                laborum.</p>
                <a href="#" class="btn btn-primary">Read more.</a><hr>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                laborum.</p>
                <a href="#" class="btn btn-primary">Read more.</a><hr>
            </div><div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                laborum.</p>
                <a href="#" class="btn btn-primary">Read more.</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h3>SideBar</h3>
        </div>
    </div>
@endsection