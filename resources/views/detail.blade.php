@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <br><br>
                <img class="detail-image" src="{{$product['gallery']}}"/>
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <br><br>
                <h2>{{$product['name']}}</h2>
                <br>
                <h3>Price : {{$product['price']}} $</h3>
                <h4>Details : {{$product['description']}}</h4>
                <h5>Category : {{$product['category']}}</h5>
                <br><br>
            <button class="btn btn-primary">Add To Cart</button>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            </div>
            
        </div>
    </div>
@endsection