@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="player">
      <iframe width="600" height="315"
        src="https://www.youtube.com/embed/XGSy3_Czz8k">
      </iframe>
      </div>
    </div>
</div>

@endsection

<!--
<li class="list-group-item">CHAT</li>
<ul class="list-group" v-chat-scroll>
  <message v-for="value in chat.message" :key=value.index color='warning'>
    @{{value}}
  </message>
</ul>
<input type="text" class="form-control" name="" value="" placeholder="Type your message..." v-model='message' @keyup.enter='send'> -->
