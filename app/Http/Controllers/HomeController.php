<?php

namespace App\Http\Controllers;

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
    public function index(){
        $data = [
            'title' => 'Dashboard',
        ];
        return view('dash.index')->with($data);
    }

    public function insured(){
        $data = [
            'title' => 'Insured Items',
        ];
        return view('dash.insured')->with($data);
    }

    public function insure_new(){
        $data = [
            'title' => 'Insure New Item',
        ];
        return view('dash.insure_new')->with($data);
    }

    public function claims(){
        $data = [
            'title' => 'Claims',
        ];
        return view('dash.claims')->with($data);
    }

    public function claim_new(){
        $data = [
            'title' => 'New Claim',
        ];
        return view('dash.claim_new')->with($data);
    }

    public function user(){
        $data = [
            'title' => 'Users',
        ];
        return view('dash.user')->with($data);
    }
}
