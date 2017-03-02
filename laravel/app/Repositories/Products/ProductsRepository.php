<?php
namespace App\Repositories\Products;

use App\Repositories\EloquentRepository;

class ProductsRepository extends EloquentRepository implements ProductsInterface {

    protected function getModel(){
        return \App\Product::class;
    }

    public function getPublished(){
        return $this->model->where('status',1)->get();
    }

    public function getHidden(){
        return $this->model->where('status',0)->get();
    }
}
