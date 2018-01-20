@extends('layouts.app')

@section('content')

    <div class="form-group col-md-2 col-lg-offset-10">
        <ul class="nav navbar-nav">
            <p><a class="btn btn-info btn-default" href="/admin/product/import/list" role="button">Status List </a></p>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">




                    <form css="" action="/admin/product/setimport" method="post" enctype="multipart/form-data" >



                        <panel title="Import List Csv Products">
                            <div class="form-group">
                                <label for="image">upload image</label>
                                <input type="file" class="form-control-file" id="csv" name="csv">
                            </div>
                            </panel>

                        <button type="submit" class="btn btn-info">Import</button>

                    </form>




            </div>
        </div>
    </div>




    @endsection

