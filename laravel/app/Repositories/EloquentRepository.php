<?php
namespace App\Repositories;

use DB;
abstract class EloquentRepository implements RepositoryInterface {

    protected $model;

    public function __construct(){
        $this->setModel();
    }

    abstract protected function getModel();

    private function setModel(){
        // $getModel = $this->getModel();
        // $this->model = app()->make($getModel);
    }

    public function getAll(){
        return DB::table()->get();
        // return $this->model->all();
    }

    public function getById($id){
        return $this->model->findOrFail($id);
    }

    public function create(array $attribute){
        // return $this->model->create($attribute);
    }

    public function update($id, array $attribute){
        // $update = $this->getById($id);
        // return $update->update();
    }

    public function delete($id){
        // $this->getById($id)->delete();
        // return true;
    }

}
