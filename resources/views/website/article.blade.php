@extends('layouts.website')
@section('content')

<section id="info-gallery">
    <div class="container info-gallery-container">
        <div class="row gy-5 justify-content-between first-row">
            <h2 class="text-center">{{ $article->title }}</h2>
            <div class="first-row-blog">
                <div class="first-row-blog-blog mt-md-0">
                    <span>اسم الكاتب: {{ $article->writer_name }}</span>
                </div>
                <div class="first-row-blog-blog two">
                    <span>{{ \Carbon\Carbon::parse($article->date_added)->format('d/m/y') }}</span>
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
                <div class="col-lg-6 col-12">
                    <div class="row-three-block-read-more" data-aos="fade-left" data-aos-duration="1000">
                        <div class="one-div">
                            <img src="../imgs/read-more-in-blog-1.png" class="img-fluid" alt="img">
                            <div class="group-buttons">
                                <a href="#">تحليل</a>
                                <a href="#">تسويق</a>
                            </div>
                        </div>
                        <div class="info-row-three-block-read-more">
                            <h4>دراسة الجدوى الاقتصادية</h4>
                            <p>هذا النص هو نص تجريبي لتعويض نص حقيقي سيزود لاحقاً، هذا النص هو نص تجريبي لتعويض نص
                                حقيقي سيزود لاحقاً، هذا النص هو نص
                                تجريبي لتعويض نص حقيقي سيزود لاحقاً.</p>
                            <a href="#">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row-three-block-read-more">
                        <div class="one-div">
                            <img src="../imgs/read-more-in-blog-2.png" class="img-fluid" alt="img">
                            <div class="group-buttons">
                                <a href="#">تحليل</a>
                                <a href="#">تسويق</a>
                            </div>
                        </div>
                        <div class="info-row-three-block-read-more">
                            <h4>دراسة الجدوى الاقتصادية</h4>
                            <p>هذا النص هو نص تجريبي لتعويض نص حقيقي سيزود لاحقاً، هذا النص هو نص تجريبي لتعويض نص
                                حقيقي سيزود لاحقاً، هذا النص هو نص
                                تجريبي لتعويض نص حقيقي سيزود لاحقاً.</p>
                            <a href="#">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
