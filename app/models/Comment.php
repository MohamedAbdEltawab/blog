<?php


namespace App\Models;


class Comment extends Model
{


       protected $pdo ;



       public function __construct($pdo)
       {

               $this->pdo = $pdo;

       }


       public static $table = 'comments';



       public  function alls($id)
       {

            $table = static::$table;

            $statment = $this->pdo->prepare("SELECT * FROM {$table} WHERE post_id = {$id}");

            $statment->execute();

            return $statment->fetchAll(\PDO::FETCH_CLASS);

       }



}
