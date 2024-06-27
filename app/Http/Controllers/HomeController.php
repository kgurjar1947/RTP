<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;

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
        $enquiry = Enquiry::where('service','2')->latest()->get();
        return view('admin.dashboard', compact('enquiry'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    
    public function contact()
    {
        $enquiry = Enquiry::where('service','1')->latest()->get();
        return view('admin.genenq', compact('enquiry'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    
}
