@extends('layouts.app')

@section('title'){{ $article->title }}@endsection
@section('meta')
<meta name="description" content="{{$article->summary}}">
<meta name="keywords" content="@foreach ($article->tags as $tag){{$tag->name}}, @endforeach">

<meta property="og:title" content="{{ $article->title }}">
<meta property="og:description" content="{{ $article->summary }}">
<meta property="og:image" content="{{ $article->hero_img }}">
<meta property="og:url" content="/content/{{ $article->slug }}">

<meta name="twitter:title" content="{{ $article->title }}">
<meta name="twitter:description" content="{{ $article->summary }}">
<meta name="twitter:image" content="{{ $article->hero_img }}">
<meta name="twitter:card" content="/content/{{ $article->slug }}">
@endsection

@section('content')

<div class="uk-container">
    <div class="article-view">
        {{-- <div class="uk-width-1-5@m"></div> --}}
        
        <h1>{{ $article->title }}</h1>
        <div class="meta-block">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-flex uk-flex-middle">
                        <img class="uk-border-circle" src="/images/jim.jpg" width="50" height="50">
                        <div class="meta-info"><span class="author">Jim Nieters</span><br>Co-founder and Chief UX Strategist | <a target="_blank" href="http://www.experienceoutcomes.com/">Experience Outcomes</a></div>
                    </div>
                </div>
                {{-- <div class="uk-width-1-3@m">
                    <div class="uk-text-right">
                        <div class="uk-flex uk-flex-middle uk-flex-right" style="height: 50px">
                            <div class="meta-info date"><br>{{ $article->updated_at->toFormattedDateString() }}</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
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
                <div class="tags-grid" uk-sticky="offset: 100; bottom: true">
                    @foreach ($article->tags as $tag)
                        <a href="/tag/{{ $tag->slug }}" class="each-tag">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection