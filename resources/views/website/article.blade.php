<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ (asset('website/imgs/fivicon.png')) }}">
    <title>سلسلة - المدوّنة</title>
</head>

<body>
    <section id="header" class="info-gallery">
        <div class="position-absolute top-0 z-index-999 fixed-navbar fixedNavbar">
            <div class="img-one-container container">
                <div class="social-media mt-2">
                    <div class="row justify-content-between">
                        <div
                            class="col-md-6 col-12 justify-content-md-start justify-content-between d-flex social-media-links">
                            @if ($settings['contact_email'])
                                <div class="ms-4">
                                    <a href="mailto:{{ $settings['contact_email'] }}">
                                        <span>{{ $settings['contact_email'] }}</span>
                                        <img src="{{ asset('website/imgs/icons/mail.svg') }}" alt="mail-icon" class="img-fluid">
                                    </a>
                                </div>
                            @endif
                            @if ($settings['phone'])
                                <div>
                                    <a href="tel:{{ $settings['phone'] }}">
                                        <span dir="ltr">{{ $settings['phone'] }}</span>
                                        <img src="{{ asset('website/imgs/icons/phone.svg') }}" alt="phone-icon" class="img-fluid">
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div
                            class="col-md-6 text-start social-media-icons d-none d-md-flex justify-content-end align-items-center">
                            @if ($settings['phone'])
                            <a href="https://api.whatsapp.com/send/?phone=966555881764&text&type=phone_number&app_absent=0"
                            target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                        </style>
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($settings['linkedin_link'])
                                <a href="{{ $settings['linkedin_link'] }}" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Linked-In.svg') }}" alt="icon">
                                </a>
                            @endif
                            @if ($settings['twitter_link'])
                                <a href="{{ $settings['twitter_link'] }}" target="_blank">
                                    <img src="{{ ('website/imgs/icons/icons8-twitterx 1.svg') }}" alt="icon">
                                </a>
                            @endif
                            @if ($settings['facebook_link'])
                                <a href="{{ $settings['facebook_link'] }}" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Facebook.svg') }}" alt="icon">
                                </a>
                            @endif
                            @if ($settings['instagram_link'])
                                <a href="{{ $settings['instagram_link'] }}" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Instagram.svg') }}" alt="icon">
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg" id="headerBar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand d-block d-lg-none" href="{{ route('home') }}">
                        <img src="{{ asset('website/imgs/logo.png') }}" alt="logo">
                    </a>
                    <a class="nav-link d-none d-lg-block" href="{{ route('home') }}#testimonial">
                        <button class="ask-request">اطلب استشارة</button>
                    </a>
                    <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNav">
                        <ul class="navbar-nav text-center py-4">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.about') }}">من نحن</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    الخدمات
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group">
                                            <path id="Vector"
                                                d="M8.19384 8.78145L11.4938 5.48145L12.4365 6.42411L8.19384 10.6668L3.95117 6.42411L4.89384 5.48145L8.19384 8.78145Z"
                                                fill="#E1E1E1" />
                                        </g>
                                    </svg>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/financial_consulting.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/حلول مالية وادارية.svg') }}"
                                                alt="icon">
                                            الاستشارات والحلول الإدارية و المالية
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="pages/legal_advice.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/الاستشارات والحلول القانونية.svg') }}"
                                                alt="icon">
                                            الاستشارات والحلول القانونية
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/human_consulting.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/استشارات الموارد البشرية.svg') }}"
                                                alt="icon">
                                            استشارات الموارد
                                            البشرية
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/technical_consulting.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/الخدمات التقنية.svg') }}" alt="icon">
                                            الاستشارات
                                            والحلول
                                            التقنية
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/marketing_consulting.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/ايقونة الاستشارات والحلول التسويقية.svg') }}"
                                                alt="icon">
                                            الاستشارات والحلول التسويقية
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/marketing_services.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/خدمات تسويقية.svg') }}" alt="icon">
                                            الخدمات التسويقية
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex align-items-center dropdown-item"
                                            href="pages/advertising_services.html">
                                            <img src="{{ ('website/imgs/ايقونات الخدمات في شريط الهيدر/التصميم والحملات الاعلانية.svg') }}"
                                                alt="icon">
                                            خدمات التصميم والحملات الإعلانية
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.galleries') }}">معرض الأعمال</a>
                            </li>
                            <li class=" nav-item">
                                <a class="nav-link" href="{{ route('website.articles') }}">المدونة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.contact') }}">اتصل بنا</a>
                            </li>
                            <a class="nav-link d-block d-lg-none" href="{{ route('home') }}#testimonial">
                                <button class="ask-request">اطلب استشارة</button>
                            </a>
                            <div
                                class="col-md-6 text-start social-media-icons d-flex d-md-none justify-content-center align-items-center">
                                <a href="https://api.whatsapp.com/send/?phone=966555881764&text&type=phone_number&app_absent=0"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                        </style>
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/company/slsalah-sa/" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Linked-In.svg') }}" alt="icon">
                                </a>
                                <a href="https://twitter.com/slsalah_sa" target="_blank">
                                    <img src="{{ ('website/imgs/icons/icons8-twitterx 1.svg') }}" alt="icon">
                                </a>
                                <a href="https://www.facebook.com/Slsalah.sa" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Facebook.svg') }}" alt="icon">
                                </a>
                                <a href="https://www.instagram.com/slsalah_sa" target="_blank">
                                    <img src="{{ ('website/imgs/icons/Instagram.svg') }}" alt="icon">
                                </a>
                            </div>
                        </ul>
                    </div>
                    <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
                        <img src="{{ asset('website/imgs/logo.png') }}" alt="logo">
                    </a>
                </nav>
            </div>
        </div>
    </section>

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

    <footer>
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-block">
                        <img src="website/imgs/logo.png" alt="logo" class="img-fluid logo">
                        <p>شركة سلسلة هي أول شركة سعودية من نوعها في السوق السعودي</p>
                        <div class="media d-flex align-items-center">
                            <a href="https://api.whatsapp.com/send/?phone=966555881764&text&type=phone_number&app_absent=0"
                                target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/slsalah-sa/" target="_blank">
                                <img src="website/imgs/icons/Linked-In.svg" alt="">
                            </a>
                            <a href="https://twitter.com/slsalah_sa" target="_blank">
                                <img src="website/imgs/icons/icons8-twitterx 1.svg" alt="">
                            </a>
                            <a href="https://www.facebook.com/Slsalah.sa" target="_blank">
                                <img src="website/imgs/icons/footer-facebook.svg" alt="">
                            </a>
                            <a href="https://www.instagram.com/slsalah_sa" target="_blank">
                                <img src="website/imgs/icons/Instagram.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer-block">
                        <h4>عن سلسلة</h4>
                        <ul>
                            <li><a href="website/website/index.html">الصفحة الرئيسية</a></li>
                            <li><a href="who_we_ara.html">من نحن</a></li>
                            <li><a href="blog.html">المدونة</a></li>
                            <li><a href="contact_us.html">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="footer-block">
                        <h4>خدماتنا</h4>
                        <div class="d-md-flex gap-4">
                            <ul>
                                <li><a href="./financial_consulting.html">الاستشارات والحلول الإدارية والمالية</a></li>
                                <li><a href="./legal_advice.html">الاستشارات والحلول القانونية</a></li>
                                <li><a href="./human_consulting.html">استشارات الموارد البشرية</a></li>
                                <li><a href="./technical_consulting.html">الاستشارات والحلول التقنية</a></li>
                            </ul>
                            <ul>
                                <li><a href="./marketing_consulting.html">الاستشارات والحلول التسويقية</a></li>
                                <li><a href="./marketing_services.html">الخدمات التسويقية</a></li>
                                <li><a href="./advertising_services.html">خدمات التصميم والحملات الإعلانية</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer-block last-block">
                        <h4>تواصل معنا</h4>
                        <ul class="d-flex flex-column gy-5">
                            <li>
                                <a href="tel:+966555881764">
                                    <img src="website/imgs/icons/phone.svg" alt="phone-icon" class="img-fluid icon">
                                    <span dir="ltr">+966 555 88 1764</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+966112074129">
                                    <img src="website/imgs/icons/phone.svg" alt="phone-icon" class="img-fluid icon">
                                    <span dir="ltr">+966 112 07 4129</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:contact@slsalah.com">
                                    <img src="website/imgs/icons/mail.svg" alt="mail-icon" class="img-fluid icon">
                                    <span>contact@slsalah.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/c2okMmkgw1xdezZh7" target="_blank">
                                    <img src="website/imgs/icons/location.svg" alt="phone-icon" class="img-fluid icon">
                                    <span class="speciel">المملكة العربية السعودية - الرياض - مجمع ليسن فالي- طريق
                                        العروبة
                                        - الدور
                                        الأرضي - مبنى 13
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyRight">
        <p>جميع الحقوق محفوظة لشركة سلسلة 2023</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
</body>

</html>
