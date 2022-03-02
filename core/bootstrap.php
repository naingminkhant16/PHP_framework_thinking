<?php
require 'functions.php';
// require 'core/Router.php';
// require 'core/Request.php';

// require "core/Database/Connection.php";
// require "core/Database/QueryBuilder.php";

// $config = require "config.php";
// $database = new QueryBuilder(Connection::make(App::get("config")['database']));

App::bind("config", require "config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get("config")['database'])));
