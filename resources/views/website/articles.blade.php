@extends('layouts.website')
@section('content')
<section id="header" class="blog-bg">
    <div class="headerContent">
        <h1>المدوّنة</h1>
    </div>
</section>

<section id="our-gallery">
    <div class="container">
        <div class="filter-text" data-aos="fade-down" data-aos-duration="1000">
            @foreach ($tags as $tag)
            {{-- <span class="active">تسويق</span> --}}
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
                    <a href="{{ route('website.article.show',$article) }}" data-aos="fade-up-left" data-aos-duration="1000">
                        <div class="top d-flex align-items-end one">
                            @foreach ($article->tags as $tag)
                                <button>{{ $tag->tag_name }}</button>
                            @endforeach

                        </div>
                        <div class="bottom">
                            <h4>{{ $article->title }}</h4>
                            <p>{!!$article->description!!}</p>
                            <span>اقرأ المزيد</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center"><button class="read-more">اقرأ المزيد</button></div>
        <div class="search-2">
            <h5 data-aos="fade-down" data-aos-duration="1000">انـضـم لـنـشـرتـنـا الـبـريـديـة</h5>
            <p data-aos="fade-down" data-aos-duration="1000">مقالات غنية بالمعلومات المفيدة</p>
            <div data-aos="fade-down" data-aos-duration="1000">
                <input type="text" placeholder="البريد الالكتروني" class="form-control">
                <a href="https://slsalah.space/signup">
                    <button>سجل الآن</button>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
