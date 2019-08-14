<?php


namespace App\Models;

use App\Core\App;

class Post extends Model
{

      protected static $table = 'posts';

      protected $pdo;


      public function __construct($pdo)
      {
          $this->pdo = $pdo;
      }

      public  function finds($id)
      {

          $table = static::$table;

          $sql = "SELECT * FROM $table WHERE post_id = {$id}";

          $statment = $this->pdo->prepare($sql);

          $statment->execute();

          return $statment->fetchAll(\PDO::FETCH_OBJ);


       }
}
