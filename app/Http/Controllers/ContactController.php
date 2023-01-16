<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('contacts.index');
    }
    public function create(){
        return view('contacts.create');
    }
    public function delete($id=null){

        return view('contacts.delete', ['id' => $id]);
    }
    public function update($id=null){
        return view('contacts.update', ['id' => $id]);
    }
}
