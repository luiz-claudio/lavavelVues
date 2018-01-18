@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                    <form css="" action="/admin/product/store" method="post" enctype="multipart/form-data" >



                        <panel title="Title">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                            </div>
                        </panel>

                        <panel title="Description">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                            </panel>
                        <panel title="Category">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2"></label>
                            <select class="custom-select custom-select-lg mb-3">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                            </panel>
                        <panel title="Image">


                            <div class="form-group">
                                <label for="image">upload image</label>
                                <input type="file" class="form-control-file" id="image">
                            </div>
                            </panel>
                        <panel title="Price">
                        <div class="form-group">
                            <label for="descricao"></label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="$ 0.00">
                        </div>
                        </panel>

                        <button type="submit" class="btn btn-info">Add</button>

                    </form>




            </div>
        </div>
    </div>




    @endsection

