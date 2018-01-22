<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer_bottom">
                <div class="wrapper">
                        © 2018 Общественная организация "Федерация спортивного ориентирования Тульской области"
                </div>
            </div>
        </footer><!-- .site-footer -->
    </div><!-- .site-inner -->
</div><!-- .site -->

<script type='text/javascript' src='http://o-tula.net/wp-content/themes/otula/js/skip-link-focus-fix.js?ver=20160816'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"expand":"\u0440\u0430\u0441\u043a\u0440\u044b\u0442\u044c \u0434\u043e\u0447\u0435\u0440\u043d\u0435\u0435 \u043c\u0435\u043d\u044e","collapse":"\u0441\u0432\u0435\u0440\u043d\u0443\u0442\u044c \u0434\u043e\u0447\u0435\u0440\u043d\u0435\u0435 \u043c\u0435\u043d\u044e"};
/* ]]> */
</script>
<script type='text/javascript' src='http://o-tula.net/wp-content/themes/otula/js/functions.js?ver=20160816'></script>
<script type='text/javascript' src='http://o-tula.net/wp-content/plugins/page-links-to/js/new-tab.min.js?ver=2.9.8'></script>
<script type='text/javascript' src='http://o-tula.net/wp-includes/js/wp-embed.min.js?ver=4.9.2'></script>
<script type="text/foobox">/* Run FooBox FREE (v1.2.27) */
(function( FOOBOX, $, undefined ) {
  FOOBOX.o = {wordpress: { enabled: true }, countMessage:'Фото %index из %total', excludes:'.fbx-link,.nofoobox,.nolightbox,a[href*="pinterest.com/pin/create/button/"]', affiliate : { enabled: false }, error: "Could not load the item"};
  FOOBOX.init = function() {
    $(".fbx-link").removeClass("fbx-link");
    $(".foogallery-container.foogallery-lightbox-foobox, .foogallery-container.foogallery-lightbox-foobox-free, .gallery, .wp-caption, a:has(img[class*=wp-image-]), .post a:has(img[class*=wp-image-]), .foobox").foobox(FOOBOX.o);
  };
}( window.FOOBOX = window.FOOBOX || {}, FooBox.$ ));

FooBox.ready(function() {

  jQuery("body").append("<span style=\"font-family:'foobox'; color:transparent; position:absolute; top:-1000em;\">f</span>");
  FOOBOX.init();

});
</script>                <script type="text/javascript">
                    if (window.addEventListener){
                        window.addEventListener("DOMContentLoaded", function() {
                            var arr = document.querySelectorAll("script[type='text/foobox']");
                            for (var x = 0; x < arr.length; x++) {
                                var script = document.createElement("script");
                                script.type = "text/javascript";
                                script.innerHTML = arr[x].innerHTML;
                                arr[x].parentNode.replaceChild(script, arr[x]);
                            }
                        });
                    } else {
                        console.log("FooBox does not support the current browser.");
                    }
                </script>
                <style>
footer.comment-meta, footer.entry-footer {
    position: initial;
    display: none;
}
</style>
</body>
</html>

<script>
jQuery(document).ready(function($){
    $('#menu-glavnoe-menyu a').each(function(index) {
        console.log(this.href);
        if(this.href.indexOf('#') >= 0){
            $(this).addClass('disabled');
        }
        else {
            console.log(2);
        }
    });
});
</script>