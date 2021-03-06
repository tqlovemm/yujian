<!DOCTYPE html>
<html>
<head>
    <title>苏州遇见文化传媒-是苏州最具有创意的活动及营销策划公司</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="./images/home/favicon.ico">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <link href="css/lrtk.css" rel="stylesheet" type="text/css" />
    <script src="js/lrtk.js"></script>

    <!-- //js -->
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="sogou_site_verification" content="kUNrgRGqLy"/>
    <meta name="format-detection" content="telephone=yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="广告公司 活动公司 活动策划 活动执行" />
    <meta name="description" content="苏州遇见文化传媒,联系热线:0512-62747413,我们致力于为客户提供专业营销策划、活动策划执行全方位服务。成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业,服务范围遍布全国。" />
    <!-- start-smoth-scrolling -->
    <style>
        .friendly a{color:white;}
        .friendly a:hover{color:orange;}
        .contact-phone{width: 100%;height: 50px;background-color: white;border-radius: 15px;overflow: hidden;;text-align: center;line-height: 50px;margin-bottom: 0;margin-left: 0px;}
        .contact-phone li{width: 49%;height: 100%;padding: 0;}
        .contact-phone li:hover{background-color: #F4A819;}
        .contact-phone li a{padding:15px 40px;text-decoration: none;}
        .contact-phone li a:hover{color: white;}
        @media (max-width: 768px) {

            .tec-logo{ width: 45px;}
            .logo-right ul{height: 100%;}
            .logo-right ul li a{font-size: 30px;color: black;font-weight: bold;}
            .logo-right ul.nav1 li{padding:10px 0 10px 25px;border-bottom: 1px solid #dfb315;letter-spacing: -1px;}
            #mobile_top_banner_sign {
                display: block;
                position: fixed;
                top: 12px;
                right: 12%;
                width: 37px;
                height: 37px;
                border-radius: 19px;
                background: #eaeaea;
                z-index: 116;
                -webkit-transition: all 0.3s cubic-bezier(0.215,0.610,0.355,1.000) 0.2s;
                -moz-transition: all 0.3s cubic-bezier(0.215,0.610,0.355,1.000) 0.2s;
                -ms-transition: all 0.3s cubic-bezier(0.215,0.610,0.355,1.000) 0.2s;
                -o-transition: all 0.3s cubic-bezier(0.215,0.610,0.355,1.000) 0.2s;
                transition: all 0.3s cubic-bezier(0.215,0.610,0.355,1.000) 0.2s;
            }

        }


    </style>
</head>

<body>
<div id="top" class="hidden-sm hidden-xs"></div>
<div class="psd">
    <div class="container" style="padding-left: 5px;padding-right: 5px;">
        <!-- header -->
        <div class="header">
            <div class="logo">
                <a href="/" title="遇见文化传媒"> <img class="img-responsive center-block" src="images/home/logo.png" alt="苏州遇见文化传媒" title="苏州遇见文化传媒"/></a>
            </div>
            <div class="logo-right">
                <span class="menu">
                   <button type="button" class="navbar-toggle navbar-default icontop" data-toggle="collapse" data-target=".navbar-main-collapse">
                       <i style="font-size: 20px;" class="glyphicon glyphicon-th-list"></i>
                   </button>
                </span>
                <ul class="nav1">
                    <li class="visible-xs visible-sm" style="box-shadow: 0 0 0 2px #c39e12;padding-bottom: 20px;padding-top: 20px;font-size: 18px;font-weight: 600;">遇见文化传媒<div id="mobile_top_banner_sign" class="text-center"><i style="line-height:37px;" class="glyphicon glyphicon-remove"></i></div> </li>
                    <li <?php if($_SERVER['PHP_SELF']=='/index.php'){echo ' class="cap" ';}?> title="首页"><a href="index.php" class="act hidden-xs hidden-sm">首页</a><a href="index.php" class=" visible-sm visible-xs">首页</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/services.php'){echo ' class="cap" ';}?> title="服务"><a href="services.php" class="act2 hidden-xs hidden-sm">遇见服务</a><a href="services.php" class=" visible-sm visible-xs">遇见服务</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/case.php'){echo ' class="cap" ';}?> title="案例"><a href="case.php" class="act3 hidden-xs hidden-sm">策划案例</a><a href="case.php" class=" visible-sm visible-xs">策划案例</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/about.php'){echo ' class="cap" ';}?> title="关于我们"><a href="about.php" class="act1 hidden-xs hidden-sm">关于我们</a><a href="about.php" class=" visible-sm visible-xs">关于遇见</a></li>

                    <li <?php if($_SERVER['PHP_SELF']=='/contact.php'){echo ' class="cap" ';}?> title="联系我们"><a href="contact.php" class="act5 hidden-xs hidden-sm">联系我们</a><a href="contact.php" class=" visible-sm visible-xs">联系我们</a></li>
                    <li class="visible-xs visible-sm" style="border: none;padding-top:30px;padding-left: 50px;line-height:25px;">
                        <strong>Tel：</strong>0512-62747413<br>
                        <strong>HR Email：</strong>1607962445@qq.com
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>

            <!-- script for menu -->
            <script>

                $(function(){

                    if(window.screen.availHeight<=768) {

                        $('#mobile_top_banner_sign').click(function(){
                            $('ul.nav1').slideUp(function(){
                                $('body').off('touchmove');
                            });
                        });
                        $( "span.menu" ).click(function() {

                            $('body').on('touchmove', function (event) {
                                event.preventDefault();
                            });
                            $( "ul.nav1" ).slideDown(300,function(){});
                        });

                   if($(window).height()>480&&$(window).height()<=568){

                       $('.logo-right ul.nav1 li').css('padding-top','13px');
                       $('.logo-right ul.nav1 li').css('padding-bottom','13px');
                       $('.logo-right ul li a').css('font-size','34px');
                       $('#mobile_top_banner_sign ').css('top','9px');

                   }
                    if($(window).height()>568&&$(window).height()<=627){

                       $('.logo-right ul.nav1 li').css('padding-top','17px');
                       $('.logo-right ul.nav1 li').css('padding-bottom','17px');
                       $('.logo-right ul li a').css('font-size','38px');

                   }
                    if($(window).height()>627&&$(window).height()<=768){

                       $('.logo-right ul.nav1 li').css('padding-top','20px');
                       $('.logo-right ul.nav1 li').css('padding-bottom','20px');
                       $('.logo-right ul li a').css('font-size','40px');
                       $('.logo-right ul li').css('font-size','20px');


                   }

                }


                })


            </script>

            <!-- //script for menu -->
        </div>
        <!-- //header -->


        <ul class="list-inline contact-phone visible-sm visible-xs">
            <li class="pull-left"><a href="tel://051262747413"><i class="glyphicon glyphicon-earphone"></i>   Phone</a></li>
            <li class="pull-right"><a style="padding:15px 60px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1607962445&site=qq&menu=yes">QQ</a></li>
        </ul>



