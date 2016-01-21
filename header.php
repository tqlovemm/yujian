<!DOCTYPE html>
<html>
<head>
    <title>苏州遇见文化传媒</title>
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
    <meta name="format-detection" content="telephone=yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="文化传媒 广告公司 活动公司 活动策划 活动执行" />
    <meta name="description" content="遇见传媒，致力于为客户提供专业活动策划执行全方位服务。成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业，服务范围遍布全国。" />
    <!-- start-smoth-scrolling -->
    <style>
        .contact-phone{width: 100%;height: 50px;background-color: white;border-radius: 15px;overflow: hidden;;text-align: center;line-height: 50px;margin-bottom: 0;margin-left: 0px;}
        .contact-phone li{width: 49%;height: 100%;padding: 0;}
        .contact-phone li:hover{background-color: #F4A819;}
        .contact-phone li a{padding:15px 40px;text-decoration: none;}
        .contact-phone li a:hover{color: white;}

    </style>
</head>

<body>
<div id="top" class="hidden-sm hidden-xs"></div>
<div class="psd">
    <div class="container">
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
                    <li <?php if($_SERVER['PHP_SELF']=='/index.php'){echo ' class="cap" ';}?> title="遇见首页"><a href="index.php" class="act hidden-xs hidden-sm">HOME</a><a href="index.php" class="act visible-sm visible-xs">遇见首页</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/about.php'){echo ' class="cap" ';}?> title="遇见文化是谁"><a href="about.php" class="act1 hidden-xs hidden-sm">ABOUT US</a><a href="about.php" class="act1 visible-sm visible-xs">关于遇见</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/services.php'){echo ' class="cap" ';}?> title="遇见能做什么"><a href="services.php" class="act2 hidden-xs hidden-sm">SERVICES</a><a href="services.php" class="act2 visible-sm visible-xs">遇见服务</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/case.php'){echo ' class="cap" ';}?> title="遇见做过什么"><a href="case.php" class="act3 hidden-xs hidden-sm">CASE</a><a href="case.php" class="act3 visible-sm visible-xs">遇见案例</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/contact.php'){echo ' class="cap" ';}?> title="联系遇见"><a href="contact.php" class="act5 hidden-xs hidden-sm">CONTACT US</a><a href="contact.php" class="act5 visible-sm visible-xs">联系遇见</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>

            <!-- script for menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.nav1" ).slideToggle( 300, function() {
                    });
                });
            </script>
            <!-- //script for menu -->
        </div>
        <!-- //header -->


        <ul class="list-inline contact-phone visible-sm visible-xs">
            <li class="pull-left"><a href="tel://051262747413"><i class="glyphicon glyphicon-earphone"></i>   Phone</a></li>
            <li class="pull-right"><a style="padding:15px 60px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1607962445&site=qq&menu=yes">QQ</a></li>
        </ul>



