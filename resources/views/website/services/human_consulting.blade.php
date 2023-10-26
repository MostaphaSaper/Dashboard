@extends('layouts.website')
@section('title', 'الخدمات')
@section('content')

    <section id="header" class="human-consulting-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>استشارات الموارد البشرية</h1>
        </div>
    </section>

    <section id="another-cta" class="another-cta">
        <div class="container">
            <div class="row align-items-center text-center">
                <div>
                    <p class="another-cta-text" data-aos="fade-down" data-aos-duration="1000">
                        نحن في مكتب سلسلة للاستشارات نقدم مجموعة واسعة من الخدمات<br class="d-none d-lg-block">
                        الاستشارية للموارد البشرية وتطوير
                        التنظيم لرواد الأعمال
                        والمؤسسات الناشئة في المملكة العربية السعودية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/صورة رقم1.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="p">
                        تشمل خدماتنا صياغة الخطط الاستراتيجية للموارد البشرية على المدى القصير وصياغة دليل السياسات
                        والإجراءات للموارد البشرية.
                        نقدم أيضاً خدمات صياغة مصفوفة الصلاحيات والمسؤوليات لإدارة الموارد البشرية والإدارة المالية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-3">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="d-lg-none d-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="p">
                        بالإضافة إلى ذلك، نقدم المشورة في الهيكل التنظيمي ووظائف الموظفين، والنصائح والتوجيه اللازمين
                        لتحسين تنظيمك الداخلي
                        وتحديد الوظائف المناسبة للموظفين وصياغة بطاقات الوصف الوظيفي. بإمكانك استشارة خبراء سلسلة في
                        عملية التوظيف واختيار
                        المرشحين المناسبين لمنظمتك. سنساعدك في اختيار الكفاءات المناسبة وتعيينهم بشكل فعال.
                    </p>
                </div>
                <figure class="d-lg-block d-none" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
            </div>
        </div>
    </section>

    <section id="our-services">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">تتضمن خدماتنا:</h3>
            <div class="main-our-services">
                <div class="service-block another" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/ايقونات/أيقونة رقم1.svg') }}" class="img-fluid"
                        alt="icon">
                    <p class="our-service-title">إعداد الموازنة التقديرية لتكلفة التوظيف
                        الجديد ووضع سلم ودليل للرواتب والمزايا.</p>
                </div>

                <div class="service-block another" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/ايقونات/أيقونة رقم2.svg') }}" class="img-fluid"
                        alt="icon">
                    <p class="our-service-title">وضع سياسات وبرامج التدريب والتطوير
                        الوظيفي لمساعدتك في تطوير مهارات
                        وقدرات موظفيك.</p>
                </div>

                <div class="service-block another" data-aos="fade-up-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/ايقونات/أيقونة رقم3.svg') }}" class="img-fluid"
                        alt="icon">
                    <p class="our-service-title">المساعدة في تصميم نظام تقييم الأداء
                        الوظيفي وصياغة مؤشرات قياس الأداء
                        للوظائف الرئيسية.</p>
                </div>

                <div class="service-block another" data-aos="fade-up-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة استشارات الموارد البشرية/ايقونات/أيقونة رقم4.svg') }}" class="img-fluid"
                        alt="icon">
                    <p class="our-service-title">تحديد مكافآت وحوافز الموظفين، حيث سنقدم لك النصائح المناسبة لتحديد
                        مكافآت تحفز الموظفين وتعزز أدائهم.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-2">
        <div class="container">
            <div class="text-center">
                <p data-aos="fade-down" data-aos-duration="1000">
                    نحن ملتزمون بإدارة مخاطر إدارة الموارد البشرية بشكل فعال وتحقيق<br class="d-none d-lg-block"> أقصى
                    استفادة من استثمارك في الموارد
                    البشرية.<br class="d-none d-lg-block">
                    احصل على خدمات استشارية متخصصة في إدارة الموارد البشرية الآن!
                </p>
                <a href="tel:+966112074129" class="call-us" data-aos="fade-down" data-aos-duration="1000">
                    <span>اتصل بنا</span>
                </a>
            </div>
    </section>

@endsection
