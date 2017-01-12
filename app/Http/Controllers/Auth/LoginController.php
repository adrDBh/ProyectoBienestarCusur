<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use Illuminate\Http\Request;
=======
>>>>>>> parent of 9ec77a6... DB now has seeds, changes to front-end and still ongoing multiple-way user auth..
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $username = 'email';

    public function redirectPath()
    {
        return '/home';
    }

<<<<<<< HEAD
    public function username()
    {
        return $this->username;
    }

    public function login(Request $request)
    {
        // Validates if the given input is number-only or email
        $this->username =
            filter_var($request->input('Login'),
                FILTER_VALIDATE_REGEXP,
                array("options" => array("regexp" => "/^(\d)+$/"))) ? 'UDG_Code' : 'email';

        // Validates login...
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

=======
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
>>>>>>> parent of 9ec77a6... DB now has seeds, changes to front-end and still ongoing multiple-way user auth..
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
