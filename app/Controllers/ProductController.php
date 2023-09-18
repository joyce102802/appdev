<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function _construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function product($product)
    {
        echo $product;
    }
    public function tryy()
    {
       $data = $this->product->findAll();
       print_r($data);
    }
    public function index()
    {
        //
    }
}
