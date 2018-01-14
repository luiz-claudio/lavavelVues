<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Http\Requests\categoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{


    protected $categorieRepository;


    public function __construct(Category $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;

    }

    public function index()
    {
        $categories = $this->categorieRepository->all();

          return $categories;

    }

    public function store(categoryRequest $request)
    {
        $category = $this->categorieRepository->create($request->all());


    }

    public function show($id)
    {
        $category =$this->categorieRepository->find($id);

        return $category;

    }

    public function edit($id)
    {


    }

    public function update(Request $request,$id)
    {
        $category = $this->categorieRepository->find($id)
            ->update($request->all());

    }

    public function destroy($id)
    {
        $category = $this->categorieRepository->find($id)->delete();




    }




}
