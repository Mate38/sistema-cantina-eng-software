<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Product;

  Class ProductController extends Controller{

    public function index(){
      $produtos = Product::all();
      return view('products/index')->with('produtos', $produtos);
    }

    public function show($id){

      $produto = Product::find($id);

      return view('products/show')->with('produto', $produto);
    }

    public function create(){
      $produto = new Product();

      return view('products/create');
    }

    public function store(Request $request){
      
      $produto = new Product();
      $produto->nome = $request->input('nome');
      $produto->valor = $request->input('valor');

      if ($produto.save()){
        $request->session()->flash('message', 'Produto cadastrado!');
      }else{
        $request->session()->flash('message', 'Produto não cadastrado!');        
      }

      return view('products/products');
    }
  } 
?>