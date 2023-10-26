@extends('layouts.website')
@section('title', 'المدونة')
@section('content')
    <section id="header" class="info-gallery">
        @include('components.website.article_navbar')
    </section>

    <section id="info-gallery">
        <div class="container info-gallery-container">
            <div class="row gy-5 justify-content-between first-row">
                <h2 class="text-center">{{ $article->title }}</h2>
                <div class="first-row-blog">
                    <div class="first-row-blog-blog mt-md-0">
                        <span>الكاتب: {{ $article->writer_name }}</span>
                    </div>
                    <div class="first-row-blog-blog two">
                        <span>{{ date('Y-m-d', strtotime($article->date_added)) }}</span>
                    </div>
                    <div class="first-row-blog-blog">
                        <span>{{ $article->writer_specialty }}</span>
                    </div>
                </div>
            </div>
            <div class="row second-row gy-4">
                <img src="{{ $article->main_image() }}" class="col-12 img-fluid info-gallery-img" alt="info-gallery-img"
                    data-aos="fade-down" data-aos-duration="1000">
                <p class="col-12 mb-0" data-aos="fade-down" data-aos-duration="1000">{!! $article->description !!}</p>
            </div>
            <div class="row-three">
                <h2 data-aos="fade-down" data-aos-duration="1000">اقرأ المزيد</h2>
                <div class="row gy-5">
                    @foreach ($all_articles as $articles)
                        <div class="col-lg-6 col-12">
                            <div class="row-three-block-read-more" data-aos="fade-left" data-aos-duration="1000">
                                <div class="one-div">
                                    <img src="{{ $articles->main_image() }}" class="img-fluid" alt="img">
                                    <div class="group-buttons">
                                        @foreach ($articles->tags as $tag)
                                            <a>{{ $tag->tag_name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="info-row-three-block-read-more">
                                    <h4>{{ $articles->title }}</h4>
                                    <p>{{ $articles->meta_description }}</p>
                                    <a href="{{ route('website.article',$articles) }}">اقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
