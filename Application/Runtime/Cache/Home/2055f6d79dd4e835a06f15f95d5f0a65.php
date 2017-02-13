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
    <meta http-equiv="mobile-agent" content="format=xhtml;url=http://www.baidu.com">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {

        } else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
                if (window.location.href.indexOf("mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "<?php echo U('Index/index', array('mobile'=> 1));?>";
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
                    <li><a href="/" class=''><span>首页</span>首页</a></li>

                    <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><li><a class="c_id_<?php echo ($vo['id']); ?>" href="<?php echo U('Category/index',array('cid'=>$vo['id']));?>"><span><?php echo ($vo["name"]); ?></span><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--头部结束-->
<!--中间开始-->
<div class="main">
    <!-------------------------banner 开始-------------------------------->
    <div class="zy_banner"><img src="./Public/Uploads/images/news.jpg"  width="1004" height="310" /></div>
    <!-------------------------banner 结束-------------------------------->

    <div class="w1002">
        <div class="s-zytop">
            <ul class="clearfix">
                <li>当前位置：<a href='/'>主页</a> > <a href='#'>新闻资讯</a> > <a href="#"><?php echo ($category); ?></a></li>
                <li class="s-gg"><?php echo ($SiteInfo["brand"]); ?>·<?php echo ($SiteInfo["slogan"]); ?></li>
            </ul>
        </div>

        <div class="s-zycenter">
            <p class="s-btyw">NEWS</p>
            <p>新闻资讯</p>
        </div>
        <div class="zy-mume  clearfix">
            <ul>
                <?php if(is_array($newsCategory)): foreach($newsCategory as $key=>$val): ?><li>
                        <h2><a href="<?php echo U('Category/index', array('cid' => $cid,'sid'=>$val['id']));?>" class="new_item sid_<?php echo ($val["id"]); ?>" data-cid="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></a></h2>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="s-zyfoot">
            <div class="news-list zynews-list">
                <div class="list">
                    <div class="news-move">
                        <ul>
                            <?php if(is_array($articleList)): foreach($articleList as $key=>$val): ?><li class="class_<?php echo ($val["fid"]); ?>">
                                    <div class="s-newsbj">
                                        <div class="time">
                                            <p class="day"><?php echo (date("d",$val["ctime"])); ?></p>
                                            <p><?php echo (date("Y-m",$val["ctime"])); ?></p>
                                        </div>
                                        <div class="intro">
                                            <h3>
                                                <a href="<?php echo U('Category/news',array('cid' => $cid,'id'=>$val['id']));?>" class="tit"><?php echo ($val["title"]); ?></a>
                                            </h3>
                                            <a href="<?php echo U('Category/news',array('cid' => $cid,'id'=>$val['id']));?>">　　<?php echo (mb_substr(strip_tags($val["content"]),0,45,'utf-8')); ?>...</a>
                                        </div>
                                    </div>
                                    <div class="s-dbyy"></div>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <?php echo ($page); ?>
                <div class="news-change"></div>
            </div>
        </div>
    </div>
</div>

<!--中间结束-->

<!-- 调用脚部文件 -->
<!--底部开始-->
<script type="text/javascript" src="/Public/Default/js/top.js"></script>
<div class="footer">
    <div class="foot">
        <div class="footl">
            <ul>
                <li class="s-dz">
                    <p class="footone"><span>地址</span>／address</p>
                    <p><?php echo ($SiteInfo["address"]); ?></p>
                </li>
                <li class="s-hopen">
                    <p class="footone"><span>电话</span>／telephone</p>
                    <p><?php echo ($SiteInfo["telephone"]); ?></p>
                </li>
                <li class="s-wz">
                    <p class="footone"><span>网址</span>／Site</p>
                    <p>http://<?php echo $_SERVER['HTTP_HOST']; ?></p>
                </li>
            </ul>
        </div>
        <div class="footr">
            <div class="s-ewm"><img src="<?php echo $SiteInfo['qrcode']; ?>" alt=""/></div>
            <div class="s-dbcd">
                <ul>
                    <li>
                        <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><a href="<?php echo U('Category/index',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a>  |<?php endforeach; endif; ?>
                        <a href="http://www.720map.com" target="_blank">720map</a>
                    </li>
                </ul>
                <p>Copyright &copy; 2014-2017 www.720map.com 版权所有
                    <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo ($SiteInfo["icp"]); ?></a></p>
                <p>技术支持：<a href="http://www.720map.com/" target="_blank">720map</a>
                <p>
                <p class="gjz">友情链接：
                    <?php if(is_array($friendlinkarr)): foreach($friendlinkarr as $key=>$vo): ?><a href='<?php echo ($vo["url"]); ?>' target='_blank'><?php echo ($vo["title"]); ?></a><?php endforeach; endif; ?>
                   </p>
            </div>
        </div>
    </div>
</div>
<div class="floating_ck">
    <dl>
        <dt></dt>
        <dd class="consult"><span>在线咨询</span>
            <div class="floating_left"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($SiteInfo["qq"]); ?>&site=qq&menu=yes">在线咨询</a>
            </div>
        </dd>
        <dd class="quote"><span>索要报价</span>
            <div class="floating_left"><a href="contact/contact.html">咨询代理价</a></div>
        </dd>
        <dd class="qrcord"><span>扫一扫</span>
            <div class="floating_left floating_ewm"><i></i>
                <p class="qrcord_p01">扫一扫<br>
                    进入手机网站</p>
                <p class="qrcord_p02">服务热线<br>
                    <b><?php echo ($SiteInfo["telephone"]); ?><b></p>
            </div>
        </dd>
        <dd class="return"><span onClick="gotoTop();return false;">返回顶部</span></dd>
    </dl>
</div>
<script type="text/javascript">
    var _set = null;
    var _href = window.location.toString();
    if (_href.indexOf('c=Category') != -1 ) {
        var arr = _href.split('&');
        for (var i = 0, l = arr.length; i < l; i++) {
            if (arr[i].indexOf('cid=') != -1) {
                var c_id = arr[i].substr(4);
                if (c_id) {
                    $('.nav').find('a').removeClass('s_nav');
                    $('.c_id_' + c_id).addClass('s_nav');
                    _set = 1;
                }
            }
        }
    }
    if (!_set) {
        $('.nav').find('a').first().addClass('s_nav');
    }
</script>
<!--底部结束-->
</body>
</html>


<script>
    var _current_sid = "<?php echo ($sid); ?>";
    $('.sid_' + _current_sid). addClass('zyhove');
/*    $('.new_item').on('click', function () {
        var _cid = $(this).data('cid');
        $('.news-move li').hide();
        $('.class_' + _cid).show();
    })*/
</script>