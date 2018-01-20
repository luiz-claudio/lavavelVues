@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-11">

                <panel title ='List import Products'>
                    <table-list
                            :title="['#','File','Date','Status']"

                            :items="{{$import}}"
                            newitem="/admin/product/import" order="desc" ordercol="1">


                    </table-list>
                </panel>

            </div>
        </div>
    </div>




    @endsection

