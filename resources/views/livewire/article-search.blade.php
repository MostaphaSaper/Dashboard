<div>
    <div class="filter-text">
        @foreach ($tags as $tag)
            <span wire:click="tagFilter">{{ $tag->tag_name }}</span>
        @endforeach

    </div>
    <div class="search">
        <input type="text" wire:model.live.debounce="search" placeholder="البحث" class="form-control">
        <button>ابحث</button>
    </div>
    <div class="search-2">
        <br>
        <p wire:model="notFound" style="color: red" >{{ $notFound }}</p>
    </div>
    <div class="main-block">
        @foreach ($articles as $article)
            <div class="block">
                <a href="{{ route('website.article',$article) }}" >
                    <img src="{{ $article->main_image() }}" class="img-fluid " alt="img">
                    <div class="top">
                        @foreach ($article->tags as $tag)
                            <button>{{ $tag->tag_name }}</button>
                        @endforeach
                    </div>
                    <div class="bottom">
                        <h4>{{ $article->title }}</h4>
                        <p>{!! Str::limit($article->description, 130, '...') !!}</p>
                        <span>اقرأ المزيد</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
        @if ($articles->count() >= $amount)
            <div class="text-center"><button wire:click="load" class="read-more">اقرأ المزيد</button></div>
        @endif

</div>
