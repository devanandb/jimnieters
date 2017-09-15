@extends('layouts.app')

@section('title'){{ $article->title }}@endsection
@section('meta')
<meta name="description" content="{{$article->summary}}">
<meta name="keywords" content="@foreach ($article->tags as $tag){{$tag->name}}, @endforeach">

<meta property="og:title" content="{{ $article->title }}">
<meta property="og:description" content="{{ $article->summary }}">
<meta property="og:image" content="{{ Request::root() }}{{ $article->hero_img }}">
<meta property="og:url" content="{{ request()->fullUrl() }}">
<meta property="og:type" content="article" />

<meta name="twitter:title" content="{{ $article->title }}">
<meta name="twitter:description" content="{{ $article->summary }}">
<meta name="twitter:image" content="{{ Request::root() }}{{ $article->hero_img }}">
<meta name="twitter:card" content="{{ request()->fullUrl() }}">
@endsection

@section('content')

<div class="article-title-block" uk-sticky>
    <div class="uk-container">
        <h1 class="uk-width-3-4@m">{{ $article->title }}</h1>
        <div class="meta-block uk-width-3-4@m">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-flex uk-flex-middle">
                        <img class="uk-border-circle" src="/images/jim.jpg" width="50" height="50">
                        <div class="meta-info"><span class="by">by &nbsp;</span><span class="author">Jim Nieters</span><br><span class="meta-desc">Co-founder and Chief UX Strategist | <a target="_blank" href="http://www.experienceoutcomes.com/">Experience Outcomes</a></span></div>

                        
                    </div>
                    <div class="back-link">
                        <a href="#" class="uk-icon-link" uk-icon="icon: chevron-left"></a> <a class="uk-button uk-button-text" href="{{ url()->previous() }}">Back</a>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-text-right">
                        <div class="uk-flex uk-flex-middle uk-flex-right" style="height: 50px">
                            <div class="social-buttons">
                                {{-- <a target="_blank" href="https://www.linkedin.com/in/jimnieters/en" class="uk-icon-button uk-margin-small-right" uk-icon="icon: linkedin"></a> --}}
                                {{-- <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: facebook"></a>
                                <a target="_blank" href="https://twitter.com/jimnieters" class="uk-icon-button uk-margin-small-right" uk-icon="icon: twitter"></a>
                                <a target="_blank" href="https://plus.google.com/118351713961437921299/posts" class="uk-icon-button uk-margin-small-right" uk-icon="icon: google-plus"></a> --}}
                                <div class="addthis_inline_share_toolbox"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-container">
    
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-3-4@m">
            
            {{-- <div class="img-card" style="background-image:url()">&nbsp;</div> --}}
            <img class="hero-image" src="{{ $article->hero_img }}" alt="{{ $article->title }}">
            {{-- <p>{{ $article->summary }}</p> --}}
            
            <div class="article-content">
                {!! $article->body !!}
            </div>

            
        </div>
        <div class="uk-width-1-4@m">
            {{-- <div class="social-buttons">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}">
                    Facebook
                </a>
                https://www.facebook.com/v2.10/dialog/share_open_graph?
                action_properties=%7B%22object%22%3A%7B%22
                    og%3Aurl%22%3A%22https%3A%2F%2Fjimnieters.dev%2Fcontent%2Flean-ux-reduce-learning-from-six-months-to-six-weeks%22%2C%22
                    og%3Atitle%22%3A%22Nice%20title%22%2C%22
                    og%3Adescription%22%3A%22As%20Eric%20Ries%20suggests%20in%20The%20Lean%20Startup%2C%20companies%20that%20succeed%20in%20the%20Internet%20age%20are%20those%20that%20pivot%20the%20fastest%20to%20changing%20market%20demands.%22%2C%22
                    og%3Aimage%22%3A%22https%3A%2F%2Fjimnieters.dev%2Fimages%2FIFE-w-Airplane-shorter.png%22%7D%7D
                    &action_type=og.shares&app_id=1453895354656104&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F5oivrH7Newv.js%3Fversion%3D42%23cb%3Df25af9b6bb2084%26domain%3Dapps.lazza.dk%26origin%3Dhttps%253A%252F%252Fapps.lazza.dk%252Ff352bb386bbc398%26relation%3Dopener&display=popup&e2e=%7B%7D&locale=en_US&mobile_iframe=false&next=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F5oivrH7Newv.js%3Fversion%3D42%23cb%3Df2b273ea7d09984%26domain%3Dapps.lazza.dk%26origin%3Dhttps%253A%252F%252Fapps.lazza.dk%252Ff352bb386bbc398%26relation%3Dopener%26frame%3Df29b5f2e1b2cebc%26result%3D%2522xxRESULTTOKENxx%2522&sdk=joey&version=v2.10
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}">
                    Twitter
                </a>
            </div> --}}
            <div class="tags-grid" uk-sticky="offset: 130; bottom: true">
                @foreach ($article->tags as $tag)
                    <a href="/tag/{{ $tag->slug }}" class="each-tag">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection