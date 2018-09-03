<nav class="navbar navbar-expand-lg" data-toggle="sticky-onscroll">
    <div class="container">
        <a class="navbar-brand" href="/">{{ setting('site.title') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-navbar" aria-controls="top-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="top-navbar">
            <ul class="navbar-nav ml-auto">
                @foreach($items as $menu_item)
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>