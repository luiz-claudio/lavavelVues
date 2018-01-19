<template>


    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="container">
                <div class="row">
                    <div class="form-group col-md-2 ">
                <!-- Branding Image -->
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"> {{ title }}</span>

                </a>
            </div>

            <br class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                    <div class="form-group col-md-1 col-lg-offset-0">
                <ul class="nav navbar-nav">
                    <p><a class="btn btn-info btn-default" href="/" role="button">Product</a></p>
                </ul>
                </div>
                <div class="form-group col-md-1 col-lg-offset-0">
            <ul class="nav navbar-nav">
                <p><a class="btn btn-info btn-default" href="/admin/category/list" role="button">Category</a></p>
            </ul>
                </div>
                    <div class="form-group col-md-1 col-lg-offset-0">
                        <ul class="nav navbar-nav">
                            <p><a class="btn btn-info btn-default" href="/admin/product/import" role="button">Import</a></p>
                        </ul>
                    </div>
                    <div class="form-group col-md-1 col-lg-offset-0">
                        <ul class="nav navbar-nav">
                            <p><a class="btn btn-info btn-default" href="/admin/users/list" role="button">Users</a></p>
                        </ul>
                    </div>






                    <div class="form-group col-md-4 col-lg-offset-1">

                        <span aria-hidden="true"> <b>Welcome </b>  {{ user }} </span>


                    </div>

                    <div class="form-group col-md-1 col-lg-offset-0">
                        <ul class="nav navbar-nav">
                            <p><a class="btn btn-info btn-default" href="/logout" role="button"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Exit</span></a></p>
                        </ul>
                    </div>


                    </div>
            </div>
            </div>

        </div>
                <!-- Right Side Of Navbar -->

                    <slot></slot>





    </nav>
</template>

<script>

    export default {
        props: ['title','url','user'],
    }


</script>


