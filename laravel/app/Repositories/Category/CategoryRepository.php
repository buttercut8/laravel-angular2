<?php
namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;

class CategoryRepository extends EloquentRepository implements CategoryInterface {
    protected function getModel(){
        return \App\Category::class;
    }
}
