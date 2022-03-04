<?php
// $router->register([
//     "" => "Controllers/IndexController.php",
//     "about" => "Controllers/AboutController.php",
//     "contact" => "Controllers/ContactController.php",
//     "orders" => "Controllers/OrderController.php",
//     "customers" => "Controllers/CustomerController.php",
//     "names" => "Controllers/add-name.php"
// ]);

// $router->get('', "PagesController@home");
// $router->get('about', "PagesController@about");
// $router->get('contact', "PagesController@contact");
// $router->get('customers', "PagesController@customers");
// $router->post('names', "PagesController@createUser");
// $router->post('delete', "PagesController@delete");

use Controllers\PagesController;

$router->get('', [PagesController::class, 'home']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);
$router->get('customers', [PagesController::class, "customers"]);
$router->post('names', [PagesController::class, "createUser"]);
$router->post('delete', [PagesController::class, "delete"]);
