<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Input;
use App\Models\Post;
use App\Core\App;
use App\Models\Comment;


class PostsController extends Controller
{

    public function index()

    {
        session_start();

       if(! isset($_SESSION['user_id'])){

            redirect('');
        }

        $id = $_SESSION['user_id'];

        $posts = Post::all();

        $user = User::find($id);
  
        $user = array_shift($user);

        return view('posts', ['posts' => $posts, 'user' => $user]);
  
       }



       public function create()
       {

               return view('createpost');

       }


       public function show()
       {
        
            session_start();

            $id = $_GET['id'];

            $pdo = \Connection::make(App::get('config')['database']);

            $post = Post::find($id);

            $post = array_shift($post);

            $comment = new Comment($pdo
          
            $comments = $comment->alls($id);

            return view('showpost', ['post'=> $post, 'comments' => $comments]);

        }

       public function store()
       {
            session_start();

            $this->validate($_POST, [

                'title' => 'required|min:6',
                'body'  => 'required|min:6'
            ]);

            if ($this->passed) {


                $title = Input::filterString(Input::get('title'));
                $body = Input::filterString(Input::get('body'));

                Post::insert([

                    'title' => $title,
                    'body'  => $body,
                    'created_at' => date('Y-m-d H:i'),
                    'user_id' => $_SESSION['user_id']
                    
                ]);


                redirect('posts');

            }else{

                $errors = $this->errors();

                return view('createpost', ['errors' => $errors]);
            }


       }
}
