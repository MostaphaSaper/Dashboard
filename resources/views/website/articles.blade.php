@extends('layouts.website')
@section('title', 'المدونة')
@section('content')

<section id="header" class="blog-bg">
     @include('components.website.navbar')
    <div class="headerContent">
        <h1>المدوّنة</h1>
    </div>
</section>

<section id="our-gallery">
    <div class="container">
        {{-- <div class="filter-text" data-aos="fade-down" data-aos-duration="1000">
            @foreach ($tags as $tag)
                <span>{{ $tag->tag_name }}</span>
            @endforeach

        </div>
        <div class="search" data-aos="fade-down" data-aos-duration="1000">
            <input type="text" placeholder="البحث" class="form-control">
            <button>ابحث</button>
        </div>
        <div class="main-block">
            @foreach ($articles as $article)
                <div class="block">
                    <a href="{{ route('website.article',$article) }}" data-aos="fade-up-left" data-aos-duration="1000">
                        <img src="{{ $article->main_image() }}" class="img-fluid " alt="img">
                        <div class="top">
                            @foreach ($article->tags as $tag)
                                <button>{{ $tag->tag_name }}</button>
                            @endforeach
                        </div>
                        <div class="bottom">
                            <h4>{{ $article->title }}</h4>
                            <p>{{ $article->meta_description }}</p>
                            <span>اقرأ المزيد</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div> --}}
        <livewire:article-search/>
        <div class="search-2">
            <h5 >انـضـم لـنـشـرتـنـا الـبـريـديـة</h5>
            <p >مقالات غنية بالمعلومات المفيدة</p>
            <div >
                <input type="text" placeholder="البريد الالكتروني" class="form-control">
                <a href="https://slsalah.space/signup">
                    <button>سجل الآن</button>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
