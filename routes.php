<?php
// $router->register([
//     "" => "Controllers/IndexController.php",
//     "about" => "Controllers/AboutController.php",
//     "contact" => "Controllers/ContactController.php",
//     "orders" => "Controllers/OrderController.php",
//     "customers" => "Controllers/CustomerController.php",
//     "names" => "Controllers/add-name.php"
// ]);

$router->get('', "PagesController@home");
$router->get('about', "PagesController@about");
$router->get('contact', "PagesController@contact");
$router->get('customers', "PagesController@customers");
$router->post('names', "PagesController@createUser");
$router->post('delete', "PagesController@delete");
// dd($router->routes);