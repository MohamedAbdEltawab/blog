<?php

namespace App\Models;

use App\Core\App;

 

class User extends Model{
    

  protected static $table = 'users';


  public  static function login($email, $password)

  {
      $table = static::$table;

      $sql = "SELECT * FROM  {$table} WHERE email = :email AND password = :password";

      $query = App::get('database');

      $stmt = $query->pdo->prepare($sql);

      $stmt->bindParam('email', $email);
      $stmt->bindParam('password', $password);
      $stmt->execute();

      if( $stmt->rowCount() > 0 ):

          $user = $stmt->fetch(\PDO::FETCH_OBJ);

          session_start();

          $_SESSION['user_id'] = $user->id;

          redirect('posts');

      else:

          echo "You are not logged in";

      endif;
      
   }


 }
