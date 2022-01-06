@extends('master')
@section('content')

<div class=" custom-product">

    <div class="text-center">
        <h3>Result for Products</h3><br>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->image}}">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h4>{{$item->description}}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection