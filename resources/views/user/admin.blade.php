@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="loginbg">
            <h1>Admin Panel</h1>
            <form class="" action="{{action('UsersController@destroy')}}" method="post">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <div class="form-group float-right">
                    <label for="username" class="center-content" >Username</label>
                    <input id="username" type="text" class="form-control" name="username" value=""
                           required autofocus>
                    <div class="button-height">
                        <button type="submit" class="btn btn-danger center-content">Delete User</button>
                    </div>
                </div>
            </form>
            <form class="" action="{{action('UsersController@ban')}}" method="post">
                {{method_field('POST')}}
                {{csrf_field()}}
                <div class="form-group float-left">
                    <label for="username" class="center-content">Username</label>
                    <input id="username" type="text" class="form-control" name="username" value=""
                           required autofocus>
                    <div class="button-height">
                        <button type="submit" class="btn btn-danger center-content">Ban User</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success center-content">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(session()->has('error_msg'))
        <div class="alert alert-danger center-content">
            {{ session()->get('error_msg') }}
        </div>
    @endif
@endsection
