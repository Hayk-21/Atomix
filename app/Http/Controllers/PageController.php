<?php

namespace App\Http\Controllers;

use App\Model\UserReferralUser;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['guest']);
//    }


    public function index()
    {
        return view('index');
    }

    public function service()
    {

        return view('service');
    }

    public function aboute()
    {

        return view('aboute');
    }

    public function faq()
    {

        return view('faq');
    }

    public function news()
    {

        return view('news');
    }

    public function rodmap()
    {
        return view('rodmap');
    }

    public function dashboardpartner()
    {
           $partner =  UserReferralUser::where('referral_user_id', Auth::user()->id)
               ->join('users', 'users.id', '=', 'user_referral_users.user_id')
               ->select('users.*')
               ->get();



        return view('dashboardpartner',compact('partner'));
    }

    public function dashboardindex()
    {

        return view('dashboardindex');
    }

    public function partnersone()
    {
        return view('partnersone');
    }
}
