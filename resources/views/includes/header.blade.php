<div id="header">
    <div class="background_header" style="background-image: url(storage/{{ Voyager::setting('site.background') }});"></div>
    
    <div class="content_header">
        <img src="storage/{{ Voyager::setting('site.logo') }}" alt="logo">
        <h1 class="animate">
            <span class="text-wrapper">
                <span class="letters">{{ Voyager::setting('site.header_title') }}</span>
            </span>
        </h1>

        <h2>{{ Voyager::setting('site.header_subtitle') }}</h2>

        <div class="discover">
            <a class="uk-button uk-button-default" href="#about">En savoir plus</a>
        </div>
    </div>

    @include('includes.navbar')
</div>
