<?php
    include ('header.php');
?>
<style>


    .nav1 span{color:#FFAE00 !important;}
    .banner-info{display: none;}
    @media (max-width: 768px) {

        .banner{min-height: inherit !important;}
    }
</style>
<!-- banner -->
<div class="banner">
    <!-- Slider-starts-Here -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--//End-slider-script -->
    <div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
        <ul class="rslides" id="slider3">
            <li>
                <div class="banner1" onmouseenter="shows(this)" onmouseleave="hides(this)">
                    <div class="banner-info">
                        <h3>全方位<span>服务</span><br><small>FULL SERVICE</small></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2"  onmouseenter="shows(this)" onmouseleave="hides(this)">
                    <div class="banner-info">
                        <h3>强有力<span>执行</span><br><small>STRONG EXECUTION</small></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner3"  onmouseenter="shows(this)" onmouseleave="hides(this)">
                    <div class="banner-info">
                        <h3>多领域<span>经验</span><br><small>MULTIDISCIPLINARY EXPERIENCE</small></h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
    <script>

        function shows(content){

            var con = $(content);
            con.children('.banner-info').fadeIn();

        }
        function hides(content){

            var con = $(content);
            con.children('.banner-info').fadeOut();

        }


    </script>
<?php
    include ('footer.php');
?>