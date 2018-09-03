<div id="blog" class="py-5">
    <div class="container">
        <h2 class="text-uppercase text-center">{{ $title }}</h2>
        <h5 class="mb-5 text-center text-muted">{{ $subtitle }}</h5>
        <div class="row mb-3">
            @if($posts)
                @foreach($posts as $post)
                    <div class="col-md-4 mb-3 d-flex align-items-stretch">
                        <div class="card no-border shadow">
                            <a href="{{ $post->permalink }}" title="{{ $post->title }}"><img class="card-img-top img-fluid" src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}"></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ $post->permalink }}" title="{{ $post->title }}">{{ $post->title }}</a></h5>
                                <p class="card-text">{{ $post->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <p class="text-center">
            {{ $button }}
        </p>
    </div>
</div>