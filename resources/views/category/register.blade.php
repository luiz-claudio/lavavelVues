@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                    <form css="" action="/admin/category/store" method="post" enctype="multipart/form-data" >

                        <panel title="Title">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Title" value="{{ old('name') }}">
                            </div>
                        </panel>

                        <button type="submit" class="btn btn-info">Add</button>

                    </form>

            </div>
        </div>
    </div>

    @endsection

