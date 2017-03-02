<?php
namespace App\Http\Controllers;

use App\User;
use App\Repositories\Products\ProductsInterface;
class ProductController extends Controller
{

    protected $_productsRepository;

    public function __construct(ProductsInterface $ProductsRepository){
        $this->_productsRepository = $ProductsRepository;
    }

    public function getProducts(){
        return $this->_productsRepository->getAll();
    }

    public function deleteProducts($id){
        $this->_productsRepository->delete($id);
        return ['Delete product successful !'];
    }

    public function editProducts($id){
        // $products = Product::find($id);
        // $products->name = request()->name;
        // $products->description = request()->description;
        // $products->images = request()->images;
        // $products->category_id = request()->category_id;
        // $products->price = request()->price;
        // $products->save();
        $data = request()->all();
        $this->_productsRepository->update($id,$data);
        return ['success' => 'Edit product successful !'];
    }

    public function addProducts(){
        $data = request()->all();
        $this->_productsRepository->update($data);
        return ['success' => 'Add product successful !'];
    }

    public function test(){

    }
}
