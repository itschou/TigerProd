<?php

namespace App\Http\Controllers;

use App\Mail\MassMail;
use App\Models\Session;
use App\Models\User;
use App\Models\site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $lastUser = User::orderBy('created_at', 'desc')->first();
        $toggle = site::first();
        $sessions = Session::all();
        $sessionsfalse = Session::all()->where('etat', '=', true);
        // dd($sessionsfalse);

        return view('home', compact('users', 'lastUser', 'sessions', 'toggle', 'sessionsfalse'));
    }

    public function sendmassmail()
    {

        $users = User::all();

        return view('emails.mass-email', compact('users'));
    }


    public function sentmassmail(Request $request)
    {

        $users = User::all();

        $objet = $request->input('objet');
        $messagee = $request->input('messagee');

        foreach ($users as $user) {
            Mail::to($user->email)->send(new MassMail($objet, $messagee));
        }

        return redirect("/home");

    }

}