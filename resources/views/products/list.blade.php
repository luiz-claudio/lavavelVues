@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-11">

                <panel title ='Products'>
                    <table-list
                            :title="['#','Image','Category','Title',
                            'Description','Price']"

                            :items="{{$products}}"
                            newitem="/admin/product/register" edit="/admin/product/show/" del="/admin/product/destroy/" order="desc" ordercol="1">


                    </table-list>


                </panel>

            </div>
        </div>
    </div>




    @endsection

