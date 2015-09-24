<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Message;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // $messages = Message::join('users', 'messages.user_id', '=', 'users.id')
        //     ->select('users.name', 'messages.url')
        //     ->get();
        $allMessages = Message::with('user')->get();
        // $userMessages = User::with('messages')->where('id', '=', $user->id)->get();
        $userMessages = Message::where('user_id', $user->id)->get();
        // $usermsg = Message::where('user_id', '=', $user->id)->get();
        // dd($usermsg->messages['text']);
        return view('user.dashboard')
            ->with('username', $user->name)
            ->with('usermsg', $userMessages)
            ->with('messages', $allMessages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        Message::create([
            'user_id' => $user->id,
            'text' => $request->text,
            'url' => str_random(8),
            ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
