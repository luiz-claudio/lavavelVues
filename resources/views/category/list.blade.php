@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-11">

                <panel title ='Categories'>
                    <table-list
                            :title="['#','name']"

                            :items="{{$categories}}"
                            newitem="/admin/category/register" edit="/admin/category/show/" del="#" order="desc" ordercol="1">

                    </table-list>
                </panel>

            </div>
        </div>
    </div>




    @endsection

