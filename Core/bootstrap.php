<?php
use Core\App;
use Core\database\Connection;
use Core\database\QueryBuilder;
//$app['config'] = require "config.php";
App::bind('config',require 'config.php');
App::bind('database',new QueryBuilder(Connection::make(App::get("config")['database'])));
// Insert
//$app['database']->insert(
//    "articles",
//    [
//        "name" => "article1",
//        "body" => "body1"
//    ]
//);
// Read
//var_dump($app['database']->select('articles',19));
// Update
//var_dump($app["database"]->update("articles"," name = ?",'id = ?',["article18",19]));
// Delete
//$app["database"]->delete("articles","id = ?",[1]);

function view($name,$data=[])
{
    extract($data);
    return require "App/views/{$name}.view.php";
}
function redirect($path)
{
    header("Location: {$path}");
}
