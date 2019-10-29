<div class="footer">
    <div class="contact uk-background-muted">
          <div class="uk-child-width-1-3@m" uk-grid >
            <div class="uk-text-center">
              <p>Lyon, France</p>
            </div>
            <div class="uk-text-center">
              <a href="mailto:floryne.tourret.pro@gmail.com">floryne.tourret.pro@gmail.com</a>
            </div>
            <div class="uk-text-center">
              <p>
                <a href="https://www.linkedin.com/in/floryne-tourret" target="blank"><span class="uk-margin-small-right" uk-icon="linkedin"></span></a>&nbsp; 
                <a href="https://github.com/FloryneTourret" target="blank"><span class="uk-margin-small-right" uk-icon="github"></span></a>&nbsp; 
              </p>
            </div>
          </div>
          <div class="uk-text-center copyright">
            <small>Copyright ©2019 Floryne Tourret</small>
          </div>
      </div>
  <div class="footer_bg" style="background-image: url(storage/{{ Voyager::setting('site.background') }});">
  </div>  
</div>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit-icons.min.js"></script>

<!-- ANIMATE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
var textWrapper = document.querySelector('.animate .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.animate .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  })
</script>


<!-- JS -->
<script src="{{ asset('js/app.js') }}"></script>