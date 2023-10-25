@extends('layouts.website')
@section('content')

    <section id="header" class="technical-consulting-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>الاستشارات والحلول التقنية</h1>
        </div>
    </section>

    <section id="another-cta" class="another-cta">
        <div class="container">
            <div class="row align-items-center text-center">
                <div data-aos="fade-down" data-aos-duration="1000">
                    <p class="another-cta-text">
                        نحن في مكتب سلسلة للاستشارات نقدم خدمات الاستشارات والحلول التقنية لمساعدتك في اختيار الحلول
                        المناسبة لشركتك.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/صورة رقم1.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="p">
                        نقوم بتقييم البنية التقنية الحالية لشركتك ونقدم التوصيات لتطويرها وتحديثها بما يتوافق مع أحدث
                        متطلبات تحسين محركات البحث
                        (SEO). كما نقدم المشورة الفنية لاختيار أنظمة تكنولوجيا المعلومات الملائمة لطبيعة عمل
                        مؤسستك. بالإضافة إلى ذلك، نساعدك في
                        اختيار المنصات والأنظمة الإلكترونية المناسبة لتحقيق أهدافك وزيادة رؤية موقعك على الويب في محركات
                        البحث. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-2 bg-white">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="d-lg-none d-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="p">
                        نقوم أيضًا بتحليل الاحتياجات البرمجية وتطوير حلول مخصصة تتناسب مع متطلبات عملك. 
                        ولا ننسى تقييم أمن المعلومات وخصوصية البيانات وتقديم الحلول والتدابير اللازمة لضمان سلامة
                        بياناتك والامتثال للمعايير
                        القانونية والتنظيمية.
                    </p>
                </div>
                <figure class="d-none d-lg-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
            </div>
        </div>
    </section>

    <section id="cta" class="tech-bd-cta">
        <div class="container">
            <div data-aos="fade-down" data-aos-duration="1000">
                <h3>الخدمات التقنية</h3>
            </div>
    </section>

    <section id="our-services" class="advertising-services">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1100">إدارة الموقع الالكتروني</h3>
            <p data-aos="fade-down" data-aos-duration="1000" class="our-services-p our-services-title">
                نحن نقدم خدمات إدارة الموقع الإلكتروني لمساعدتك في الحفاظ على أداء موقعك بأفضل حالاته وتشتمل هذه
                الخدمات
                على: 
            </p>
            <div class="main-our-services">
                <div class="service-block another-2" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة الموقع الالكتروني/أيقونة رقم1.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        الصيانة الدورية للموقع لضمان
                        استمرارية الأداء الأمثل.
                    </p>
                </div>
                <div class="service-block another-2" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة الموقع الالكتروني/أيقونة رقم2.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        عمل نسخ احتياطية منتظمة لحماية بيانات الموقع والمحتوى.
                    </p>
                </div>
                <div class="service-block another-2" data-aos="fade-up-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة الموقع الالكتروني/أيقونة رقم3.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        مراقبة أداء الموقع والعمل على تحسين سرعة التحميل ووقت الاستجابة. 
                    </p>
                </div>

                <div class="service-block another-2" data-aos="fade-up-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة الموقع الالكتروني/أيقونة رقم4.svg') }}"
                        class="img-fluid" alt="icon">
                    <p class="our-service-title">
                        التدقيق الأمني الدوري للتأكد من خلو الموقع من أي ثغرات وحمايته من الاختراق. 
                    </p>
                </div>
            </div>
            <div class="service-block last-service-block another-2" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة الموقع الالكتروني/أيقونة رقم5.svg') }}"
                    class="img-fluid" alt="icon">
                <p class="our-service-title">
                    ترقية الموقع وتحديثه باستخدام أحدث
                    التقنيات وأنظمة إدارة المحتوى.
                </p>
            </div>
        </div>
    </section>

    <section id="data-base">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">إدارة قواعد البيانات</h3>
            <div class="data-base-main-block">
                <div class="data-base-block" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة قواعد البيانات/أيقونة رقم1.svg') }}"
                        class="img-fluid w-100" alt="icon">
                    <p>
                        إنشاء قواعد البيانات وتصميم الجداول اللازمة لتخزين واسترجاع المعلومات بسهولة وفعالية.
                    </p>
                </div>
                <div class="data-base-block" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة قواعد البيانات/أيقونة رقم2.svg') }}"
                        class="img-fluid w-100" alt="icon">
                    <p>
                        تنظيف وتنقية البيانات بشكل دوري لضمان دقتها وموثوقيتها.
                    </p>
                </div>
                <div class="data-base-block" data-aos="fade-up-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة قواعد البيانات/أيقونة رقم3.svg') }}"
                        class="img-fluid w-100" alt="icon">
                    <p>
                        إدارة صلاحيات الوصول لقواعد البيانات وفقًا للصلاحيات المخولة لكل مستخدم.
                    </p>
                </div>
                <div class="data-base-block" data-aos="fade-up-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والخدمات التقنية/سيكشن ادارة قواعد البيانات/أيقونة رقم4.svg') }}"
                        class="img-fluid w-100" alt="icon">
                    <p>
                        تحديث قواعد البيانات وفقًا لمتطلبات عملك وعمل نسخ احتياطية منتظمة لحماية البيانات من الضياع أو
                        التلف.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-2">
        <div class="container">
            <div class="text-center">
                <p data-aos="fade-down" data-aos-duration="1000">
                    إذا كنت بحاجة إلى مساعدة، فلا تتردد في الاتصال بنا! نحن هنا لتقديم <br class="d-none d-lg-block">
                    الدعم والإرشاد فيما يتعلق
                    بخدماتنا وحلولنا التقنية.
                </p>
                <a href="tel:+966112074129" class="call-us" data-aos="fade-down" data-aos-duration="1000">
                    <span>اتصل بنا</span>
                </a>
            </div>
    </section>

@endsection
