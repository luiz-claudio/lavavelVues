<?php

namespace App\Http\Controllers;

use App\Entities\Category;
use App\Http\Requests\productRequest;
use Illuminate\Http\Request;
use App\Entities\Products;
use Illuminate\Support\Facades\Storage;


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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            if ($extension == "jpeg" or $extension == "png") {

                storage::put($request->image,'public');
                $path = $request->image->store('public');
                $url =  $this->productsRepository->find($products->id);
                $url->image = Storage::url($path);
                $url->save();

            }

        }
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            if ($extension == "jpeg" or $extension == "png") {

                storage::put($request->image,'public');
                $path = $request->image->store('public');
                $url =  $this->productsRepository->find($id);
                $url->image = Storage::url($path);
                $url->save();

            }

        }

        return redirect('/');

    }

    public function destroy($id)
    {
        $products = $this->productsRepository->find($id)->delete();
        return redirect('/');

    }



}
