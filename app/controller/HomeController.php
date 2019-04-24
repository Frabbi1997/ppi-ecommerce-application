<?php

 namespace App\controller;

  class HomeController
  {
    public function showHome()
    {
        views ('home');
    }

      public function aboutHome()
      {

          views ('about');
      }
  }