<?php

namespace App\Http\Controllers;
use App\Sale;
use Carbon\Carbon;
use App\SoldProduct;
use App\Transaction;
use App\PaymentMethod;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {

        return view('dashboard');
    }

    public function action(){
        return view('home');
    }
}
