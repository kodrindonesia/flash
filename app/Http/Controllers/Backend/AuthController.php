<?php
/**
 * Auth for Backend
 *
 * @author 		Sandi Andrian (halo@kodrindonesia.com)
 * @since 		Sep 18, 2016
 * @version 	1.0
 * @package     Backend
 **/

namespace App\Http\Controllers\Backend;

use App\User;
use Validator;
use App\Http\Controllers\Backend\BackendController;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends BackendController
{
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	public function __construct()
	{
		parent::__construct();
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
	}

	public function getLogin()
	{
		$this->theme->layout('login');
        return $this->theme->of('auth.login')->render();
	}

	public function postLogin()
	{

	}
}