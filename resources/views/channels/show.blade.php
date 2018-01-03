@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="player">
                <iframe width="600" height="315"
                        src="https://www.youtube.com/embed/XGSy3_Czz8k">
                </iframe>
                @if(Auth::user()->id==$channel->id)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('channels.edit',$channel->id) }}">Edit Channel<span
                                    class="sr-only">(current)</span></a>
                    </li>
                @endif
            </div>
        </div>
    </div>
@endsection
