<?php
function dd($str)
{
    echo "<pre>";
    var_dump($str);
    die();
}
function view($name, $data = [])
{
    extract($data);
    return require "views/$name.view.php"; // 'views/$name.view.php'
}
function redirect($uri)
{
    header("location: /frameworkthinking/index.php$uri");
}
function request($name)
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        return $_POST[$name];
    }
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        return $_GET[$name];
    }
}
