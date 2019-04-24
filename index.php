<?php

    use Phroute\Phroute\Dispatcher;
    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\RouteParser;
    use Phroute\Phroute\Exception\HttpRouteNotFoundException;
    use Phroute\Phroute\Exception\HttpMethodNotAllowedException;

    require_once 'vendor/autoload.php';
    session_start();

    $router = new RouteCollector(new RouteParser());

      require_once __DIR__.'/route.php';


    $dispatcher = new Dispatcher($router->getData());

    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url
        ($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }
    catch(HttpRouteNotFoundException $e){
         echo $e->getMessage();
    }
    catch(HttpMethodNotAllowedException $e)
    {
        echo $e->getMessage();
    }

    echo $response;