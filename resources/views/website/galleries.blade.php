@extends('layouts.website')
@section('content')
    <section id="header" class="gallery-bg">
        <div class="headerContent">
            <h1>معرض الأعمال</h1>
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
            <div class="main-block-gallery">
                @foreach ($galleries as $gallery)
                    <a href="{{ route('website.gallery',$gallery) }}" class="gallery-block" data-aos="fade-left" data-aos-duration="1000">
                        <figure>
                            <img src="{{ $gallery->main_image() }}" class="img-fluid" alt="gallery">
                        </figure>
                        <div class="gallery-block-content">
                            @foreach ($gallery->tags as $tag)
                                <span>{{ $tag->tag_name }}</span>
                            @endforeach
                            <h3>{{ $gallery->project_title }}</h3>
                            <p>{{ $gallery->about_project }}</p>
                        </div>
                    </a>
                @endforeach
                <button>المزيد</button>
            </div>
        </div>
    </section>
@endsection
