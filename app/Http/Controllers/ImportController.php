<?php

namespace App\Http\Controllers;

use App\Entities\ControlImport;
use App\Entities\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{

    protected $controlImportRepository;


    public function __construct(ControlImport $controlImport)
    {
        $this->controlImportRepository = $controlImport;

    }

    public function index()
    {
        $import = $this->controlImportRepository->select('id','filecsv','created_at','status')
        ->get();


        return view('import.list',compact('import'));
    }

    public function import()
    {
       return view('import.import');
    }

    public function saveList(Request $request)
    {
        if ($request->hasFile('csv')) {
            $csv = $request->file('csv');
            $extension = $csv->extension();
            if ($extension == "txt" or $extension == "csv") {

               $path = $request->csv->store('public');

                $data = new ControlImport();
                $data->filecsv =$path;
                $data->save();

            }

        }

          return redirect('/admin/product/import/list');

    }

    public function startImport($id)
    {

        // Abre o Arquvio no Modo r (para leitura)
        $url='/var/www/html/Manager/storage/app/'.$this->controlImportRepository->find($id)->filecsv;
         $arquivo = fopen ($url,'r');
         $count=0;

// Lê o conteúdo do arquivo
        while(!feof($arquivo))
        {
            // Pega os dados da linha
            $linha = fgets($arquivo, 1024);

// Divide as Informações das celular para poder salvar
        $dados = explode(',',$linha);


        if($count>=1 and !empty($dados[2]))
        {
               $product = new Products();
               $product->image =$dados[0];
               $product->id_category=$dados[1];
               $product->name=$dados[2];
               $product->description=$dados[3];
               $product->price=(double)$dados[4];
               $product->save();
        }
         $count++;

        }

        $controlImport =$this->controlImportRepository->find($id);
        $controlImport->status='ok';
        $controlImport->save();


// Fecha arquivo aberto
        fclose($arquivo);

    }
}

