@extends('layouts.website')
@section('content')
    <section id="header" class="caontact-us-bg">
        <div class="headerContent">
            <h1>اتصل بنا</h1>
        </div>
    </section>
    <section id="contact-us">
        <div class="container">
            <div class="contact-us-row">
                <div class="inputs">
                    <div class="contact-us-block">
                        <h3 data-aos="fade-down" data-aos-duration="1000">اتصل بنا</h3>
                        <p data-aos="fade-down" data-aos-duration="1000">هذا النص هو مثال لنص يمكن أن يستبدل في نفس
                            المساحة، لقد تم توليد هذا النص من مولد النص العربى
                        </p>
                        <form method="POST" action="{{ route('website.contact-message') }}" class="row needs-validation" novalidate>
                            @csrf
                            <div class=" position-relative" data-aos="fade-down" data-aos-duration="1000">
                                <input type="text" name="name" class="form-control" id="validationCustom01" value=""
                                    placeholder="الاسم" required>
                                <span class="red-star-1">*</span>
                                <div class="valid-feedback mb-2 ">
                                    ممتاز
                                </div>
                                <div class="invalid-feedback mb-2">الرجاء إدخال اسم</div>
                            </div>
                            <div class=" position-relative" data-aos="fade-down" data-aos-duration="1000">
                                <input type="email" name="email" class="form-control" id="validationCustom01" value=""
                                    placeholder="البريد الالكتروني" required>
                                <span class="red-star-2">*</span>
                                <div class="valid-feedback mb-2 ">
                                    ممتاز
                                </div>
                                <div class="invalid-feedback mb-2">
                                    الرجاء إدخال البريد الالكتروني
                                </div>
                            </div>
                            <div class=" position-relative" data-aos="fade-down" data-aos-duration="1000">
                                <input type="tel" name="phone" class="form-control" id="validationCustom01" value=""
                                    placeholder="رقم الجوال" required>
                                <span class="red-star-3">*</span>
                                <div class="valid-feedback mb-2 ">
                                    ممتاز
                                </div>
                                @error('phone')
                                    <div class="invalid-feedback mb-2">
                                        الرجاء إدخال رقم جوال صالح
                                    </div>
                                @enderror

                            </div>
                            <div class=" position-relative" data-aos="fade-down" data-aos-duration="1000">
                                <textarea type="text" name="message" class="form-control" id="validationCustom01" value=""
                                    placeholder="الشرح" required></textarea>
                                <span class="red-star-4">*</span>
                                <div class="valid-feedback mt-2">
                                    ممتاز
                                </div>
                                <div class="invalid-feedback my-3">
                                    الرجاء إدخال نبذة عن الاستشارة المطلوبة
                                </div>
                            </div>
                            <div data-aos="fade-down" data-aos-duration="1000">
                                <input value="ارسال" type="submit" class="form-control">
                            </div>
                        </form>
                        <div class="d-flex gap-lg-1 gap-4 flex-wrap justify-content-between">
                            <div data-aos="fade-up" data-aos-duration="1000">
                                @if ($settings['contact_email'] )
                                    <a href="mailto:{{ $settings['contact_email'] }}" class="d-flex align-items-center">
                                        <img src="{{ asset('website/imgs/icons/mail-dark.svg') }}" alt="mail-icon" class="img-fluid">
                                        <div class="d-flex flex-column">
                                            <span class="main-title">البريد الالكتروني</span>
                                            <span class="child-title">{{ $settings['contact_email'] }}</span>
                                        </div>
                                    </a>
                                @endif
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                @if ($settings['phone'] )
                                    <a target="_blank"
                                        href="https://api.whatsapp.com/send/?phone={{ $settings['phone'] }}&text&type=phone_number&app_absent=0"
                                        class="d-flex align-items-center">
                                        <img src="{{ asset('website/imgs/icons/phone-dark.svg') }}" alt="phone-icon" class="img-fluid">
                                        <div class="d-flex flex-column">
                                            <span class="main-title">الجوال</span>
                                            <span class="child-title" dir="ltr">{{ $settings['phone'] }}</span>
                                        </div>
                                    </a>
                                @endif
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <a href="tel:+966112074129" class="d-flex align-items-center">
                                    <img src="{{ asset('website/imgs/icons/phone-dark.svg') }}" alt="phone-icon" class="img-fluid">
                                    <div class="d-flex flex-column">
                                        <span class="main-title">المكتب</span>
                                        <span class="child-title" dir="ltr">+966 112 07 4129</span>
                                    </div>
                                </a>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <a href="https://maps.app.goo.gl/c2okMmkgw1xdezZh7" class="d-flex align-items-center"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path
                                            d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                                    </svg>
                                    <div class="d-flex flex-column">
                                        <span class="main-title">العنوان</span>
                                        <span class="child-title new-child-title" dir="rtl">{{ $settings['address'] }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iframe">
                    <iframe data-aos="fade-right" data-aos-duration="1000"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.0086842309224!2d46.6332502!3d24.6922282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d00bf0a7f2f%3A0x8f3fa3832e3ec787!2z2YTZitiz2YYg2YHYp9mE2Yo!5e0!3m2!1sar!2ssa!4v1696821324682!5m2!1sar!2ssa"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
