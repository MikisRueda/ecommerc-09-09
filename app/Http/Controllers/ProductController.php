<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return "PRODUCTS";
    }

    function detail($id, $category = null){
        if($category != null){
            return "Product ID: ".$id." Category: ".$category;
        }else{
            return "Product ID: ".$id;
        }

    }

    function create(){
        return "FORM FOR CREATE A PRODUCT";
    }
}
