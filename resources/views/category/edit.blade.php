@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                    <form css="" action="/admin/category/update/{{$category->id}}" method="post" enctype="multipart/form-data" >

                        <panel title="Title">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Title" value="{{$category->name}}}">
                            </div>
                        </panel>

                        <button type="submit" class="btn btn-default">Edit</button>

                    </form>


            </div>
        </div>
    </div>




    @endsection

