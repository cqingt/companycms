<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
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


<div id="header" class="clearfix">
    <div id="logo"><a href="m.html"><img src="/Public/Mobile/images/logo.png" alt=""></a></div>
    <div class="flbox"><img src="/Public/Mobile/images/fl.jpg" alt="分类"></div>
</div>
<script type="text/javascript" language="javascript" src="/Public/Mobile/js/banner.js"></script>
<div id="slideBox" class="slideBox">
    <div class="bd">
        <ul>
            <?php if(is_array($slidesLists)): foreach($slidesLists as $key=>$val): ?><li><a class="pic"><img src="<?php echo ($val["pic"]); ?>" alt=""/></a> <a class="tit"></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="hd">
        <ul>
        </ul>
    </div>
</div>
<script type="text/javascript">

    TouchSlide({

        slideCell: "#slideBox",

        titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层

        mainCell: ".bd ul",

        effect: "leftLoop",

        autoPage: true,//自动分页

        autoPlay: true //自动播放

    });

</script>

<!--serch-->

<form role="search" action="<?php echo U('Index/search', array('mobile'=>1));?>" method="post">
    <div id="serchbox" class="clearfix">
        <input type="hidden" name="mobile" value="1"/>
        <input type="hidden" name="kwtype" value="0"/>
        <input class="indexl input" type="text" name="keywords">
        <input type="submit" class="sechan" value="&nbsp;" onClick="return checkForm();">
    </div>
</form>

<!--2级导航-->

<ul class="listmenu2 clearfix">
    <li>
        <a href="<?php echo U('Category/index', array('cid'=>24));?>">
            <img src="/Public/Mobile/images/cp.png" alt="关于我们">
            <p>关于我们</p>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Category/index', array('cid'=>24,'sid'=>33));?>">
            <img src="/Public/Mobile/images/pp.png" alt="产业链条">
            <p>产业链条</p>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Category/index', array('cid'=>24,'sid'=>34));?>">
            <img src="/Public/Mobile/images/server.png" alt="发展历程">
            <p>发展历程</p>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Category/index', array('cid'=>22));?>">
            <img src="/Public/Mobile/images/news.png" alt="基地展示">
            <p>基地展示</p>
        </a>
    </li>
</ul>
<ul class="hotmenulit clearfix">
    <?php if(is_array($productCategory)): foreach($productCategory as $key=>$val): ?><li class="current">
            <a href="<?php echo U('Category/index', array('mobile'=>1,'cid'=> 3, 'sid'=>$val['id']));?>">
                <span><img src="/Public/Mobile/images/cx.png" alt=""></span>
                <b><?php echo ($val["name"]); ?></b>
                <p>HOT PEODUCTS</p>
            </a>
        </li><?php endforeach; endif; ?>
</ul>

<!--产品展示-->

<div class="cpzs">
    <h3>水果专区</h3>
    <span class="more"><a href="<?php echo U('Category/index', array('mobile'=>1, 'cid'=>3));?>">MORE+</a> </span></div>
<ul class="cplist clearfix">
    <?php if(is_array($products)): foreach($products as $key=>$val): ?><li>
            <a href="<?php echo U('Category/product', array('mobile'=>1, 'id'=>$val['id']));?>">
                <img src="<?php echo ($val["pic"]); ?>">
                <p class="title"><?php echo ($val["title"]); ?></p>
                <span class="title bg"></span>
            </a>
        </li><?php endforeach; endif; ?>
</ul>

<!-- 调用脚部文件 -->
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