@extends('master')
@section("content")

    <div class="custom-product">
        <div class="trending-wrapper">
            <h3>Results of Products</h3>
            @foreach ($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}"">
                    <div class="">
                        <h3>{{$item['name']}}</h3> 
                        <h5>Category : {{$item['description']}}</h5>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
   
  
@endsection