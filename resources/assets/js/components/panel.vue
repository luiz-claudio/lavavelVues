<template>


    <div class="panel panel-primary">
        <div class="panel-heading"><b>{{title}}</b></div>


            <slot> </slot>

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


