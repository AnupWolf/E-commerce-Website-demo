@extends('master')
@section('content')

<div class=" custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @php $i =1; @endphp
            @foreach ($products as $item)
            <div class="item {{$i=='1'?'active':''}}">
                @php $i++; @endphp
                <a href="detail/{{$item->id}}">
                    <img class="slider-img" src="{{$item->image}}" alt="First slide">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class=" text-center">
    <h1>Trending Products</h1><br>
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item->id}}">
                <img class="trending-img" src="{{$item->image}}">
                <div class="">
                    <h4>{{$item->name}}</h4>
                    <h5 class="btn btn-success">View Detail</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection