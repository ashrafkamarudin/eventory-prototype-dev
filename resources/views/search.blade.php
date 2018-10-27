@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="well well-sm">
                <div class="form-group col-9">
                    <div class="input-group input-group-md">
                        <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                        <span class="input-group-btn pull-right">
                            <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search!</button>
                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                        </span>
                    </div><br>
                    <div class="alert alert-danger" role="alert" v-if="error">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        @{{ error }}
                    </div>
                </div>
            </div>

            <div class="col-9" id="products" v-for="product in products">
                <div class="card" >
                      <div class="card-body tags">
                        <h5 class="card-title"> @{{ product.title }} </h5>
                        <p class="card-text">
                          @{{ product.content }}
                        </p>
                          <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a> <a href="#">#Business</a>
                        <hr>
                        <a href="{{url('event/')}}/@{{product.slug}}">Read more</a>
                        <div class="d-flex pull-right">
                        </div>
                      </div>
                </div><br>
            </div>

        </div>
    </div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>

<script type="text/javascript">
    new Vue({
        el: 'body',
        data: {
            products: [],
            loading: false,
            error: false,
            query: ''
        },
        methods: {
            search: function() {
                // Clear the error message.
                this.error = '';
                // Empty the products array so we can fill it with the new products.
                this.products = [];
                // Set the loading property to true, this will display the "Searching..." button.
                this.loading = true;

                // Making a get request to our API and passing the query to it.
                this.$http.get('/api/search?q=' + this.query).then((response) => {
                    // If there was an error set the error message, if not fill the products array.
                    response.body.error ? this.error = response.body.error : this.products = response.body;
                    // The request is finished, change the loading to false again.
                    this.loading = false;
                    // Clear the query.
                    this.query = '';
                });
            }
        }
    });
</script>
@endsection
