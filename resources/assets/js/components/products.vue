<template>


    <div>

        <div>
            <input type="text" class="form-control" placeholder="Filter list below" v-model="search"/>

        </div>
        <table class="table table-hover table-condensed">
            <thead class="thead-dark">
            <tr>
                <th scope="col">image</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="p in filterProduct  ">

                <th>{{p.image}}</th>
                <td>{{p.id_category}}</td>
                <td>{{p.name}}</td>
                <td>{{p.description}}</td>
                <td>{{p.price}}</td>
                <td>
                    <a href="/product/destroy/"> Delete"</a>|

            </tr>


            </tbody>
        </table>

    </div>


</template>

<script>

    export default {
        props: ['prod'],

        data () {

            return {

                search:''


            }
        },

        computed: {
            filterProduct: function () {
                var self = this
                return self.prod.filter(function (p) {
                    return p.name.indexOf(self.search) !== -1
                })
            }
        }



    }


</script>


