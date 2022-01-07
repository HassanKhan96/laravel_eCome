@extends('master')
@section('content')
    <div class="container-fluid p-0">
        <div class="trending-container p-3 mt-3">
            <h5>Result Products</h5>
            <div class="row mt-5">
                <div class="col-sm-4 mb-5">
                    Filter
                </div>
                <div class="col-sm-12">
                    @foreach ($products as $item)
                    
                    <div class="trending-products w-100 d-flex justify-content-start align-items-center text-center pt-2">
                        <a href="/details/{{$item['id']}}">
                        <img src="{{$item['imageUrl']}}" class="trending-img" alt="img">
                        <div class="mt-2 mb-2">
                            <h5>{{$item['name']}}</h5>
                            <p>{{$item['description']}}</p>
                        </div>
                        </a>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection