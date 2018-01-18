<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use Illuminate\Http\Request;
use App\Entities\Products;


class ProductsController extends Controller
{
    protected $productsRepository;


    public function __construct(Products $productsRepository)
    {
        $this->productsRepository = $productsRepository;

    }

    public function index()
    {
        $products = $this->productsRepository->select('id','image','id_category',
            'name','description','price')->get();



        return view('products.list',compact('products'));

    }

    public function newProduct()
    {

        return view("products.register");
    }

    public function store(productRequest $request)
    {
        //$products = $this->productsRepository->create($request->all());

        var_dump($request);

    }

    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        return $products;

    }

    public function edit($id)
    {


    }

    public function update(Request $request,$id)
    {
        $products = $this->productsRepository->find($id)
            ->update($request->all());

    }

    public function destroy($id)
    {
        $products = $this->productsRepository->find($id)->delete();
        return redirect('/');

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
