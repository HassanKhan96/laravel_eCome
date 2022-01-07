@extends('master')
@section('content')
    <div class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel slide custom-carousel-container" data-bs-ride="carousel">
            <div class="carousel-inner border-bottom">
              @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1? 'active': ''}}">
                  <a href="/details/{{$item['id']}}">
                    <img src="{{$item['imageUrl']}}" class="d-block w-100 carousel-img" alt="img">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$item['name']}}</h5>
                        <p>{{$item['description']}}</p>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="trending-container p-3 mt-3">
            <h3>Trending</h3>
            <div class="d-flex">
                @foreach ($products as $item)
                
                  <div class="trending-products text-center pt-2">
                    <a href="/details/{{$item['id']}}">
                      <img src="{{$item['imageUrl']}}" class="trending-img" alt="img">
                      <div class="mt-2 mb-2">
                          <h5>{{$item['name']}}</h5>
                      </div>
                    </a>
                  </div>
                
                @endforeach
            </div>
          </div>
    </div>
@endsection