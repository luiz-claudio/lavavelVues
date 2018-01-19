@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                    <form css="" action="/admin/product/setimport" method="post" enctype="multipart/form-data" >



                        <panel title="Import List Csv Products">
                            <div class="form-group">
                                <label for="image">upload image</label>
                                <input type="file" class="form-control-file" id="image">
                            </div>
                            </panel>

                        <button type="submit" class="btn btn-info">Add</button>

                    </form>




            </div>
        </div>
    </div>




    @endsection

