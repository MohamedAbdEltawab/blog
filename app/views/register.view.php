<?php

       if (! isset($_SESSION) ) :
               # code...
               session_start();

               if(isset($_SESSION['user_id'])) :

                       redirect('posts');

               endif;

       endif;

require 'partials/header.php'; ?>


       <div class="container">

               <div class="row">
                       <div class="col-4"></div>
                               <div class="col col-4">
                                       <h2>Register</h2>

                                       <form method="post" action="registeruser">

                                               <input type="text" class="form-control"  name="username" placeholder="Username"><br>
                                               <input type="text" class="form-control"  name="email" placeholder="E-mail"><br>
                                               <input type="password" class="form-control"  name="password" placeholder="Password"><br>
                                               <button type="submit" class="btn btn-primary">Register</button>
                                       </form>


                                       <?php
                                               if (isset($errors)): ?>
                                                       <div class="alert alert-danger">
                                                               <ul>

                                                                       <?php
                                                                               foreach ($errors as $error) :

                                                                                       echo "<li>" . $error. "</li>";

                                                                               endforeach;
                                                                       ?>
                                                               </ul>
                                                       </div>
                                       <?php
                                               endif;
                                       ?>

                               </div>
               </div>

       </div>



<?php require 'partials/footer.php'; ?>
