<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo ($SiteInfo["title"]); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="order by 720map.com" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="telephone=no" name="format-detection" />
    <script type="text/javascript" language="javascript" src="/Public/Mobile/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/Public/Mobile/js/js.js"></script>
    <!--[if lt IE 9]><script src="/Public/Mobile/js/html5.js"></script><![endif]-->
    <link href="/Public/Mobile/css/css.css" type="text/css" rel="stylesheet" />

</head>
<body>

<ul class="nav">
    <li><a title="网站首页" href="/">网站首页</a></li>
    <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><li><a class="c_id_<?php echo ($vo['id']); ?>" href="<?php echo U('Category/index',array('mobile'=>1,'cid'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>

</ul>
<div class="mainboxbg"></div>
<div class="mainbox">

    <!--header-->



    <div id="header" class="clearfix" style="position:relative;">
        <div class="back">
            <a title="返回" href="javascript:history.back();">
                <img src="/Public/Mobile/images/back.jpg" alt="分类">
            </a>
        </div>
        <div class="cpaut">水果专区</div>
        <div class="flbox"><img src="/Public/Mobile/images/fl.jpg" alt="分类"></div>
    </div>
    <div class="wap-lm">
        <?php if(is_array($productCategory)): foreach($productCategory as $key=>$val): ?><a class="sid_<?php echo ($val["id"]); ?>" href="<?php echo U('Category/index', array('mobile'=>1,'cid'=> $cid, 'sid'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="cont clearfix">
        <ul class="cplist clearfix">
            <?php if(is_array($productList)): foreach($productList as $key=>$val): ?><li>
                    <a href="<?php echo U('Category/product', array('mobile'=>1,'id'=>$val['id']));?>">
                        <img src="<?php echo ($val["pic"]); ?>">
                        <p class="title"><?php echo ($val["title"]); ?></p>
                        <span class="title bg"></span>
                    </a>
                </li><?php endforeach; endif; ?>
        </ul>
        <div style=" clear:both"></div>
        <div class="pageListNav">
            <?php echo ($page); ?>
        </div>
    </div>
<!--中间结束-->

<!--底部开始-->
<!--footer-->
    <div id="footer" class="clearfix">
        <div class="copy">
            <p>服务热线：<?php echo ($SiteInfo["telephone"]); ?></p>
            <p>Copyright &copy; 2014-2016 www.720map.com 版权所有</p>
        </div>
    </div>
    <ul class="foc clearfix">
        <li class="sms"> <span><a href="tel:<?php echo ($SiteInfo["telephone"]); ?>">电话咨询</a></span> </li>
        <li class="chat"> <span ><a href="sms:<?php echo ($SiteInfo["telephone"]); ?>">发送短信</a></span> </li>
        <li class="contact" onClick="location.href='<?php echo U('Category/index', array('cid'=>25, 'mobile'=>1));?>'"><span>联系方式</span></li>
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


<script>
    var _current_sid = "<?php echo ($sid); ?>";
    $('.sid_' + _current_sid).addClass('zyhove');
</script>