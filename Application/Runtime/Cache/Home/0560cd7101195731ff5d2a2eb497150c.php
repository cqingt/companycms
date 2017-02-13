<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title><?php echo ($SiteInfo["title"]); ?></title>
    <meta name="description"
          content="<?php echo ($SiteInfo["description"]); ?>"/>
    <meta name="keywords" content="<?php echo ($SiteInfo["keywords"]); ?>"/>
    <meta name="author" content="design by www.720map.com"/>
    <link rel="stylesheet" type="text/css" href="/Public/Default/css/cms_css.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Default/css/cms_style.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Default/css/cms_camera.css"/>
    <style>
        ::-webkit-scrollbar {
            width: 14px;
            height: 14px;
        }

        ::-webkit-scrollbar-track,
        ::-webkit-scrollbar-thumb {
            border-radius: 999px;
            border: 5px solid transparent;
        }

        ::-webkit-scrollbar-track {
            box-shadow: 1px 1px 5px rgba(0, 0, 0, .2) inset;
        }

        ::-webkit-scrollbar-thumb {
            min-height: 20px;
            background-clip: content-box;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, .2) inset;
        }

        ::-webkit-scrollbar-corner {
            background: transparent;
        }
    </style>
    <script type="text/javascript" src="/Public/Default/js/jquery-1.7.min.js"></script>
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/index.php">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {

        } else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/index.php";
                        } else if (/iPad/i.test(navigator.userAgent)) {

                        } else {

                        }
                    } catch (e) {

                    }
                }
            }
        }
    </script>
    <!--[if IE 6]>
    <script type="text/javascript" src="/Public/Default/js/dd_belatedpng.js"></script>
    <script>
        /* EXAMPLE */
        DD_belatedPNG.fix(".s_nav,img,.s-leftjt,.s-rightjt,.nav a,.nav a:hover,ul,span,.s-dz,.s-hopen,.s-wz");
        /* string argument can be any CSS selector */
        /* .png_bg example is unnecessary */
        /* change it to what suits you! */
    </script>
    <![endif]-->
    <script type="text/javascript" src="/Public/Default/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/Public/Default/js/camera.min.js"></script>
    <script type="text/javascript" src="/Public/Default/js/scrollpic.js"></script>

</head>
<body>

<!--头部开始-->
<div class="hander">
    <div class="topphone">
        <div class="handfoot clearfix">
            <div class="logo">
                <a href="/" title="" >
                    <img src="<?php echo $SiteInfo['logo']; ?>"/>
                </a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="/" class='s_nav'><span>首页</span>首页</a></li>

                    <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><li><a class="c_id_<?php echo ($vo['id']); ?>" href="<?php echo U('Category/index',array('cid'=>$vo['id']));?>"><span><?php echo ($vo["name"]); ?></span><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--头部结束-->
<script>
    jQuery(function () {
        jQuery('#camera_wrap_2').camera({
            height: 'auto',
            loader: 'none',
            pagination: false,
            thumbnails: false,
            easing: 'easeInOutExpo',
            time: 1000
        });
        function width() {
            var wid = window.screen.width;
            switch (wid) {
                case 1920:
                    jQuery(".fluid_container").height(599)
                    break;
                case 1680:
                    jQuery(".fluid_container").height(524)
                    break;
                case 1600:
                    jQuery(".fluid_container").height(499)
                    break;
                case 1440:
                    jQuery(".fluid_container").height(449)
                    break;
                case 1366:
                    jQuery(".fluid_container").height(426)
                    break;
                case 1360:
                    jQuery(".fluid_container").height(424)
                    break;
                case 1280:
                    jQuery(".fluid_container").height(399)
                    break;
                case 1152:
                    jQuery(".fluid_container").height(359)
                    break;
                case 1024:
                    jQuery(".fluid_container").height(319)
                    break;
            }
        }

        width();
        jQuery(window).resize(function () {
            width();
        });
    });

    $(function () {
        $(".s-cplist li").hover(function () {
            $(this).children(".s-yccpbt").stop(false, true).animate({'top': 0}, 300);
        }, function () {
            $(this).children(".s-yccpbt").stop(false, true).animate({'top': -268}, 300);
        });
    });

    $(function () {
        //<!--//--><![CDATA[//><!--
        var scrollPic_02 = new ScrollPic();
        scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
        scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
        scrollPic_02.arrRightId     = "RightArr"; //右箭头ID
        scrollPic_02.frameWidth     = 874;//显示框宽度
        scrollPic_02.pageWidth      = 291; //翻页宽度
        scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
        scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
        scrollPic_02.autoPlay       =  //自动播放
                scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
        scrollPic_02.initialize(); //初始化
        //-->
        //<!]]>
    });
    $(function () {
        $(".s-xgw .s-center li").hover(function () {
            $(this).addClass("syyr");
        }, function () {
            $(this).removeClass("syyr");
        });
    });

    $(function () {
        //News-list
        //Hover($(".news-list .list li"), "hover");
        if ($(window).width() < 1440) {
            if ($(".s-newsnr .img").css("display") == "none") {
                $(".s-newsnr").width(1002);
                $(".news-list .list").css({
                    "float": "none",
                    "margin": "0 auto"
                });
                $(".s-newslist").css("width", $(".s-newslist li").length * 501);
                if ($(".s-newslist li").length > 2) {
                    for (i = 0; i < $(".s-newslist li").length / 2; i++) {
                        $(".news-change").append('<span class="span' + i + '"></span>');
                    }
                    $(".news-change span").eq(0).addClass("on");
                    $(".news-change span").click(function () {
                        $(this).addClass("on").siblings().removeClass("on");
                        $(".s-newslist").stop().animate({marginLeft: -501 * $(this).index()}, 500)
                    })
                }
            } else {
                $(".s-newsnr").css("width", 1002);
                $(".s-newslist").css("width", $(".s-newslist li").length * 501);
                for (i = 0; i < $(".s-newslist li").length; i++) {
                    $(".news-change").append('<span class="span' + i + '"></span>');
                }
                $(".news-change span").eq(0).addClass("on");
                $(".news-change span").click(function () {
                    $(this).addClass("on").siblings().removeClass("on");
                    $(".s-newslist").stop().animate({marginLeft: -501 * $(this).index()}, 500)
                })
            }
        } else {
            $(".s-newsnr").css("width", 1002);
            $(".s-newslist").css("width", $(".s-newslist li").length * 501);
            if ($(".s-newslist li").length > 2) {
                for (i = 0; i < $(".s-newslist li").length / 2; i++) {
                    $(".news-change").append('<span class="span' + i + '"></span>');
                }
                $(".news-change span").eq(0).addClass("on");
                $(".news-change span").click(function () {
                    $(this).addClass("on").siblings().removeClass("on");
                    $(".s-newslist").stop().animate({marginLeft: -501 * $(this).index()}, 500)
                })
            }
        }
    });

</script>
<!--中间开始-->
<div class="main">

    <!-------------------------banner 开始-------------------------------->

    <div class="sy_banner">
        <div class="fluid_container">
            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                <?php if(is_array($slidesLists)): foreach($slidesLists as $k=>$vo): ?><div data-src="<?php echo ($vo["pic"]); ?>"></div><?php endforeach; endif; ?>
            </div>
        </div>
    </div>

    <!-------------------------banner 结束-------------------------------->
    <div class="w1002">
        <div class="s-about clearfix">
            <div class="s-aboutbt"><h2><a target="关于我们" href="about/jianjie/jianjie.html">关于我们</a></h2></div>
            <div class="s-aboutnr">
                <div class="s-aboutleft"><img src="<?php echo ($SiteInfo["about_left"]); ?>" alt=""/></div>
                <div class="s-aboutright"><p class="s-wztop"><?php echo ($SiteInfo["about_title"]); ?></p>
                    <p><?php echo ($SiteInfo["about_content"]); ?>...</p></div>
            </div>
            <div class="s-vode"><img src="<?php echo ($SiteInfo["about_right"]); ?>" width="311" height="257" alt="配送流程"/></div>
        </div>
        <div class="s-cp clearfix">
            <div class="s-cplist">
                <ul class="clearfix">
                    <?php if(is_array($products)): foreach($products as $key=>$val): ?><li>
                            <a href="" title="<?php echo ($val["title"]); ?>">
                                <img src="<?php echo ($val["pic"]); ?>" width="268" height="268" alt="<?php echo ($val["title"]); ?>"/>
                            </a>
                            <div class="s-yccpbt">
                                <a href="" title="<?php echo ($val["title"]); ?>">
                                    <h3><?php echo ($val["title"]); ?></h3>
                                    <?php
 if ($val['additional']) { $arr = explode('|', $val['additional']); for ($i=0, $n = count($arr); $i < $n; $i++ ) { echo '<p>'.$arr[$i].'</p>'; } } ?>
                                    <p>￥<?php echo ($val["price"]); ?>元</p>
                                </a>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="s-cpbt" style="background:url(<?php echo ($SiteInfo["product_right"]); ?>) no-repeat"><a href="shuiguo/shuiguo.html" target="_blank">查看更多</a></div>
        </div>
    </div>
    <div class="s-yzrp">
        <div class="s-yzcpw">
            <div class="s-yzcpbt">
                <h2 class="l-yzcpbtitem"><a href="jidi/jidi.html" target="_blank">Base display</a></h2>
                <h2 class="l-yzcpbtit"><a href="jidi/jidi.html" target="_blank">基地展示</a></h2>
            </div>
            <div class="s-yzcplb clearfix"><a class="s-leftjt" id="LeftArr" href="javascript:;"></a>
                <div class="s-xgw clearfix" id="ISL_Cont_1">
                    <ul class="s-center">
                        <?php if(is_array($bases)): foreach($bases as $key=>$vo): ?><li>
                                <a class="s-yzimg" href="jidi/17.html" title="<?php echo ($vo["title"]); ?>" >
                                    <img src="<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>" width="266"
                                    height="198"/></a>
                                <div class="s-yzdb">
                                    <h3><a href="jidi/17.html" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></h3>
                                </div>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <a class="s-rightjt" id="RightArr" href="javascript:;"></a>
                <div class="both"></div>
            </div>
        </div>
    </div>
    <div class="w1002">
        <div class="s-news">
            <div class="s-yzcpbt s-newsbt">
                <h2 class="l-synewsem"><a href="news/gongsi/gongsi.html" target="_blank">company news center</a></h2>
                <h2 class="l-synews"><a class="l-newschinatit" href="news/gongsi/gongsi.html" target="_blank">公司新闻</a>
                </h2>
            </div>
            <div class="s-newsnr">
                <div class="s-newslist">
                    <ul class="clearfix">
                        <?php if(is_array($companyNews)): foreach($companyNews as $key=>$val): ?><li class="clearfix">
                                <div class="s-newsnrl">
                                    <a href="<?php echo U('Article/index',array('id'=>$val['id']));?>" title="<?php echo ($val["title"]); ?>">
                                        <img src="<?php echo ($val["pic"]); ?>" width="200" height="110" alt="<?php echo ($val["title"]); ?>"/><span></span>
                                    </a>
                                </div>
                                <div class="s-newsnrr">
                                    <h3>
                                        <a href="<?php echo U('Article/index',array('id'=>$val['id']));?>" title="<?php echo ($val["title"]); ?>"><?php echo (mb_substr($val["title"],0,18,'utf-8')); ?></a>
                                    </h3>
                                    <span><?php echo (date("Y-m-d",$val["ctime"])); ?></span>
                                    <div class="s-newsfoot">
                                        <p><?php echo (mb_substr(strip_tags($val["content"]),0, 60,'utf-8')); ?>...</p>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; ?>

                    </ul>
                </div>
                <div class="clear"></div>
                <div class="news-change"></div>
            </div>
        </div>
        <div class="s-yycz clearfix">
            <div class="s-aboutbt">
                <h2><a class="s-yyczbt" href="zhishi/zhishi.html" target="_blank">营养知识</a></h2>
                <div class="s-ggby">
                    <a href="news/gongsi/gongsi.html" target="_blank">公司新闻</a>

                    <a href="news/hangye/hangye.html" target="_blank">行业新闻</a>

                    <a href="zhishi/zhishi.html" target="_blank">营养知识</a>
                </div>
            </div>
            <div class="s-yyczl">
                <div class="news-list sy-news-list">
                    <div class="list sy-list">
                        <div class="news-move">
                            <ul>
                                <?php if(is_array($nutritionNews)): foreach($nutritionNews as $key=>$val): ?><li class="">
                                        <div class="time">
                                            <p class="day"> <?php echo (date("d",$val["ctime"])); ?></p>
                                            <p> <?php echo (date("Y-m",$val["ctime"])); ?></p>
                                        </div>
                                        <div class="intro">
                                            <h3>
                                                <a href="<?php echo U('Article/index',array('id'=>$val['id']));?>" title="<?php echo ($val["title"]); ?>" target="_blank"
                                                   class="tit"><?php echo ($val["title"]); ?></a>
                                            </h3>
                                            <a href="<?php echo U('Article/index',array('id'=>$val['id']));?>" title="<?php echo ($val["title"]); ?>" target="_blank"><?php echo (mb_substr(strip_tags($val["content"]),0,60,'utf-8')); ?>...</a>
                                        </div>
                                    </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-yyczr">
                <div class="s-yyczimg">
                    <a href="zhishi/123.html" title="<?php echo ($nutritionDetail["title"]); ?>" target="_blank">
                        <img src="<?php echo ($nutritionDetail["pic"]); ?>" width="444" height="302" alt="<?php echo ($nutritionDetail["title"]); ?>"/>
                    </a>
                </div>
                <div class="s-yycznews">
                    <h3><a href="<?php echo U('Article/index',array('id'=>$nutritionDetail['id']));?>" title="<?php echo ($nutritionDetail["title"]); ?>" target="_blank"><?php echo ($nutritionDetail["title"]); ?></a></h3>
                    <p><?php echo (mb_substr(strip_tags($nutritionDetail["content"]),0,60,'utf-8')); ?>...</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--中间结束-->


<!-- 调用脚部文件 -->
<!--footer-->
<div id="footer" class="clearfix">
    <div class="copy">
        <p>服务热线：029-89663455</p>
        <p>Copyright &copy; 2014-2016 www.panpingguo.com 潘苹果 版权所有</p>
    </div>
</div>
<ul class="foc clearfix">
    <li class="sms"> <span><a href="">电话咨询</a></span> </li>
    <li class="chat"> <span ><a href="">发送短信</a></span> </li>
    <li class="contact" onClick="location.href='list.php?tid=18'"><span>联系方式</span></li>
</ul>
</div>
<script>

    $(document).ready(function(){

        function wSize(){

            var heights = $(window).height();

            var heighttop=$(".foc").height();

            var focHeights = $("#header").height();

            var mainboxheight=heights - heighttop - focHeights ;

            //var widths = $(window).width();

            //var left = heights ;//heights - ($("#header").height()+71);

            //$(".mianbox").height(left);

            $("#footer").css('marginBottom', heighttop);

            //$(".cont").css('minHeight', mainboxheight);
        }

        wSize();
    })

</script>
</body>
</html>