<?php


    $router->get('/', [\App\controller\HomeController ::class, 'showHome']);


    $router->get('/about', [\App\controller\HomeController ::class, 'aboutHome']);
