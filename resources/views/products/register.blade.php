@extends('layouts.app')
@section('head')
    @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                    <form css="" action="/admin/product/store" method="post" enctype="multipart/form-data" >



                        <panel title="Title">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Title" value="{{ old('name') }}">
                            </div>
                        </panel>

                        <panel title="Description">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="description" id="description" rows="3"  />{{ old('description') }}</textarea>
                        </div>
                            </panel>
                        <panel title="Category">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2" ></label>
                            <select class="custom-select custom-select-lg mb-3" name="id_category">
                                <option selected ></option>
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
                            </div>
                            </panel>
                        <panel title="Price">
                        <div class="form-group">
                            <label for="descricao"></label>
                            <input type="nu" class="form-control" id="price" name="price" onClick="javascript:this.value=''" value="{{ old('price')}}"   >
                        </div>
                        </panel>

                        <button type="submit" class="btn btn-info">Add</button>

                    </form>




            </div>
        </div>
    </div>




    @endsection

@section('js')




    @endsection

