<?php
    include ('header.php');
?>
<style>
    .nav1 span{color:#FFAE00 !important;}
    .banner-info{display: none;}

    a:hover{text-decoration: none;}
    .bg { opacity: 0; filter: alpha(opacity=0); width: 100%; height: 100%; background: #713333; position: absolute; left: 0; top: 0; transition: 400ms; }
    .i5 { opacity: 0; filter: alpha(opacity=0); margin: -34px 0 0 -34px; position: absolute; left: 10%; top: 54%; transition: 800ms; font:300 24px "微软雅黑"; color:#FFF;}
    .i6 { opacity: 0; filter: alpha(opacity=0); margin: -34px 0 0 -34px; position: absolute; right: 10%; top: 70%; transition: 800ms; font:300 24px "微软雅黑"; color:#FFF; }
    .col-md-3:hover .bg { opacity: 0.8; filter: alpha(opacity=80); }
    .col-md-3:hover .i5 { left: 9%; opacity: 1; filter: alpha(opacity=100); color:#FFF; text-align:center; width:99%; float:left; display:block;}
    .col-md-3:hover .i6 { right: 0%; opacity: 1; filter: alpha(opacity=100); color:#FFF; text-align:center;width:100%; float:left;display:block;}
    .items{padding: 0;position: relative;}
    @media (max-width: 768px) {

        .banner{min-height: inherit !important;}
        .i5{display: none !important;}
        .i5,.i6{font-size: 14px;}


    }


</style>
<!-- banner -->
<div class="banner">

    <div class="row">
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
    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/1.jpg">
            <a href="about.php"><div class="bg" style="background: #fdcc05;"></div></a>
            <a class="i5">我们拥有</a>
            <a class="i6">经验丰富的策划执行团队</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/2.jpg">
            <div class="bg" style="background: #8fecfd;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">优质高端的活动合作场地</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/3.jpg">
            <div class="bg" style="background: #aca7fd;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">一流的舞台音响灯光设备</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/4.jpg">
            <div class="bg" style="background: #fd9ce6;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">专业的设计和精良的制作</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/5.jpg">
            <div class="bg" style="background: #fd8d7c;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">表现出色的演员模特资源</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/6.jpg">
            <div class="bg" style="background: #e8e6fb;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">随时可邀约的国内外乐队</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/7.jpg">
            <div class="bg" style="background: #fd8f38;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">数不胜数的成功业务案例</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-4 items">
            <img class="img-responsive center-block" src="./images/home-show/8.jpg">
            <div class="bg" style="background: #b4b4bb;"><a style="display:block; width:100%; height:100%;"></a></div>
            <a class="i5">我们拥有</a>
            <a class="i6">值得信赖的行业实力背景</a>
        </div>

    </div>

</div>

<!-- //banner -->
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