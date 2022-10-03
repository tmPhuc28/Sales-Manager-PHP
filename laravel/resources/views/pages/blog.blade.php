@extends('layout_pages')
@section('content_pages')
    <section>
        <div class="container">
            <div class="row">
                @include('pages.category')

                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Latest From our Blog</h2>
                        @foreach ($data as $item)
                            <div class="single-blog-post">
                                <h3>{{ $item->Title }}</h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>{{ $item->created_at }}</li>
                                    </ul>
                                </div>
                                <p>{{ $item->Content }}</p>
                                <a  class="btn btn-primary" href="{{ URL::to('/blog-detail/'.$item->idBlog) }}">Read More</a>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection