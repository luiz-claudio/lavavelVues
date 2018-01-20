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
        $import = $this->controlImportRepository->select('id', 'filecsv', 'created_at', 'status')
          ->get();

        return view('import.list', compact('import'));
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
                $data->filecsv = $path;
                $data->save();

            }

        }

        return redirect('/admin/product/import/list');

    }

}


