@extends('layouts.app')

@section('content')
<div class="container container-max">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @forelse($channels as $channel)
         <div class="col-md-4 grid">
           <div class="card text-white mb-3 grid-lower" style="max-width: 18rem; background-color: #aa89bc;">
            <div class="card-header"><a class="no-decoration" href="/channels/{{$channel->id}}">{{$channel->name}}</a></div>
            <div class="card-body">
              <h5 class="card-title" style="color:black;">Information</h5>
              <p class="card-text">{{$channel->info}}</p>
              <h5 class="card-title" style="color:black;">Created by</h5>
              <p class="card-text">{{Auth::user()->name}}</p>
            </div>
          </div>
        </div>
        @empty

        @endforelse
    </div>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="center-content">
          {{$channels->links()}}
        </div>
      </div>
    </div>
</div>
@endsection
