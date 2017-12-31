<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use Auth;
use App\User;
use App\Events\ChatEvent;

class ChannelsController extends Controller
{

  public function send(request $request){
    return $request->all();
    $user = User::find(Auth::id());
    event(new ChatEvent($request->message, $user));
  }


  // public function send(){
  //   $message = "Hello";
  //   $user = User::find(Auth::id());
  //   event(new ChatEvent($message, $user));
  // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channels = Channel::paginate(5);
        return view('channels.display', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->middleware('guest');
        Channel::create([
            'name' => $request['name'],
            'info' => $request['info'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $channel = Channel::findOrFail($id);
        return view('channels.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
