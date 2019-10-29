<div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 300;">
    @foreach($websites as $post)
    <div class="card_project uk-inline-clip uk-transition-toggle uk-light">
        <div class="uk-card uk-card-default">
            <a href="{{ $post->excerpt }}" target="_blank">
                <div class="uk-card-media-top">
                    <div class="uk-card uk-text-center uk-card-default project_card">
                            <div tabindex="0">
                                <img src="{{ Voyager::image( $post->image ) }}" alt="$post->slug">
                                <div class="uk-position-center">
                                    <a href="{{ $post->excerpt }}" target="_blank" class="uk-transition-fade" uk-icon="icon: link; ratio: 2"></a>
                                </div>
                            </div>
                    </div>
                </div>
            </a>
            <a href="{{ $post->excerpt }}" target="_blank">
                <div class="uk-card-body animate_card">
                    <h3 class="uk-card-title text-static">{{ $post->title }}</h3>
                    <div class="text-dynamic">
                        <h3 class="uk-card-title text-dynamic-inner">{{ $post->title }}</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
