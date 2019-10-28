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

    <nav class="uk-navbar-container" uk-navbar id="navbar">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#header">Floryne Tourret</a></li>
            </ul>
        </div>
    
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li><a href="#about">A propos</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
