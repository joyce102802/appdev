<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }
    public function edit($id)
    {
        $data = [
            'products' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('product',$data);
    }
    public function save()
    {
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        if($_POST['id'] != null){
           $this->product->where('id', $_POST['id'])->update($data);
        }else{
        $this->product->save($data);
        }   
        return redirect()->to('/product');
    }
    public function product($product)
    {
        echo $product;
    }
    public function tryy()
    {
       $data['products'] = $this->product->findAll();
       return view ('product', $data);
    }
    public function index()
    {
        //
    }
}
