@extends('layouts.website')
@section('title', 'الاستشارات والحلول القانونية')
@section('content')

    <section id="header" class="legal-advice-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>الاستشارات والحلول القانونية</h1>
        </div>
    </section>

    <section id="another-cta" class="another-cta">
        <div class="container">
            <div class="row align-items-center text-center">
                <div data-aos="fade-down" data-aos-duration="1000">
                    <h4 class="text-center another-cta-text">هل تبحث عن استشارات وحلول قانونية موثوقة؟</h4>
                    <p class="another-cta-text">
                        نحن هنا لمساعدتك في جميع الأمور القانونية المتعلقة بتأسيس وإدارة شركتك في المملكة العربية
                        السعودية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="p-0">
        <div class="container">
            <div class="d-flex flex-column gap-0 gap-lg-5 flex-lg-row align-items-center justify-content-between">
                <figure class="w-100" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم1.svg')}}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="p">نقدم خدمات استشارية شاملة تشمل اختيار الشكل القانوني المناسب لشركتك، إعداد اللوائح
                        الداخلية وعقود
                        التأسيس، والمساعدة في
                        إكمال إجراءات التسجيل والحصول على التراخيص اللازمة لبدء العمل.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-2 bg-none">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="d-lg-none d-block w-100" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم2.svg')}}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="p">
                        نقدم أيضاً المشورة فيما يتعلق بحماية حقوق الملكية الفكرية والابتكار، ومراجعة العقود والاتفاقيات
                        لضمان الامتثال القانوني
                        وحماية مصالح شركتك. بالإضافة إلى ذلك، نقدم الدعم القانوني في حالة وجود قضايا قانونية أو عمليات
                        اندماج واستحواذ.
                    </p>
                </div>
                <figure class="d-none d-lg-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم2.svg')}}" class="img-fluid" alt="img">
                </figure>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-3 aaa pt-md-0">
        <div class="container">
            <div class="d-flex gap-0 gap-lg-5 flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="w-100" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم3.png')}}" class="img-fluid w-100" alt="img">
                </figure>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="p">
                        اعتمد على خبرتنا في تقديم المشورة القانونية لمجلس الإدارة وتحديث اللوائح الداخلية بانتظام للتأكد
                        من التوافق مع التطورات
                        القانونية الحالية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-2">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="d-lg-none d-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم4.svg')}}" class="img-fluid" alt="img">
                </figure>
                <div>
                    <p class="p" data-aos="fade-left" data-aos-duration="1000">
                        إذا كنت تدير متجرًا إلكترونيًا، سلسلة موجودة لمساعدتك في صياغة العقود واللوائح، والتسجيل
                        والترخيص، وصياغة سياسات
                        الخصوصية والشروط والأحكام والاسترجاع والاستبدال.
                    </p>
                </div>
                <figure class="d-lg-block d-none" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات القانونية/صورة رقم4.svg')}}" class="img-fluid" alt="img">
                </figure>
            </div>
        </div>
    </section>

    <section id="cta-2">
        <div class="container">
            <div class="text-center">
                <p data-aos="fade-down" data-aos-duration="1000">
                    اتصل بنا الآن واستفد من خبرتنا في مجال قانون الشركات <br class="d-none d-lg-block">
                    نحن هنا لمساعدتك في تحقيق أهدافك القانونية ونمو شركتك.
                </p>
                <a href="{{ route('website.contact') }}" class="call-us" data-aos="fade-down" data-aos-duration="1000">
                    <span>اتصل بنا</span>
                </a>
            </div>
    </section>

@endsection
