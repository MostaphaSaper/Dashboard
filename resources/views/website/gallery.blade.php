@extends('layouts.website')
@section('content')
<section id="header" class="info-gallery">

</section>
<section id="info-gallery" class="info-gallery-2">
    <div class="container info-gallery-container">
        <h2 class="text-center col-12">{{ $gallery->project_title }}</h2>
        <div class="d-flex gap-4 justify-content-between flex-wrap first-row">
            <div class="first-row-block">
                <h4>حول المشروع</h4>
                <span>{{  $gallery->about_project }}</span>
            </div>
            <div class="first-row-block">
                <h4>العمل المٌنجز</h4>
                <span>{{  $gallery->finished_work }}</span>
            </div>
            <div class="first-row-block">
                <h4>دورنا</h4>
                <span> {{ $gallery->our_role }}</span>
            </div>
        </div>
        <div class="row second-row gy-4">
            <img data-aos="fade-down" data-aos-duration="1000" src="../imgs/info-gallery-img.webp"
                class="col-12 img-fluid info-gallery-img" alt="info-gallery-img">
            <p data-aos="fade-down" data-aos-duration="1000" class="col-12">
                {!!  $gallery->project_content !!}
            </p>
        </div>
        <div class="row-three">
            <h2 data-aos="fade-down" data-aos-duration="1000">مشاريع أخرى</h2>
            <div class="main-row-three-block">
                <div class="row-three-block" data-aos="fade-left" data-aos-duration="1000">
                    <img src="../imgs/gallery-info-1.webp" class="img-fluid" alt="img">
                    <div>
                        <h5>شركة الغامدي للمقاولات</h5>
                        <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة
                            الحلول التقنية والتسويقية والمتابعة الدورية.</p>
                    </div>
                    <a href="#">اقرأ المزيد</a>
                </div>
                <div class="row-three-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="../imgs/gallery-info-2.webp" class="img-fluid" alt="img">
                    <div>
                        <h5>شركة الغامدي للمقاولات</h5>
                        <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة
                            الحلول التقنية والتسويقية والمتابعة الدورية.</p>
                    </div>
                    <a href="#">اقرأ المزيد</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
