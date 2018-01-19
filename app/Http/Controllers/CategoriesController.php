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
        $categories = $this->categorieRepository->select('id','name')->get();

          return view('category.list',compact('categories'));

    }

    public function store(categoryRequest $request)
    {
        $category = $this->categorieRepository->create($request->all());

        return redirect('/admin/category/list');
    }

    public function show($id)
    {
        $category =$this->categorieRepository->find($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = $this->categorieRepository->find($id)
            ->update($request->all());
        return redirect('/admin/category/list');
    }

    public function destroy($id)
    {

      //  $category = $this->categorieRepository->find($id)->delete();
       // return redirect('/admin/category/list');
    }
    public function newCategory(){

        return view('category.register');

    }


}
