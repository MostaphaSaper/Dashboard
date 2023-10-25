<div>
    <div class="main-block-gallery">
        @foreach ($galleries as $gallery)
            <a href="{{ route('website.gallery',$gallery) }}" class="gallery-block" data-aos="fade-left" data-aos-duration="1000">
                <figure>
                    <img src="{{ $gallery->main_image() }}" class="img-fluid" alt="gallery">
                </figure>
                <div class="gallery-block-content">
                    @foreach ($gallery->tags as $tag)
                        <span>{{ $tag->tag_name }}</span>
                    @endforeach
                    <h3>{{ $gallery->project_title }}</h3>
                    <p>{{ $gallery->about_project }}</p>
                </div>
            </a>
        @endforeach
        @if ($galleries->count() >= $amount)
            <div class="text-center"><button wire:click="load" class="read-more">اقرأ المزيد</button></div>
        @endif
    </div>
</div>
