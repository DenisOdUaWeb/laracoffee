@extends('layouts/app')

@section('title')
    <title>Lara Coffee Shop</title>
@endsection

@section('content')

<div class="container">
  @can('create', \App\Models\Product::class)
    <div class="row add-new-product-form"> <!-- enctype="multipart/form-data"> -->
        <form action="/showcase/{{$showcaseitem->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-12 input-group m-3 p-3">
                <input value="{{old('name') ?? $showcaseitem->name}}" placeholder="Product name" class="form-control" name="name" type="text">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <input value="{{old('price') ?? $showcaseitem->price}}" placeholder="Product price" class="form-control" name="price" type="text">
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
                <button class="btn btn-primary form-control"  type="submit">Edit product</button>
            </div>

        </form>

    </div>
    @endcan
</div>
@endsection
