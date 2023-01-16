<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function update($id=null){
        return view('products.update', ['id' => $id]);
    }

    public function delete($id=null){
        return view('products.delete', ['id' => $id]);
    }
}
