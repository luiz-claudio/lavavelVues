@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-11">

                <panel title ='Products'>
                    <table-list
                            :title="['#','name']"

                            :items="{{$users}}"
                            newitem="/admin/users/register" order="desc" ordercol="1">

                    </table-list>
                </panel>

            </div>
        </div>
    </div>




    @endsection

