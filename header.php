<!DOCTYPE html>
<html>
<head>
    <title>苏州遇见文化传媒</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="./images/home/favicon.ico">
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <!-- //js -->
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="文化传媒 广告公司 活动公司 活动策划 活动执行" />
    <meta name="description" content="遇见传媒，致力于为客户提供专业活动策划执行全方位服务。成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业，服务范围遍布全国。" />


    <!-- start-smoth-scrolling -->

</head>

<body>
<div class="psd">
    <div class="container">
        <!-- header -->
        <div class="header">
            <div class="logo">
                <a href="index.php" title="遇见文化传媒"> <img class="img-responsive center-block" src="images/home/logo.png" alt="遇见文化logo" title="遇见文化传媒"/></a>
            </div>
            <div class="logo-right">
                <span class="menu">
                   <button type="button" class="navbar-toggle navbar-default icontop" data-toggle="collapse" data-target=".navbar-main-collapse">

                       <i style="font-size: 25px;" class="glyphicon glyphicon-th-list"></i>

                   </button>
                </span>
                <ul class="nav1">
                    <li <?php if($_SERVER['PHP_SELF']=='/yujian/index.php'){echo ' class="cap" ';}?> title="首页"><a href="index.php" class="act">HOME</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/yujian/about.php'){echo ' class="cap" ';}?> title="我们是谁？"><a href="about.php" class="act1">ABOUT US</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/yujian/services.php'){echo ' class="cap" ';}?> title="我们能做什么？"><a href="services.php" class="act2">SERVICES</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/yujian/case.php'){echo ' class="cap" ';}?> title="我们做过什么"><a href="case.php" class="act3">CASE</a></li>
                    <li <?php if($_SERVER['PHP_SELF']=='/yujian/contact.php'){echo ' class="cap" ';}?> title="联系我们"><a href="contact.php" class="act5">CONTACT US</a></li>
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
