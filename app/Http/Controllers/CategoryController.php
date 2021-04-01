<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryList = [
        '1' => [
            'Региональные' => [1, 2, 3, 4]
            ],
        '2' => [
        'Мировые' => [5, 6, 7]
            ],
        '3' => [
            'Экономические' => [8, 9, 10]
            ],
        '4' => [
            'Развлекательные' => [11]
        ]
    ];

    public function showCategoryList()
    {
        echo "<h2>Категории новостей:</h2>";
        foreach ($this->categoryList as $key=>$category) {
            $categoryName = array_key_first($category);
            echo "<p><a href=categories/{$key}\>{$categoryName}</a></p>";
        }
    }

    public function showNewsList(int $categoryId)
    {
        $categoryNews = $this->categoryList[$categoryId];
        $categoryName = array_key_first($categoryNews);
        echo "<h2>{$categoryName}:</h2>";

        foreach ($categoryNews[$categoryName] as $key=>$news) {
            echo "<p><a href=news/{$news}>{$news}</a></p>";
        }
    }
}
