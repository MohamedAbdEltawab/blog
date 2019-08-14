<?php


namespace App\Controllers;

use App\Core\Input;

use App\Models\Comment;

class CommentsController extends Controller
{

      /**
      *   make a comment to post_id
      */
      public function store()
      {

          session_start();

          $post_id = $_GET['id'];

          $user_id = $_SESSION['user_id'];

          $this->validate($_POST, [

              'comment' => 'required|min:2'
          ]);


          if($this->passed){

              $comment = Input::filterString(Input::get('comment'));

              Comment::insert([
                  'body' => $comment,
                  'created_at' => date('Y-m-d H:i'),
                  'user_id' => $user_id,
                  'post_id' => $post_id
              ]);

              header("Location:{$_SERVER['HTTP_REFERER']}");

          }else{

              $errors = $this->errors();
              header("Location:{$_SERVER['HTTP_REFERER']}");
               // return view('showpost', ['errors' => $errors, 'post' => $post]);
          }
      }



}
