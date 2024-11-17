@extends('layouts/app')

@section('title')
    <title>Lara Coffee News</title>
@endsection

@section('content')

<section class="recent-posts">
            <div class="container">
                <div class="recent-posts-blog__wrapper">
                    <div class="recent-posts__leftpart">
                        <div class="recent-posts-blog__title _big-title">
                            Recent blog posts</br>
                             Explore <span class="ellipsed">now</span>
                        </div>
                        @can('create', \App\Models\Product::class)
                        <div class="recent-posts__all_btn black-btn">
                            <a href="/blog/create"><button type="button" class="btn btn-primary">Create New Post</button></a>
                        </div>
                        @endcan
                    </div>
                    <div class="recent-posts__rightpart">
                        <div class="recent-posts__row">
                          @foreach($news as $news)
                            <div class="recent-posts__coll-item posts-card">
                                <div class="posts-card__img position-relative">
                                    <!--<img src="storage/img/recent_posts/1.jpg" alt="coffee shop post image">  -->
                                    <img src="{{$news->image;}}" alt="coffee shop post image">
                                    @can('viewAny',   \App\Models\Showcaseitem::class)
                                        <a class="position-absolute" style="left:10px;" href="/blog/{{$news->id}}/edit"><button type="submit" class='btn btn-primary my-4'>Edit Post</button></a>
                                    @endcan
                                </div>
                                <div class="posts-card__info">
                                    <div class="posts-card__date-author">
                                        <div class="posts-card__date">
                                            {{$news->created_at}}

                                            <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                        </div>
                                        <div class="posts-card__author">
                                            {{$news->author;}}

                                            <img src="storage/img/svg.qodef-svg--underline.png" alt="underline">
                                        </div>
                                    </div>
                                    <div class="posts-card__title">
                                        {{$news->title}}

                                    </div>
                                    <div class="posts-card__author">
                                            {{$news->description}}


                                    </div>
                                    <div class="posts-card__infomore _infomore">
                                        <button type="button" class="our-blends__infobtn _infomore__btn">Read More</button><img class="our-blends__infoimg" src="storage/img/arrow.png">
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
