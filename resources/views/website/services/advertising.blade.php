@extends('layouts.website')
@section('content')

    <section id="header" class="advertising-services-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>خدمات التصميم والحملات الإعلانية</h1>
        </div>
    </section>

    <section id="more-info" class="more-info-2 advertising-services advertising-services-more-info">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="w-100 h-100" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/صورة رقم1.svg') }}" class="img-fluid w-100" alt="img">
                </figure>
                <div class="w-100">
                    <h3 data-aos="fade-right" data-aos-duration="1000">خدمات التصميم</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="our-design">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/1.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>تصميم الصور والفيديوهات الدعائية والتسويقية:</h3>
                        <p>نقدم تصميمًا احترافيًا للصور والفيديوهات التي تعكس هوية علامتك التجارية وتساعد في جذب الجمهور
                            المستهدف وزيادة التفاعل.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/2.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>تصميم المحتوى المرئي لمنصات التواصل الاجتماعي:</h3>
                        <p>
                            نقدم تصميمًا مبتكرًا وجذابًا للمحتوى المرئي على منصات التواصل الاجتماعي لزيادة مشاركة
                            المستخدمين وتعزيز وعي العلامة
                            التجارية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/3.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>تحرير ومعالجة الصور ومقاطع الفيديو:</h3>
                        <p>
                            نقوم بتحرير وتعديل الصور ومقاطع الفيديو بمهارة عالية لتحسين جودتها وجعلها أكثر جاذبية
                            واحترافية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/4.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>إنتاج صور وفيديوهات جذابة ذات جودة عالية:</h3>
                        <p>
                            نقدم صورًا وفيديوهات ذات جودة عالية تلفت انتباه الجمهور وتعزز<br class="d-none d-lg-block">
                            قيمة علامتك التجارية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/5.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>تصميم إنفوجرافيك إيضاحي وتفاعلي:</h3>
                        <p>
                            نقدم تصميمًا مبتكرًا للإنفوجرافيك يسهم في توضيح المعلومات <br
                                class="d-none d-lg-block">وتفاعل المستخدمين معها.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="our-design-block">
                        <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن التصميم/6.svg') }}" class="img-fluid"
                            alt="icon">
                        <h3>ابتكار تصاميم إنفوجرافيك إبداعية وفريدة</h3>
                        <p>
                            تساعد في تمييز علامتك التجارية وجذب الانتباه.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="tech-bd-cta">
        <div class="container">
            <div data-aos="fade-down" data-aos-duration="1000">
                <h3>الحملات الإعلانية والترويجية</h3>
            </div>
    </section>

    <section id="our-services" class="advertising-services">
        <div class="container text-center">
            <div class="main-our-services">
                <div class="service-block linear-block" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم1.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        تخطيط وتنفيذ حملات إعلانية على محركات البحث وشبكات التواصل الاجتماعي ومنصات الإعلانات المختلفة.
                    </p>
                </div>
                <div class="service-block linear-block" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم2.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        تصميم وإنتاج محتوى إعلاني جذاب من صور وفيديوهات وإنفوجرافيك.
                    </p>
                </div>
                <div class="service-block linear-block" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم3.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        دراسة وتحليل عميق للسوق المستهدف.
                    </p>
                </div>
                <div class="service-block linear-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم4.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        تحديد شخصية الجمهور المستهدف <br class="d-none d-xl-block">من صفات ديموغرافية كالعمر والجنس
                        والاهتمامات ومستوى الدخل.
                    </p>
                </div>
                <div class="service-block linear-block" data-aos="fade-up-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم5.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        اختيار الكلمات المفتاحية المستهدفة.
                    </p>
                </div>
                <div class="service-block linear-block" data-aos="fade-up-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة التصميم والحملات الاعلانية/أيقونات سكشن الحملات الاعلانية/أيقونة رقم6.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        قياس نتائج الحملات الإعلانية<br class="d-none d-lg-block"> وتحليلها.
                    </p>
                </div>
            </div>
            <a href="tel:+966112074129" class="call-us" data-aos="fade-up" data-aos-duration="1000">
                <span>اتصل بنا</span>
            </a>
        </div>
    </section>

@endsection
