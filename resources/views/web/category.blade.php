@extends('layouts.app')
@section('title')
    {{$category->title}}
@endsection

@section('meta')
<meta name="description" content="{{$category->description}}">
<meta name="keywords" content="{{$category->title}}, Article, Portfolio, User experience, Design, Leadership">
@endsection

@section('content')
<div class="uk-container collection-page">
    <div class="category-header">
        <h1>{{$category->title}}</h1>
        <h3 class="uk-width-4-5@m">
            {{$category->description}}
        </h3>
    </div>
        {{-- <div class="uk-width-1-3@m">
            <div class="uk-card">
                <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $category->image }});">
                    
                </div>
                <div class="uk-card-body">
                    <p>{{ $category->description }}</p>
                    
                </div>
                <div class="uk-card-footer">
                    <a class="uk-button uk-button-text" href="/category/{{$category->slug}}">Read more about <span>{{ $category->title }}</span></a>
                </div>
            </div>
        </div> --}}
    <div class="each-category uk-grid-small" uk-grid>
        
        <div class="uk-width-2-3@m">
            <div class="uk-grid-small uk-grid-match" uk-grid uk-height-match="target: .uk-card > .uk-card-body > .uk-card-title">
                @foreach ($category->articles->take(4) as $article)
                    <div class="uk-width-1-2@m each-article">
                        <div class="uk-card">
                            <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                {{-- <img src="{{ $article->hero_img }}" alt=""> --}}
                            </div>
                            <div class="uk-card-body">
                                <a href="/content/{{$article->slug}}" class="uk-card-title uk-text-left">{{ $article->title }}</a>

                                {{-- <p>
                                    {{ $article->summary }}
                                </p> --}}
                                <div uk-grid>
                                    <div class="uk-width-4-5 uk-text-truncate">
                                        
                                        <div class="uk-text-meta">
                                            <span>{{ $article->created_at->diffForHumans() }}</span> {{-- <span>5 mins read</span> --}}
                                        </div>
                                    </div>
                                    <div class="uk-width-1-5 uk-flex uk-flex-middle">
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
        <div class="uk-width-1-3@m">
            <div class="uk-card">
                <div class="uk-card-media-top uk-background-cover uk-flex uk-flex-center uk-flex-middle" style="background-image: linear-gradient(-225deg, #5753C9 0%, #6E7FF3 100%);">
                    <div class="lead-txt">Subscribe now</div>
                    
                    {{-- <img src="{{ $article->hero_img }}" alt=""> --}}
                </div>
                <div class="uk-card-body">
                    <p>Get fresh articles on various aspects of Design, Leadership and User Experience with online resources weekly, straight to your inbox!</p>
                    <p>
                        It's quick, free and easy.
                    </p>
                </div>
                <div class="uk-card-footer">
                    <subscribe></subscribe>
                </div>
            </div>
            
        </div>
    </div>
    <div class="each-category uk-grid-small" uk-grid>
        
        <div class="uk-grid-small" uk-grid>
            @foreach ($category->articles as $article)
                @if ($loop->iteration > 4 && $loop->iteration < 7)
                    <div class="uk-width-1-2@m">
                        <div class="uk-card card-horizontal uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <a href="/content/{{$article->slug}}" class="uk-card-title uk-text-left">{{ $article->title }}</a>
                                </div>
                                <div class="card-footer" uk-grid>
                                    <div class="uk-width-3-4 uk-flex uk-flex-middle">
                                            <span class="uk-text-meta">{{ $article->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="uk-width-1-4 uk-flex uk-flex-middle">
                                        <a href="/content/{{$article->slug}}" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- expr --}}
            @endforeach
        </div>
    </div>
    <div class="each-category uk-grid-small" uk-grid uk-height-match="target: .uk-card > .uk-card-body > .uk-card-title"> 
        @if (count($category->articles) > 6)
                @foreach ($category->articles as $article)
                    @if ($loop->iteration > 6 && $loop->iteration < 10)
                        <div class="uk-width-1-3@m each-article">
                            <div class="uk-card">
                                <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                </div>
                                <div class="uk-card-body">
                                    <a href="/content/{{$article->slug}}" class="uk-card-title uk-text-left">{{ $article->title }}</a>
            
                                    <div uk-grid>
                                        <div class="uk-width-4-5 uk-text-truncate">
                                            
                                            <div class="uk-text-meta">
                                                <span>{{ $article->created_at->diffForHumans() }}</span> {{-- <span>5 mins read</span> --}}
                                            </div>
                                        </div>
                                        <div class="uk-width-1-5 uk-flex uk-flex-middle">
                                            <a href="/content/{{$article->slug}}" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                
                <div class="uk-width-1-3@m each-article">
                    <div class="uk-card">
                        <div class="uk-card-media-top other-category uk-background-cover uk-flex uk-flex-center uk-flex-middle" style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
                            @foreach ($categories as $ocategory)
                                @if ($category->id != $ocategory->id && $loop->iteration < 2)
                                    <div class="lead-txt">{{$ocategory->title}}</div>
                                @endif
                            @endforeach
                            
                            
                            {{-- <img src="{{ $article->hero_img }}" alt=""> --}}
                        </div>
                        {{-- <a href="" class="uk-card-title uk-text-left">{{ $article->title }}</a> --}}
                        
                        @foreach ($categories as $ocategory)
                            @if ($category->id != $ocategory->id && $loop->iteration < 2)
                                <div class="uk-card-body">
                                    
                                    <a href="/category/{{$ocategory->slug}}" class="uk-card-title uk-text-left">Read articles on {{$ocategory->title}}</a>
                                    <div uk-grid>
                                        <div class="uk-width-4-5 uk-text-truncate">
                                            
                                            <div class="uk-text-meta">
                                                <span>{{ count($ocategory->articles) }} Articles</span> {{-- <span>5 mins read</span> --}}
                                            </div>
                                        </div>
                                        <div class="uk-width-1-5 uk-flex uk-flex-middle">
                                            <a href="" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
        @endif
    </div>
        @if (count($category->articles) > 10)
            <div class="uk-grid-small uk-grid-match" uk-grid uk-height-match="target: .uk-card > .uk-card-body > .uk-card-title">
                @foreach ($category->articles as $article)
                    @if (true)
                        <div class="uk-width-1-3@m each-article">
                            <div class="uk-card">
                                <div class="uk-card-media-top uk-background-cover" style="background-image: url({{ $article->hero_img }});">
                                </div>
                                <div class="uk-card-body">
                                    <a href="/content/{{$article->slug}}" class="uk-card-title uk-text-left">{{ $article->title }}</a>
                                    <div uk-grid>
                                        <div class="uk-width-4-5 uk-text-truncate">
                                            
                                            <div class="uk-text-meta">
                                                <span>{{ $article->created_at->diffForHumans() }}</span> {{-- <span>5 mins read</span> --}}
                                            </div>
                                        </div>
                                        <div class="uk-width-1-5 uk-flex uk-flex-middle">
                                            <a href="/content/{{$article->slug}}" class="uk-icon-button uk-float-right" uk-icon="icon: chevron-right"></a>
                                        </div>
                                    </div>
                                    {{-- <p>{{ $category->description }}</p> --}}
                                </div>
                            </div>
                            
                        </div>
                    @endif
                    
                @endforeach
            </div>
        @endif
    </div>

   
</div>
<br><br><br>
@endsection