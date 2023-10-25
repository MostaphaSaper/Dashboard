@extends('layouts.website')
@section('content')

    <section id="header" class="marketing-consulting-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>الاستشارات والحلول التسويقية</h1>
        </div>
    </section>

    <section id="more-info" class="marketing-consulting">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول التسويقية/صورة رقم1.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="p">
                        انطلاقاً من أهمية التسويق ودوره الفاعل في نجاح العمل تحرص سلسلة من خلال خبرائها المختصين على
                        تقديم استشارات تسويقية
                        شاملة لتطوير خطط واستراتيجيات التسويق التي تلبي احتياجات شركتك. بالإضافة إلى تصميم وتنفيذ حملات
                        تسويقية مبتكرة تستهدف
                        الجمهور المستهدف وتعزز رؤية العلامة التجارية الخاصة بك.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="more-info" class="more-info-3 marketing-consulting-2">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure class="d-lg-none d-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول التسويقية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="p">
                        نحن نقدم أيضًا خدمات إدارة الهوية الرقمية وتطوير العلامة التجارية الرقمية والبصرية. نعمل على
                        بناء هوية قوية لعلامتك
                        التجارية وتصميم موقع إلكتروني متميز وسهل الاستخدام يعكس قيمتك ويجذب الجمهور المستهدف. باستخدام
                        أحدث الأدوات والتقنيات،
                        نقوم بتحليل السوق المستهدف ومنافسيك وسلوك المستهلك لتوفير استراتيجيات تسويقية فعالة.
                    </p>
                </div>
                <figure class="d-lg-block d-none" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/صفحة الاستشارات والحلول التسويقية/صورة رقم2.svg') }}" class="img-fluid" alt="img">
                </figure>
            </div>
        </div>
    </section>

    <section id="more-info" class="marketing-consulting-3">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <figure data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/new-img.svg') }}" class="img-fluid" alt="img">
                </figure>
                <div>
                    <p class="p" data-aos="fade-right" data-aos-duration="1000">
                        سواء كنت تحتاج إلى استشارات في مجال التسويق الرقمي، أو تطوير العلامة التجارية، أو تصميم حملات
                        إعلانية مبتكرة، فإننا هنا
                        لمساعدتك في تحقيق أهدافك ونجاحك الرقمي.
                    </p>
                    <p class="p" data-aos="fade-right" data-aos-duration="1500">سنعمل معًا على تحقيق نتائج ملموسة وزيادة
                        رؤية علامتك التجارية على الإنترنت. ونشر
                        المحتوى المناسب
                        على موقعك الإلكتروني
                        وتحسينه لتحقيق أفضل نتائج في محركات البحث.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-2">
        <div class="container">
            <div class="text-center">
                <p data-aos="fade-down" data-aos-duration="1000">
                    في مكتب سلسلة للاستشارات، نحن ملتزمون بتقديم خدمات عالية الجودة وتحقيق نتائج قابلة للقياس. اتصل بنا
                    اليوم للحصول على
                    خدماتنا التسويقية والإبداعية وبدء رحلة النجاح الرقمي. 
                </p>
                <a href="tel:+966112074129" class="call-us" data-aos="fade-down" data-aos-duration="1000">
                    <span>اتصل بنا</span>
                </a>
            </div>
    </section>

@endsection
