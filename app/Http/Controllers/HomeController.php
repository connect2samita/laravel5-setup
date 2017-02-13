<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

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
     * Verify user mail address.
     *
     * @return \Illuminate\Http\Response
     */
    // This should be moved to a User Controller maybe
    private function verify()
    {
        $id = Auth::id();
        $user = User::find($id)->first();

        if ($user->verification_token) {
            return $verified = false;
        }
        else {
            return $verified = true;
        }
    }

    public function test(Request $request)
    {
        Mail::to($request->user())->send(new EmailVerification());

        // check for failures
        if (Mail::failures()) {
            return count(Mail::failures());
        } else {
            return "Successful";
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('verified', $this->verify());
    }
}
