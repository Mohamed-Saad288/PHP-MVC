<?php
namespace App\Controllers;
class PageController
{
    public function about()
    {
        $articles = [
            [
                'title'=>'hello',
                'author'=>'Mohamed Saad'
            ],
            [
                'title'=>'hello2',
                'author'=>'Mohamed Saad2'
            ],
        ];
//       return require "App/Views/about.view.php";
        return view("about",compact("articles"));
    }
}