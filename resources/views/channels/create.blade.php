@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Create channel
                </div>

                <div class="panel-body">
                  <form class="" action="/channels" method="post">
                    <div class="form-group col-md-6">
                      <label for="name">Channel name</label>
                      <input id="name" type="text" class="form-control" name="name" required autofocus>
                      <label for="information">Channel informaton</label>
                      <input id="info" type="text" class="form-control" name="info" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" class="btn btn-success pull-right" value="Confirm">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
  <div class="col-md-4 loginbg">
    <h1>Create channel</h1>
    <form class="" action="/channels" method="post">
      <div class="form-group">
        <label for="name">Channel name</label>
        <input id="name" type="text" class="form-control" name="name" required autofocus>
      </div>
      <div class="form-group">
        <label for="information">Channel informaton</label>
        <input id="info" type="text" class="form-control" name="info" required autofocus>
      </div>
      <div class="button-height">
        <button type="submit" class="btn btn-outline-success float-right">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
