<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo 'Добро пожаловать на наш сайт';
        echo "<p>Авторизоваться</p>";

        echo "<p><a href=" . route('categories') .">Просмотр новостей</a></p>";
        echo "<p><a href=" . route('create_news') .">Добавить новость</a></p>";
    }
}
