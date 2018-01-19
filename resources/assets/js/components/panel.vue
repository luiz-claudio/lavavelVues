<template>


    <div class="panel panel-info">
        <div class="panel-heading"><b>{{title}}</b>



            <slot> </slot>

        </div>
    </div>






</template>

<script>

    export default {
        props: ['title'],

        data () {

            return {




            }
        },





    }


</script>


