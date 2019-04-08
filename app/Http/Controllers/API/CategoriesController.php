<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function categories()
    {
        return Category::orderBy('name', 'ASC')->get(['id','name']);
    }

    public function subcategories(Category $category)
    {
        return $category -> subcategories()->orderBy('name', 'ASC')->get(['id', 'name']);
    }
}
