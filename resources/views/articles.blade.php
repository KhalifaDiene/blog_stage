@extends('layouts.app')

@section('title ')
    Blog
@endsection

@section('content')
<section>
    <div class="container com-sp pad-bot-0">
        {{-- <div class="row">
            <div class="col-md-12">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Articles</h4>
                        <p>La liste de mes articles.</p>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="ho-event pg-eve-main pg-blog">
            <ul>
                @foreach ($categories as $category)
                <li>
                    <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                    </div>
                    <div class="pg-eve-desc pg-blog-desc">
                        <a href="event-register.html">
                            @foreach ($category->articles as $article)
                                <h4>{{ $article->title }}</h4>
                            @endforeach
                        </a>
                        <img src="images/blog/6.jpg" alt="">
                        <div class="share-btn blog-share-btn">
                            <ul>
                                <li><a href="#">{{ $category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        @foreach ($category->articles as $article)
                        <p>{!! $article->content !!}</p>
                        <span>9:15 am – 5:00 pm</span>
                        @endforeach

                    </div>
                    <div class="pg-eve-reg pg-blog-reg">
                        <a href="blog-details.html">Read more</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection
