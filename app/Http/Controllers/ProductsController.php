<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Http\Requests\productRequest;
use Illuminate\Http\Request;
use App\Entities\Products;


class ProductsController extends Controller
{
    protected $productsRepository;
    protected $categoryRepository;


    public function __construct(Products $productsRepository,Category $categoryRepository)
    {
        $this->productsRepository = $productsRepository;
        $this->categoryRepository = $categoryRepository;

    }

    public function index()
    {

        $products = $this->productsRepository->select('id','image','id_category',
            'name','description','price')->get();

        foreach ($products as $value){
            $value->id_category = $this->categoryRepository->find($value->id_category)->name;
        }



        return view('products.list',compact('products'));

    }

    public function newProduct()
    {
        $category = $this->categoryRepository->all();

        return view("products.register",compact('category'));
    }

    public function store(productRequest $request)
    {
        $products = $this->productsRepository->create($request->all());

        return redirect('/');

    }

    public function show($id)
    {
        $product = $this->productsRepository->find($id);
        $category = $this->categoryRepository->all();

        return view('products.edit',compact('product','category'));

    }


    public function update(Request $request,$id)
    {
        $products = $this->productsRepository->find($id)
            ->update($request->all());

        return redirect('/');

    }

    public function destroy($id)
    {
        $products = $this->productsRepository->find($id)->delete();
        return redirect('/');

    }
    public function importView()
    {
        return view('products.import');

    }

    public function import()
    {
        // Abre o Arquvio no Modo r (para leitura)
        $arquivo = fopen ('clientes.csv', 'r');

       // Lê o conteúdo do arquivo
        while(!feof($arquivo))
        {
            // Pega os dados da linha
            $linha = fgets($arquivo, 1024);

            // Divide as Informações das celular para poder salvar
            $dados = explode(',', $linha);

            // Verifica se o Dados Não é o cabeçalho ou não esta em branco
            if($dados[0] != 'CLIENTES' && !empty($linha))
            {
                $cliente = new clientes();
                $cliente->nome = $dados[0];
                $cliente->telefone = $dados[1];
                $cliente->save();
            }
        }

        fclose($arquivo);

    }


}
