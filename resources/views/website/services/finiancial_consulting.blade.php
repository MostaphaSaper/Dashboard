@extends('layouts.website')
@section('title', 'الاستشارات والحلول الإدارية و المالية')
@section('content')

    <section id="header" class="financial-consulting-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>الاستشارات والحلول الإدارية و المالية</h1>
        </div>
    </section>

    <section id="more-about-us" class="wahed-class">
        <div class="container p-0">
            <div class="more-about-us-block">
                <p class="mb-5 mb-lg-0 new-p " data-aos="fade-left" data-aos-duration="1000">
                    نحن في مكتب سلسلة للاستشارات نقدم مجموعة واسعة من الاستشارات والحلول الإدارية والمالية للشركات
                    وروَاد الأعمال وأصحاب
                    المشاريع والمنشآت في المملكة العربية السعودية. نحن نسعى جاهدين لتحسين أداء الشركات وتطوير
                    استراتيجيات النجاح.
                </p>
                <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/صورة رقم1.svg') }}"
                    class="img-fluid avatar service-img-1 new-img" alt="img" data-aos="fade-right"
                    data-aos-duration="1000">
            </div>
        </div>
    </section>

    <section id="our-services">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">تتضمن خدماتنا:</h3>
            <div class="main-our-services">
                <div class="service-block" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/أيقونات/أيقونة رقم1.svg') }}"
                        class="img-fluid" alt="icon">
                    <p>إعداد دراسات الجدوى الاقتصادية وفق المعايير المعتمدة</p>
                </div>
                <div class="service-block" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/أيقونات/أيقونة رقم2.svg') }}"
                        class="img-fluid" alt="icon">
                    <p>المشورة في التخطيط الإداري والمالي</p>
                </div>
                <div class="service-block" data-aos="fade-up-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/أيقونات/أيقونة رقم3.svg') }}"
                        class="img-fluid" alt="icon">
                    <p>وضع السياسات والإجراءات المالية
                        والمحاسبية.</p>
                </div>
                <div class="service-block" data-aos="fade-up-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/أيقونات/أيقونة رقم4.svg') }}"
                        class="img-fluid" alt="icon">
                    <p>تصميم وتطبيق الأنظمة المالية
                        والمحاسبية</p>
                </div>
            </div>
            <div class="service-block last-service-block" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/أيقونات/أيقونة رقم5.svg') }}" class="img-fluid"
                    alt="icon">
                <p>التدقيق والمراجعة المالية</p>
            </div>
        </div>
    </section>

    <section id="our-importent">
        <div class="container">
            <div class="our-importent-row">
                <figure class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول الادارية والمالية/صورة رقم2.svg') }}" class="img-fluid"
                        alt="img">
                </figure>
                <div class="our-importent-content col-lg-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <h4>نهتم بتقديم حلول مبتكرة ومتكاملة</h4>
                    <p>تلبي احتياجات شركتك وتساهم في تحقيق الشفافية والتحكم المالي. نحن نعتمد على المعايير
                        الدولية ونقدم
                        استشارات متخصصة لتحسين
                        التخطيط الإداري والمالي وتحقيق النمو المستدام.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta">
        <div class="container">
            <div class="row">
                <div>
                    <h3 data-aos="fade-down" data-aos-duration="1000">في مكتب سلسلة للاستشارات</h3>
                    <p data-aos="fade-up" data-aos-duration="1000">نحرص على تحقيق أفضل النتائج لعملائنا من خلال
                        الاستفادة من البيانات والتحليلات لتحسين الأداء
                        وتحقيق عائد استثمار إيجابي. <br class="d-none d-lg-block">
                        نعمل بروح الفريق ونولي أهمية كبيرة للتواصل الفعال والتعاون مع عملائنا.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-2">
        <div class="container">
            <div class="text-center">
                <p data-aos="fade-down" data-aos-duration="1000" class="new-2">
                    إذا كنت تبحث عن استشارات إدارية ومالية متخصصة في المملكة العربية السعودية، فنحن في مكتب سلسلة
                    للاستشارات هنا لمساعدتك في
                    تحقيق أهدافك ونجاحك المستقبلي. اتصل بنا اليوم لمناقشة احتياجاتك وبدء رحلة التطوير والنمو معنا.
                </p>
                <a href="{{ route('website.contact') }}" class="call-us" data-aos="fade-down" data-aos-duration="1000">
                    <span>اتصل بنا</span>
                </a>
            </div>
    </section>

@endsection
