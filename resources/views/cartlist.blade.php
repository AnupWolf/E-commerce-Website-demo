@extends('master')
@section('content')

<div class=" container">
    <h3>Cart Lists</h3><br>
    <a href="/ordernow" class="btn btn-success ">Order Now</a><br><br>
    <div class="">
        @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->image}}">
                </a>
            </div>
            <div class="col-sm-3">
                <div class="">
                    <h3>{{$item->name}}</h3>
                    <h4>{{$item->description}}</h4>
                </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="/removeCart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart</a>
            </div>
        </div>
        @endforeach <br>
        <a href="/ordernow" class="btn btn-success">Order Now</a>
    </div>
</div>

@endsection