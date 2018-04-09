<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
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
     * @return Response
     */
    public function index()
    {
        return view('adminlte::profile');
    }
	 public function needer()
    {
        return view('adminlte::needer');
    }
	 public function doner()
    {
        return view('adminlte::doner');
    }
	 public function update()
    {
        return view('adminlte::update');
    }
     public function storage()
    {
        return view('adminlte::storage');
    }
	 
}