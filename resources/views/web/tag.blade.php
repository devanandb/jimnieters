@extends('layouts.app')

@section('meta')
<meta name="description" content="All the tags for articles by Jim Nieters">
<meta name="keywords" content="@foreach ($tags as $metatag){{$metatag->name}}, @endforeach">

@endsection
@section('content')
<div class="uk-container collection-page">
    {{-- <div class="hero-section">
        <div class="" uk-grid>
            <div class="uk-width-1-2@m">
                <div>I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.</div>
            </div>
        </div>
        
    </div> --}}

    <div class="category-header">
        <h1>Tags</h1>
        <h3 class="uk-width-4-5@m">
            Just tags :) 
        </h3>
    </div>

    <div class="" uk-grid>
        <div class="uk-width-1-4@m">

            <div class="tags-menu">
                <ul class="tag-links uk-list">
                    @foreach ($tags as $ctag)
                        @if (count($ctag->articles))
                            <li class="{{ $ctag->id == $tag->id ? 'uk-active' : '' }}">
                                <a href="/tag/{{$ctag->slug}}">{{$ctag->name}}</a>
                            </li>
                        @endif
                        
                    @endforeach
                </ul>
            </div>
            
                
            
        </div>
        <div class="uk-width-3-4@m">
            <div class="each-category">
                
                <div class="uk-grid-small" uk-grid uk-height-match="target: .uk-card > .uk-card-body > .uk-card-title">
                    @foreach ($tag->articles as $article)
                        <div class="uk-width-1-3@m each-article">
                            <div class="uk-card">
                                <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                </div>
                                <div class="uk-card-body">
                                    <a href="/content/{{$article->slug}}" class="uk-card-title uk-text-left">{{ $article->title }}</a>
            
                                    <div uk-grid>
                                        <div class="uk-width-3-4@m uk-text-truncate">
                                            
                                            <div class="uk-text-meta">
                                                <span>{{ $article->created_at->diffForHumans() }}</span> {{-- <span>5 mins read</span> --}}
                                            </div>
                                        </div>
                                        <div class="uk-width-1-4@m uk-flex uk-flex-middle">
                                            <a href="/content/{{$article->slug}}" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>

   
    <br><br><br>
</div>
@endsection