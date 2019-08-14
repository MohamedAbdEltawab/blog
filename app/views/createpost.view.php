<?php
       if (! isset($_SESSION)) {
               # code...
               session_start();
       }


// print_r($_SERVER);

if (isset($_SESSION['user_id'])): ?>


       <?php require_once 'partials/header.php'; ?>



       <div class="container">
               <div class="row">
                       <div class="col-2"></div>
                       <div class="col-8">

                               <h3>Create a Post</h3>

                               <form method="post" action="/posts/store" class="form-signin">

                                       <input class="form-control" type="text" name="title" placeholder="Title" required="">
                                       <textarea class="form-control" name="body" placeholder="body" required=""></textarea>
                                       <button class="btn btn-lg btn-primary btn-block" type="submit">Post</button>

                               </form>
                       </div>
               </div>
       </div>

               <?php
                       if (isset($errors) && count($errors)): ?>
                               <div class="form-group">
                                       <div class="alert alert-danger">
                                               <ul>

                                                       <?php
                                                               foreach ($errors as $error) :

                                                                       echo "<li>" . $error. "</li>";

                                                               endforeach;
                                                       ?>
                                               </ul>
                                       </div>

                               </div>
               <?php
                       endif; ?>
<?php require 'partials/footer.php'; ?>

<?php

       else:
               redirect('login');
       endif;

?>
