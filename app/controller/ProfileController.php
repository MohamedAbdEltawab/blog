<?php

namespace App\Controllers;

use App\Models\User;

use App\Core\App;
use App\Core\Input;

class ProfileController extends Controller
{

      public function show()
      {
          session_start();

          $id = $_SESSION['user_id'];

          $user = User::find($id);

          $user = array_shift($user);

           return view('profile', ['user' => $user]);
       }


      public function update()
      {
           // var_dump($_SERVER);
          $this->validate($_POST, [

              'username' => 'required|min:3|max:10',
              'email' => 'required|email',
               // 'address' => 'required|min:4:max:20'

          ]);

          if($this->passed):

              $parameters = [];

              $parameters['username'] = $username = Input::filterString(Input::get('username'));
  
              $parameters['email'] = $email = Input::filterEmail(Input::get('email'));

              User::update($_GET['id'], $parameters);

              $message = "Updated successfully";

              header("Location:{$_SERVER['HTTP_REFERER']}");

          else:

              $errors = $this->errors();

              redirect('profile', ['errors' =>$errors]);
                   //return view('profile', ['errors' => $errors]);
           endif;

      }
}