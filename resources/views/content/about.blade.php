<div class="uk-panel">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="storage/{{ Voyager::setting('site.info_picture') }}" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                {!! Voyager::setting('site.about') !!}    
                <hr class="uk-divider-icon" />
                {{ json_decode(Voyager::setting('site.cv')[0])}}
                <a target="_blank" href="storage/{{ json_decode(Voyager::setting('site.cv'))[0]->download_link}}"><em>Mon C.V.</em></a>
            </div>
        </div>
    </div>
</div>
<div class="discover">
    <a class="uk-button uk-button-default" href="#projects">Découvrir mes projets</a>
</div>
