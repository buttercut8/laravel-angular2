<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
// use App\Repositories\Category\CategoryInterface;
class CategoryController extends Controller {

    // private $category = '';

    // public function __construct(CategoryInterface $CategoryInterface){
    //     $this->category = $CategoryInterface;
    // }

    public function getCategory(){
        return Category::all();
    }

    public function listCategory(){
        // $list = $this->category->getAll();
        // return $list;
    }

}
