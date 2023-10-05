<div class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6">
              <div class="line"></div>
              <div class="copyright">
                <p>&copy; 3D Homes Limited</p>
                <p>
                  Designed &amp; Developed by
                  <a
                    class="hover-line"
                    href="http://www.dcastalia.com"
                    target="_blank"
                    >Unico IT Limited</a
                  >
                </p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-social-wrapper pull-right">
                <a target="_blank" href="#!">
                  <img
                    src="{{ asset('assets/img/facebook-icon.png') }}"
                    alt=""
                  />
                </a>
                <a target="_blank" href="#!">
                  <img
                    src="{{ asset('assets/img/instagram-icon.png') }}"
                    alt=""
                  />
                </a>
                <a
                  target="_blank"
                  href="#!"
                >
                  <img
                    src="{{ asset('assets/img/youtube-icon.png') }}"
                    alt=""
                  />
                </a>
                <a target="_blank" href="#!">
                  <img
                    src="{{ asset('assets/img/pinterest-icon.png') }}"
                    alt=""
                  />
                </a>
              </div>
              <a
                href="#top"
                class="animate-scroll scroll-up"
                style="z-index: 999"
              >
                <img
                  src="{{ asset('assets/img/icons/arrow-down.svg') }}"
                  alt="down arrow"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<style>
a.animate-scroll.scroll-up {
  position: absolute;
  width: 40px;
  height: 40px;
  background-color: #000;
  padding: 10px;
  border-radius: 50%;
  text-align: center;
  right: 70px;
  bottom: 15px;
  transition: all 0.6s cubic-bezier(0.19, 1, 0.22, 1);
  animation: bounce 2s infinite;
}

a.animate-scroll.scroll-up img {
  height: 100%;
  transform: rotate(180deg);
}
</style>

<form id="w0" action="/" method="post">
<input
  type="hidden"
  name="_csrf-frontend"
  value="yg1oTrIsJyptoErWULFmL_n944ZjoLszG1TbKI_oUneyY1oE6mgeUADnA5ATwQdsysmJ3xfp8GdTIpFjwq4HLQ=="
/>
</form>

<script>
$("a[href='#top']").click(function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
defer
></script>
<script src="{{ asset('assets/c901c4fe/yii.js') }}"></script>
<script src="{{ asset('assets/c901c4fe/yii.activeForm.js') }}"></script>
<script src="{{ asset('assets/js/upload_files.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script src="{{ asset('assets/js/min/bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/lg-video.js') }}"></script>
<script src="{{ asset('assets/js/yt-lazyload.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script>
jQuery(function ($) {
  jQuery("#question-general").yiiActiveForm([], []);
  $(window).load(function () {
    setTimeout(function () {
      $(".Popup-wrap").fadeIn(900);
    }, 900);

    setTimeout(function () {
      $(".Popup-wrap").fadeOut(500);
    }, 10000);

    $(".Popup-close").click(function () {
      $(".Popup-wrap").fadeOut(500);
    });
  });

  jQuery("#w0").yiiActiveForm([], []);

  $(document).delegate(
    ".dynamic_submit_btn",
    "click",
    function (event, jqXHR, settings) {
      var form = $(this).closest("form");
      var form_id = form.attr("id");

      if (form.find(".has-error").length) {
        return false;
      }
      $(".dynamic_submit_btn").attr("disabled", true);

      $.ajax({
        url: form.attr("action"),
        type: "post",
        data: form.serialize(),
        beforeSend: function (request) {
          $(".success_wrapper_" + form_id).addClass("hide");
          $(".error_wrapper_" + form_id).addClass("hide");
        },
        success: function (data) {
          if (data.result == "success") {
            form[0].reset();
            $(".uploded_file_cv").html("");
            $(".success_wrapper_" + form_id).removeClass("hide");
            $(".error_wrapper_" + form_id).addClass("hide");
            $(".success_container_" + form_id).html(data.msg);
            $(".dynamic_submit_btn").removeAttr("disabled");
            $(".error_container_" + form_id).html("");

            setTimeout(function () {
              $(".success_wrapper_" + form_id).addClass("hide");
              $(".form-overlay").removeClass("doit");
            }, 4000);
          } else {
            $(".error_container_" + form_id).html(data.msg);
            $(".success_container_" + form_id).html("");
            $(".success_wrapper_" + form_id).addClass("hide");
            $(".error_wrapper_" + form_id).removeClass("hide");

            $(".dynamic_submit_btn").removeAttr("disabled");

            setTimeout(function () {
              $(".error_wrapper_" + form_id).addClass("hide");
              $(".form-overlay").removeClass("doit");
            }, 4000);
          }
        },
      });

      return false;
    }
  );
});
</script>
</body>
</html>
