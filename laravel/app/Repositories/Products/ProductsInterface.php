<?php
namespace App\Repositories\Products;

interface ProductsInterface {
    public function getPublished();

    public function getHidden();
}
