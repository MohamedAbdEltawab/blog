 <?php

require 'partials/header.php'; 

if (! isset($_SESSION)) {
       # code...
       session_start();


       if (isset($_SESSION['user_id'])) {

               redirect('posts');

       }else{

               require 'partials/header.php'; ?>



               <a href="login">Login</a>
               <a href="register">Register</a>




               <?php require 'partials/footer.php';


               }
}


 require 'partials/footer.php'; ?>
