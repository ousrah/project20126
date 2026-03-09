<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
    $categorie = "Electromangers";
    return view('products.index',['categorie'=>$categorie]);
   }

   public function contacts()
   {
    $title = "page des contacts";
    $contacts = [];
   // return view('contacts',['title'=>$title, 'contacts'=>$contacts]);
    return view('contacts',compact('title','contacts'));
   
   
   }
}
