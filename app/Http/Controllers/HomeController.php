<?php
/**
 * Created by PhpStorm.
 * User: adry
 * Date: 25/1/18
 * Time: 1:32
 */

namespace App\Http\Controllers;


class HomeController
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}