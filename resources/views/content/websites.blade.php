<div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500;">
    @foreach($websites as $post)
    <div>
        <div class="uk-card uk-text-center uk-card-default project_card">
            <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
                <img src="{{ Voyager::image( $post->image ) }}" alt="$post->slug">
                <div class="uk-position-center">
                    <div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove">{{ $post->title }}</h4></div>
                    <div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">{!! $post->body !!}</h4></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

