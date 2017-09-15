@extends('layouts.admin')

@section('title')
    Home
@endsection
@section('meta')
<meta name="description" content="I am a ux leader who loves to inspire and be inspired by design. Great design disrupts markets and delights users.">
<meta name="keywords" content="Jim Nieters, Portfolio, Blog, User experience, Design, Leadership">

@endsection

@section('content')
    <br><br><br>
    <div class="uk-container">
        <h1>Admin dashboard</h1>
        <br><br>
        <div uk-grid>
            <div class="uk-width-1-5@m tags-menu">
                <ul class="uk-tab-left tag-links uk-list" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Tags</a></li>
                    <li><a href="#">Subscriptions</a></li>
                </ul>

            </div>
            <div class="uk-width-4-5@m">
                <ul id="component-tab-left" class="uk-switcher">
                    <li>
                        <table class="uk-table uk-table-responsive uk-table-divider">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Updated at</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $article->id }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->updated_at->diffForHumans() }}</td>
                                        <td><a href="/content/{{ $article->slug }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-responsive uk-table-divider">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Updated at</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->updated_at->diffForHumans() }}</td>
                                        <td><a href="/content/{{ $category->slug }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-responsive uk-table-divider">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Updated at</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->updated_at->diffForHumans() }}</td>
                                        <td><a href="/content/{{ $tag->slug }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <table class="uk-table uk-table-responsive uk-table-divider">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Updated at</th>
                                    {{-- <th>View</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $subscription)
                                    <tr>
                                        <td>{{ $subscription->id }}</td>
                                        <td>{{ $subscription->name }}</td>
                                        <td>{{ $subscription->email }}</td>
                                        <td>{{ $subscription->updated_at->diffForHumans() }}</td>
                                        {{-- <td><a href="/content/{{ $subscription->slug }}">View</a></td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection