@extends('layouts/app')

@section('title')
    <title>Lara Coffee News</title>
@endsection

@section('content')


  <div class="container">


    <div class="row add-new-product-form"> <!-- enctype="multipart/form-data"> -->
        <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf
            <div  class="col-12 input-group m-3 p-3">
                <input placeholder="Post title" class="form-control" name="title" type="text">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <input placeholder="Post author" class="form-control" name="author" type="text">
            </div>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div  class="input-group m-3 p-3">
                <textarea class="form-control" name="description">Post description</textarea>
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

        </form>

    </div>


@endsection
