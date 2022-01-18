  <!-- Footer -->

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".exhibitionSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      watchSlidesProgress: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      onProgress: move
    });
    function move() {
      var elem = document.getElementById("progress"); 
      var width = 1;
      var autoplay = 2500;
      var autoplayTime = autoplay / 100;
      var id = setInterval(frame, autoplayTime);
      function frame() {
          if (width >= 100) {
              clearInterval(id);
          } else {
              width++; 
              elem.style.width = width + '%'; 
          }
      }
    }
    console.log(swiper)
  </script>

  <script>
    Fancybox.bind("[data-fancybox]", {
      Thumbs: {
        autoStart: false,
      },
      Toolbar: {
        display: [
          { id: "prev", position: "center" },
          { id: "counter", position: "center" },
          { id: "next", position: "center" },
          "close",
        ],
      },
    });
  </script>

  <footer>
    <div class="row">
      <div class="twelfth columns">
        <img class="logo" src="<?= url('assets/img/SY-Full-Logo.svg')?>">
      </div>
    </div>
    <div class="row footer-main">
      <div class="two columns one-half-mobile">
        <?= $site->address()->kirbytextinline() ?>
        <br/><br/>Opening Hours<br/>
        <?= $site->openingHours()->kirbytextinline() ?>
      </div>
      <div class="two columns one-half-mobile">
        <?= $site->email()->kirbytextinline() ?><br/>
        <?= $site->contact()->kirbytextinline() ?><br/><br/>
        For press enquiries<br/>
        <?= $site->pressEmail()->kirbytextinline() ?>
      </div>
      <div class="five columns">
        Follow
        <div>
          <a target="_blank" href="<?= $site->facebook()->html() ?>">Facebook</a>
          <a target="_blank" href="<?= $site->instagram()->html() ?>">Instagram</a>
          <a target="_blank" href="<?= $site->linkedin()->html() ?>">Linkedin</a></div>
      </div>
      <div class="three columns">
        <div>Join our mailing list</div>

          <!-- Begin Mailchimp Signup Form -->
          <style type="text/css">
          </style>
          <div id="mc_embed_signup">
            <form action="https://saatchiyates.us17.list-manage.com/subscribe/post?u=14150921cfa1199dc80b45561&amp;id=d4826caf98" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_14150921cfa1199dc80b45561_d4826caf98" tabindex="-1" value=""></div>
                <input type="submit" value="Enter" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
            </form>
          </div>
          <!--End mc_embed_signup-->

          <div>Entering your details above means that you are giving SAATCHI YATES your consent to collect and process your personal information. To find out more please read our <a class="underline" href="/privacy-policy">Privacy Policy</a>.</div>
      </div>
    </div>
    <div class="row footer-bottom">
      <div class="twelfth columns">
        <div class="left">
          <span><a href="/privacy-policy">Privacy Policy</a></span>
          <span><a href="http://shop.saatchiyates.com/" target="_blank">Shop Catalogue</a></span>
        </div>
        <span><?= $site->copyright()->text() ?></span>  
      </div>
    </div>
  </footer>

  
  </body>
</html>
