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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme = \Theme::uses('bolt')->layout('default');
        $view = array(
            'name' => 'Kodr Indonesia'
        );

        return $theme->of('home',$view)->render();
    }
}
