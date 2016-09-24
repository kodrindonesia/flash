<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
<<<<<<< HEAD
        $this->middleware('auth');
=======
        parent::__construct();
        // $this->middleware('auth');
>>>>>>> 55dd024... [FEATURES] Install AdminLTE as base admin theme
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        // $theme = Theme::uses('admin')->layout('default');
        $view = array(
            'name' => 'Kodr Indonesia'
        );

        return $this->theme->of('home.index', $view)->render();
>>>>>>> 55dd024... [FEATURES] Install AdminLTE as base admin theme
    }
}
