@extends('master')
@section('content')
    <div class="container custom-container p-0">
        <div class="row">
            <div class="col-sm-6 detail-img mt-5 mb-5">
                <img src="{{$product['imageUrl']}}" alt="product-img">
            </div>
            <div class="col-sm-6 mt-5 mb-5">
                <a href="/">Go back</a>
                <h3>{{$product['name']}}</h3>
                <h5>Price: {{$product['price']}}</h5>
                <h6>Description: {{$product['description']}}</h6>
                <p>Category: {{$product['category']}}</p>
                <br>
                <span class="pb-3 d-flex">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product['id']}}" name="product_id" />
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                    <button class="btn btn-success ms-3">Buy Now</button>
                </span>
            </div>
        </div>
    </div>
@endsection