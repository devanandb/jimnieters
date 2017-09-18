@extends('layouts.app')

@section('title')
    Home
@endsection
@section('meta')
<meta name="description" content="I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.">
<meta name="keywords" content="Jim Nieters, Portfolio, Blog, User experience, Design, Leadership">

<meta property="og:title" content="Home | Jim Nieters">
<meta property="og:description" content="I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.">
<meta property="og:image" content="{{ Request::root() }}/images/jim.jpg">
<meta property="og:url" content="{{ request()->fullUrl() }}">
<meta property="og:type" content="home" />

<meta name="twitter:title" content="Home | Jim Nieters">
<meta name="twitter:description" content="I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.">
<meta name="twitter:image" content="{{ Request::root() }}/images/jim.jpg">
<meta name="twitter:card" content="{{ request()->fullUrl() }}">
@endsection

@section('content')
<br><br><br>
<div class="home-hero">
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-3-4@m">
                <h1>I am a ux leader who loves to inspire and be inspired by design. Great design <span>disrupts markets</span> and <span>delights users</span>.</h1>
            </div>
        </div>
    </div>
</div>

<div class="category-section">
    <div class="uk-container">
        @foreach ($categories as $category)
            @if (count($category->articles))
                {{-- expr --}}
            
            <div class="each-category">
                <div class="header">
                    <div class="" uk-grid>
                        <div class="uk-width-1-1@m">
                            <h2 class="title">{{ $category->title }}</h2> <span class="uk-float-right">{{ count($category->articles) }} entries</span>
                        </div>
                        {{-- <div class="uk-width-1-2@m">
                            <div class="uk-text-right">
                                <a href="/category/{{$category->slug}}" class="uk-button uk-button-text">More</a>
                            </div>
                        </div> --}}
                    </div> 
                </div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="uk-card">
                            <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $category->image }});">
                                {{-- <img src="{{ $category->image }}" alt=""> --}}
                            </div>
                            <div class="uk-card-body">
                                {{-- <h3 class="uk-card-title">Media Top</h3> --}}
                                <p>{{ $category->description }}</p>
                                
                            </div>
                            <div class="uk-card-footer">
                                <a class="uk-button uk-button-primary" href="/category/{{$category->slug}}">Read more about <span>{{ $category->title }}</span></a>
                                {{-- <span uk-icon="icon: chevron-right; ratio: .7"></span> --}}
                            </div>
                        </div>
                        {{-- <div class="cat-img" style="background: url();">
                            <img src="{{ $category->image }}" alt="">
                        </div> --}}
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid-small" uk-grid>
                            @foreach ($category->articles->take(4) as $article)
                                <div class="uk-width-1-2@m each-article">
                                    <div class="uk-card ">
                                        <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                            {{-- <img src="{{ $article->hero_img }}" alt=""> --}}
                                        </div>
                                        <div class="uk-card-body">
                                            <div uk-grid>
                                                <div class="uk-width-4-5@m uk-text-truncate">
                                                    <a href="/content/{{$article->slug}}" class="uk-button uk-button-text uk-card-title uk-text-left">{{ $article->title }}</a>
                                                    <div class="uk-text-meta">
                                                        <span>{{ $article->created_at->diffForHumans() }}</span> {{-- <span>5 mins read</span> --}}
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-5@m uk-flex uk-flex-middle">
                                                    <a href="/content/{{$article->slug}}" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                                </div>
                                            </div>
                                            {{-- <p>{{ $category->description }}</p> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>


{{-- <div class="bg-awesome">
    <div class="bg-img"></div>
</div> --}}
{{-- <div class="uk-container">
    <div class="hero-section">
        <div class="" uk-grid>
            <div class="uk-width-1-2@m">
                <div></div>
            </div>
        </div>
        
    </div>

    <section class="categories">
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid-large" uk-grid>
            @foreach ($categories as $category)
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <div class="img-card" style="background-image:url({{ $category->image }})">
                            </div>
                            <div class="overlay"></div>
                            <h3 class="uk-card-title">{{ $category->title }}</h3>
                        </div>
                        <div class="uk-card-body">
                            
                            <p>{{ $category->description }}</p>
                        </div>
                        <div class="uk-card-footer">
                            <a href="/category/{{$category->slug}}" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <br><br><br>
</div> --}}
@endsection