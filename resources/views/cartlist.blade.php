@extends('master')
@section('content')
    <div class="container-fluid p-0">
        <div class="trending-container p-3 mt-3">
            <h5>Result Products</h5>
            <a href="/ordernow" class="btn btn-success mt-5 ms-5">Order Now</a>
            <div class="row mt-5">
                <div class="col-sm-12">
                    @foreach ($products as $item)
                    <div class="row  border-bottom">
                        <div class="col-sm-3">
                            <div class="trending-products w-100 d-flex justify-content-center align-items-center text-center pt-2">
                                <a href="/details/{{$item->id}}">
                                <img src="{{$item->imageUrl}}" class="trending-img" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="trending-products w-100 d-flex justify-content-center align-items-center text-center pt-2">
                                <a href="/details/{{$item->id}}">
                                <div class="mt-2 mb-2">
                                    <h5>{{$item->name}}</h5>
                                    <p>{{$item->description}}</p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="trending-products w-100 d-flex justify-content-center align-items-center text-center pt-2">
                                <a  href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
                            </div>
                        </div>
                    </div>                    
                    @endforeach
                </div>
            </div>
            <a href="/ordernow" class="btn btn-success mt-5 ms-5">Order Now</a>
        </div>
    </div>
@endsection