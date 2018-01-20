@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">




                    <form css="" action="/admin/product/update/{{$product->id}}" method="post" enctype="multipart/form-data" >



                        <panel title="Title">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Title" value="{{$product->name}}}">
                            </div>


                        <panel title="Description">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="description" id="description" rows="3"  />{{$product->description}}}</textarea>
                        </div>
                            </panel>
                        </panel>
                        <panel title="Category">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2" ></label>
                            <select class="custom-select custom-select-lg mb-3" name="id_category">
                                <option selected value="{{$product->id_category}}">{{$product->category->name}}</option>
                                @foreach($category as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach

                            </select>
                        </div>
                            </panel>
                        <panel title="Image">


                            <div class="form-group">
                                <label for="image">upload image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <hr>
                                <img src=" {{$product->image}}" width="100" height="100" />
                            </div>
                            </panel>
                        <panel title="Price">
                        <div class="form-group">
                            <label for="descricao"></label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="$ 0.00" value="{{$product->price}}"   >
                        </div>
                        </panel>


                        <button type="submit" class="btn btn-default">Edit</button>

                    </form>




            </div>
        </div>
    </div>




    @endsection

