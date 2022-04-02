<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function CreateCustomer(){
        return view('create');
    }
    public function UpdateCustomer(){
        return view('update');
    }
    public function SelectCustomer(){
        return view('select');
    }
    public function DeleteCustomer(){
        return view('delete');
    }
}
