<?php
require_once __DIR__ . '/../app/bootstrap.php';
$app = new Application();
$app->run();

/*

$app = new Silex\Application();
$app['debug'] = true;



$app->get('/', function(Silex\Application $app)  {
  
     $app->abort(404, "Pagina no existe existe.");
    ldd($app);
    echo "ii";
  
    return 'Hello!';
});


$app->get('/', 'Igorw\Foo::bar');
 
 




$app->run();


*/