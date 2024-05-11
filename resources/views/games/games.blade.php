@extends('layouts.welcome')
@section('content-games')

    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            @foreach($games as $game)
                 <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{route('product',$game)}}">
                        <img src="{{asset("img/$game->image")}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>${{$game->price}}</p>
                            <h4>{{$game->title}}</h4>
                            <div class="line"></div>
                            <h4>Categoria: {{$game->category->name}}</h4>
                            <br>
                            <div class="line"></div>
                            <p>{{$game->developer}}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

@endsection