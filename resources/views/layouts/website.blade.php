<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>سلسلة - الصفحة الرئيسية</title>

    @include('seo.index')

    @include('components.website.style')
</head>

<body>


    @include('components.website.header')

    @include('components.website.navbar')

    @yield('content')

    @include('components.website.footer')

    @include('components.website.scripts')

</body>

</html>
