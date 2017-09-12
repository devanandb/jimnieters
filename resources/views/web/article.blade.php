@extends('layouts.app')

@section('title'){{ $article->title }}@endsection
@section('meta')
<meta property="description" content="{{$article->summary}}">
<meta property="keywords" content="@foreach ($article->tags as $tag){{$tag->name}}, @endforeach">

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
    <div class="article-view" uk-grid>
        <div class="uk-width-1-5@m"></div>
        <div class="uk-width-3-5@m">
            <h1>{{ $article->title }}</h1>
            {{-- <div class="img-card" style="background-image:url()">&nbsp;</div> --}}
            <img class="hero-image" src="{{ $article->hero_img }}" alt="{{ $article->title }}">
            {{-- <p>{{ $article->summary }}</p> --}}
            
            <div class="article-content">
                {!! $article->body !!}
            </div>

            
        </div>
        <div class="uk-width-1-5@m">
            <div class="tags-grid">
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