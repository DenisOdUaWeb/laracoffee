@extends('layouts/app')

@section('title')
    "Lara Shop"
@endsection

@section('content')

  <div class="container">
      <section class="thats-right-for-you">
            <div class="container">
                <div class="thats-right-for-you__text _big-title">
                  Welcome to ur shop
                    The Coffee that's right for you
                </div>
                <div class="thats-right-for-you__shop-wrapper">
                    <div class="product-cards">
                        @foreach($products as $product)
                        <div class="product-cards__item">
                            <div class="product-cards__img">
                                <img src="{{url($product->image)}}">
                            </div>
                            <div class="product-cards__title">
                                {{$product->name}}
                            </div>
                            <div class="product-cards__price">
                            {{$product->price}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
  </div>
@endsection
