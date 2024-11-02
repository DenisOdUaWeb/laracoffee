@extends('layouts/app')

@section('title')
    <title>Lara Coffee Shop</title>
@endsection

@section('content')


  <div class="container">

    @can('create', \App\Models\Product::class)
    <div class="row add-new-product-form"> <!-- enctype="multipart/form-data"> -->
        <form action="products" method="post" enctype="multipart/form-data">

            <div  class="col-12 input-group m-3 p-3">
                <input placeholder="Product name" class="form-control" name="name" type="text">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <input placeholder="Product price" class="form-control" name="price" type="text">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" name="image" type="file">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <button class="btn btn-primary form-control"  type="submit">Add new product</button>
            </div>
            @csrf
        </form>

    </div>
    @endcan

      <section class="thats-right-for-you">
            <div class="container">
                <div class="thats-right-for-you__text _big-title">
                  Welcome to our shop
                    The Coffee that's right for you
                </div>


                <div class="thats-right-for-you__shop-wrapper">
                    <div class="product-cards  flex-wrap ">
                        @foreach($products as $product)
                        <div class="position-relative">
                            <!-- CAN -->
                            @can('create', \App\Models\Product::class)
                            <form action="products/{{$product->id}}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                            @endcan
                            <!-- CAN -->

                        <div class="product-cards__item product-cards__shop_item">
                            <div class="product-cards__img position-relative">
                                <img src="{{url($product->image)}}"><!-- IMAGE -->
                                <!-- CAN -->
                                @can('create', \App\Models\Product::class)
                                <input  class="form-control position-absolute" style="left:10px;top:10px;" name="image" type="file">
                                @endcan
                                <!-- CAN -->
                            </div>



                            <div class="product-cards__title position-relative">
                                {{$product->name}}
                                @can('create', \App\Models\Product::class)
                                <input value="{{old('name') ?? $product->name}}" class="form-control position-absolute" style="top:0px;left:-5px;width:inherit;" name="name" type="text" placeholder="New name">
                                @endcan
                            </div>
                            <div class="product-cards__price position-relative">
                                {{$product->price}}
                                @can('create', \App\Models\Product::class)
                                <input value="{{old('name') ?? $product->price}}" class="form-control position-absolute" style="top:0px; left:-5px;width:inherit;" name="price" type="text" placeholder="New price">
                                <button type="submit" class='btn btn-primary my-4'>Edit Product</button>
                                @endcan
                            </div>

                            </div>
                            </form>
                            @can('create', \App\Models\Product::class)
                            <form class="position-absolute" style="display:block;bottom:10px;right:10px; width:100px" action="/products/{{ $product->id}}" method="post">
                            @method('DELETE')
                            @csrf
                                <button type="submit" class='btn btn-danger'>Delete Product</button>

                            </form>

                            @endcan
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
  </div>
@endsection
