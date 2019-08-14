<?php

namespace App\Controllers;



use App\Models\Task;
use App\Models\Post;

 class PagesController extends Controller
 {

      
      public function index()
      {

          return view('index');

      }


      public function login()
      {

         return view('login');

      }


      public function register()
      {

          return view('register');
       
      }


 }
