<?php
function dd($str)
{
    echo "<pre>";
    var_dump($str);
    die();
}
function view($name,$data=[])
{
   extract($data);
    return require "views/$name.view.php"; // 'views/$name.view.php'
}
