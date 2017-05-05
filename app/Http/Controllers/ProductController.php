<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Product;

  Class ProductController extends Controller{

    public function index(){
      $produtos = Product::all();
      return view('products/index')->with('produtos', $produtos);
    }
  }

?>