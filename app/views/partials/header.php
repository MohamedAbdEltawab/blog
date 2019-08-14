<?php use App\Core\Request; ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title></title>

      <link rel="stylesheet" type="text/css" href="public/css/style.css">
       <title>BLOG</title>
       <link rel="stylesheet" type="text/css" href="<?= trim(Request::uri(), Request::uri())?>/public/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="<?= trim(Request::uri(), Request::uri())?>/public/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

 </head>
 <body>


       <?php

                       $login = (Request::uri() === 'login');
                       $register = (Request::uri() === 'register');
                       $index = (Request::uri() === '');

               if(     ! ($login || $register ||  $index) ):

                       require 'nav.php';

               endif;
        ?>
