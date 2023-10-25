@extends('layouts.website')
@section('content')
    <section id="header" class="gallery-bg">
        @include('components.website.navbar')
        <div class="headerContent">
            <h1>معرض الأعمال</h1>
        </div>
    </section>

    <section id="our-gallery">
        <div class="container">
            <livewire:gallery-load-more/>
        </div>
    </section>
@endsection
