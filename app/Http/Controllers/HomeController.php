<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Survey;
use Illuminate\Http\Request;

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
        $survey = Survey::with('member')->get();
        return view('home',compact('survey'));
    }

    public function seeMember($id)
    {
        // $member = Member::where('survey_id',$id)->get();
        $member = Member::with('survey')->get();
        return view('member',compact('member'));
    }
}
