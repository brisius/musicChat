@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row offset-top">
          <div class="col-12">
            @if(Auth::user()->id==$channel->user_id)
                <li class="nav-item">
                    <a class="btn btn-outline-success float-right" href="{{ route('channels.edit',$channel->id) }}">Edit Channel<span class="sr-only">(current)</span></a>
                </li>
            @endif
          </div>
        </div>
        <hr style="background-color:white;">
        <div class="row">
          <div class="col-8">
            <select id="test" class="custom-select custom-select-lg mb-3 select-bg" onchange="showDiv(this)">
            <option selected>Select playlist</option>
            @forelse($playlists as $playlist)
            <option value="{{$playlist->id}}">{{$playlist->playlist_name}}</option>
            @empty
            @endforelse
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            @forelse($playlists as $playlist)
            <div id="{{$playlist->id}}" class="test" style="display: none;">
              <iframe style="background-color:black;" src="{{$urls[$counter++]['url']}}" style="position:relative;" width="100%" height="350px"></iframe>
            </div>
            @empty
            @endforelse
          </div>
          <div class="col-4" style="bakcground-color:white;">
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <title>Document</title>
                  <meta name="csrf-token" content="{{ csrf_token() }}">
                  <style>
                      .list-group{
                          overflow-y: scroll;
                          height: 200px;
                      }
                  </style>
              </head>
              <body>
              <div class="container">
                  <div class="row" id="app">
                      <div class="">
                          <li class="list-group-item active">Chat Room</li>
                          <ul class="list-group" v-chat-scroll>

                              <message
                                      v-for="value,index in chat.message"
                                      :key=value.index
                                      :color=chat.color[index]
                                      :user = chat.user[index]
                              >
                                  @{{ value }}
                              </message>
                              <input type="text" class="form-control" placeholder="your message" v-model="message"
                                     @keyup.enter="send">
                          </ul>
                      </div>
                  </div>
              </div>


              <script src="{{ asset('js/app.js') }}"></script>
              </body>
              </html>
          </div>
        </div>
    </div>
    <script src="{{URL::asset('js/change.js')}}">
    </script>

@endsection
