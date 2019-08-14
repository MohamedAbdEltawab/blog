<?php

namespace App\Controllers;

use App\Core\Input;
use App\Core\App;
use App\Models\User;

class AuthController extends Controller
{

   /**
    * Login To Web Application
    */
    public function login()
    {

        if(Input::exists(Input::POST)):

            $this->validate($_POST, [
                'email' => 'required|email',
                 'password' => 'required|min:6'
             ]);

             if($this->passed):

                  $email = Input::filterEmail(Input::get('email'));
                  $password = md5(Input::filterString(Input::get('password')));

                  User::login($email, $password);

              else:
                  $errors = $this->errors();

                  return view("login", ['errors' => $errors]);

              endif;

        endif;

    }


    /**
    *
    *   Logout
    *
    */
    public function logout()
    {
        session_start();

        session_unset();

        session_destroy();

        redirect('login');
    }

 /**
  *  Register New User
  */
   public function register()
   {

           // die(var_dump($_POST));
        if(Input::exists(Input::POST)){


            $this->validate($_POST, [

                'username'      =>      'required|min:3|max:10',
                'email'         =>      'required|email',
                'password'      =>      'required|min:6'
            ]);


            if ($this->passed) {

                  $parameters = [];

                  $parameters['username'] = $username = Input::filterString(Input::get('username'));
                  $parameters['email'] = $email = Input::filterEmail(Input::get('email'));
                  $parameters['password'] = $password = md5(Input::filterString(Input::get('password')));

                  // die(var_dump($parameters));

                  $user = User::insert($parameters);

                  redirect("login");

            }else{

                $errors = $this->errors();


                return view("register", ['errors' => $errors]);
           }
       }

   }
}
