<?php

namespace App\Http\Controllers;

use Request;
use Redirect;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\FacadesValidator;
use Illuminate\FoundationBus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\FoundationAuthAccess\AuthorizesRequests;
use Illuminate\Foundation\AuthAccess\AuthorizesResources;
use Illuminate\Html\HtmlServiceProvider;

class HomeController extends BaseController
{
    public function showLogin()
    {
 
        // Form View
 
        return view('login');
    }
 
    public function doLogout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('login'); // redirection to login screen
    }
 
    public function doLogin()
    {
 
        // Creating Rules for Email and Password
 
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:2');
 
        // password has to be greater than 3 characters and can only be alphanumeric and);
        // checking all field
 
        $validator = Validator::make(Input::all(), $rules);
 
        // if the validator fails, redirect back to the form
 
        if ($validator->fails()) {
            return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // if the validator fails, redirect back to the form
            if ($validator->fails()) {
                return Redirect::to('login')
                        ->withErrors($validator) // send back all errors to the login form
                        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            }
 
            // attempt to do the login
            $userdata = array(
                'email' => Input::get('email') ,
                'password' => Input::get('password')
            );
            if (Auth::attempt($userdata)) {
                return Redirect::to('login?done');
            } else {
                return Redirect::to("login?failed");
            }
        }
    }
}
