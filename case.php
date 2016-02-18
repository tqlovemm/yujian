<?php
include ('header.php');
?>

    <link rel="stylesheet" type="text/css" href="css/style_common.css" />
    <link rel="stylesheet" type="text/css" href="css/style9.css" />
        <style>
            .port{color: #717176;}
            .i_case_list {overflow: hidden; }
            .b_center {  margin: 0 auto;  text-align: center;  }
            .text-left{font-size: 20px;}
            a:hover{text-decoration: none;}
            .i_case_list .item{overflow:hidden; display:none;width: 33%;height: 250px;float: left;}
            .works { width: 400px; height:250px; }
            .works .listBox { height: 250px; margin: 0; overflow: hidden; position: relative; }
            .works .list { width:400px; height:250px; overflow:hidden;}
            .works ul { width: 400px; position: absolute; left: 0; top: 0; }
            .works li { width: 400px; float: left; margin: 0;}
            .works li a { display: block; }
            .works li .imgBox { height: 250px; overflow: hidden; position: relative; }
            .works li .img { width: 400px; height: 250px; }
            .works li .bg { opacity: 0; filter: alpha(opacity=0); width: 100%; height: 250px; background: #713333; position: absolute; left: 0; top: 0; transition: 400ms; }
            .works li .i5 { opacity: 0; filter: alpha(opacity=0); margin: -34px 0 0 -34px; position: absolute; left: 10%; top: 54%; transition: 800ms; font:300 24px "微软雅黑"; color:#FFF;}
            .works li .i6 { opacity: 0; filter: alpha(opacity=0); margin: -34px 0 0 -34px; position: absolute; right: 10%; top: 70%; transition: 800ms; font:300 24px "微软雅黑"; color:#FFF; }
            .works li:hover { border-color: #69B015; font:300 24px "微软雅黑"; cursor:pointer; }
            .works li:hover .bg { opacity: 0.8; filter: alpha(opacity=80); }
            /* .works li:hover .i5 { left: 44%; opacity: 1; filter: alpha(opacity=100); font:300 24px "微软雅黑"; color:#FFF;}
             .works li:hover .i6 { right: 25%; opacity: 1; filter: alpha(opacity=100); font:300 24px "微软雅黑"; color:#FFF; }  */
            .works li:hover .i5 { left: 9%; opacity: 1; filter: alpha(opacity=100); font:300 24px "微软雅黑"; color:#FFF; text-align:center; width:99%; float:left; display:block;}
            .works li:hover .i6 { right: 0%; opacity: 1; filter: alpha(opacity=100); font:300 24px "微软雅黑"; color:#FFF; text-align:center;width:100%; float:left;display:block;}

            @media (max-width: 768px) {
                .works,
                .works ul,
                .works li,
                .works li .img{width: 100%;}
                .i_case_list .item{width: 100%;height: height:200px;margin-bottom: 10px;}
                .i_case_list .row{margin: 0;}
                .works li:hover .i5 ,
                .works li:hover .i6 { text-align:center;left:0;width: 100%;}
                .works li .i5{margin:  -34px 0 auto; }
                .works li .i6{margin:  -34px 0 auto; }



            }
        </style>
<!-- portfolio -->
	<div class="port">
        <h1 class="text-center"><span style="color: orange;font-weight: bold;">CASE</span>&nbsp;&nbsp;<span>我们做过什么？</span></h1>
        <h3 class="text-center">只有专注，才有专业 ！</h3>
        <h3 class="text-center">苏州遇见文化传媒有限公司一直在坚持自己的理念：我们致力于活动策划执行！</h3>
        <p class="text-left">遇见传媒成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业，服务范围遍布全国、在各个领域发展了一批相当稳固的客户群体，为不同领域的客户提供最优质的服务。我们与苏州园区世界五百强企业、大型房地产集团、商会、机构等建立长期合作关系，可独立完成各类活动前期策划筹备及后期的制作执行，在业内独树一帜。
        </p>
        <div class="i_case_list b_center">
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img class="img" src="images/case/1.jpg">
                                        <div class="bg" style="background:#0288AE;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">晚会演出</a>
                                        <a class="i6">GALA</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/2.jpg" class="img">
                                        <div class="bg" style="background: #FDD900;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">宴会</a>
                                        <a class="i6">BANQUET</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/3.jpg" class="img">
                                        <div class="bg" style="background: #F3E85A;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">会议</a>
                                        <a class="i6">CONFERENCE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/4.jpg" class="img">
                                        <div class="bg" style="background: #D3E0C5;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">年终总结</a>
                                        <a class="i6">ANNUAL REVIE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/5.jpg" class="img">
                                        <div class="bg" style="background: #0179C7;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">展会</a>
                                        <a class="i6">EXHIBITION</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/6.jpg" class="img">
                                        <div class="bg" style="background: #726962;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">节目表演</a>
                                        <a class="i6">PERFORMANCE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/7.jpg" class="img" title="苏州遇见文化传媒开业剪彩" alt="苏州遇见文化传媒开业剪彩">
                                        <div class="bg" style="background: #3D84BC;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">开业剪彩</a>
                                        <a class="i6">RIBBON CUTTING</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/8.jpg" class="img">
                                        <div class="bg" style="background: #7D7E83;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">晚会演出</a>
                                        <a class="i6">GALA</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/9.jpg" class="img">
                                        <div class="bg" style="background: #12130C;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">会议</a>
                                        <a class="i6">CONFERENCE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/10.jpg" class="img">
                                        <div class="bg" style="background: #B94C51;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">节目表演</a>
                                        <a class="i6">PERFORMANCE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/11.jpg" class="img">
                                        <div class="bg" style="background: #6e472a;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">商场活动</a>
                                        <a class="i6">MARKET ACTIVITY</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: block;" class="item">
                <div class="works row">
                    <div class="listBox">
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="imgBox">
                                        <img data-bd-imgshare-binded="1" src="images/case/12.jpg" class="img">
                                        <div class="bg" style="background: #1AAEBD;"><a style="display:block; width:100%; height:100%;"></a></div>
                                        <a class="i5">商场活动</a>
                                        <a class="i6">MARKET ACTIVITY</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
	</div>
        <!-- //banner -->
<?php
include ('footer.php');
?>