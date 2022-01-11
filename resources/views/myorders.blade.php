@extends('master')
@section('content')
    <div class="container-fluid p-0">
        <div class="trending-container p-3 mt-3">
            <h5>My orders</h5>
            <div class="row mt-5">
                <div class="col-sm-12">
                    @foreach ($orders as $item)
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
                                    <p>Address: {{$item->address}}</p>
                                    <p>Status: {{$item->status}}</p>
                                    <p>Pyament method: {{$item->payment_method}}</p>
                                    <p>Payment status: {{$item->payment_status}}</p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="trending-products w-100 d-flex justify-content-center align-items-center text-center pt-2">
                                <a  href="/cancelorder/{{$item->id}}" class="btn btn-warning">Cancel Order</a>
                            </div>
                        </div>
                    </div>                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection