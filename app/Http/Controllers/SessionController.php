<?php

namespace App\Http\Controllers;

use App\Mail\SessionMail;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $test = Session::create([
            'date' => $request->input('date'),
            'type' => $request->input('type'),
            'telephone' => 'sqdqsd'
        ]);

        // $session = $request->input('type');

        Mail::to(Auth::user()->email)->send(new SessionMail());

        return response()->json([$test]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function archiver(Request $request)
    {
        Session::where('id', $request->input('session_id'))->update(['etat' => true]);
        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Session  $session
     */
    public function show(Session $session)
    {
        return Session::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Session::where('id', $request->input('session_id'))->delete();
        return redirect('/home');
    }
}
