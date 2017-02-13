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
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

<!--中间开始-->
<div class="main">
    <!-------------------------banner 开始-------------------------------->
    <div class="zy_banner"><img src="./Public/Uploads/images/contact.jpg" width="1004" height="310"/></div>
    <!-------------------------banner 结束-------------------------------->
    <div class="w1002">
        <div class="s-zytop">
            <ul class="clearfix">
                <li>当前位置：<a href='/'>主页</a> > <a href='#'>联系我们</a></li>
                <li class="s-gg"><?php echo ($SiteInfo["brand"]); ?>·<?php echo ($SiteInfo["slogan"]); ?></li>
            </ul>
        </div>

        <div class="s-zycenter">
            <p class="s-btyw">CONTACT US</p>
            <p>联系我们</p>
        </div>
        <div class="zy-mume  clearfix">
            <ul>

            </ul>
        </div>
        <div class="s-zyfoot">
            <div class="s-zyfoot s-lxwm">
                <h2 style="text-align: center;"><span style="font-family: 微软雅黑,Microsoft YaHei;"><?php echo ($SiteInfo["company"]); ?></span>
                </h2>
                <p style="display:none;text-align: center;"> Nanjing AB template network studio</p>
                <br/>
                <h3 style="text-align: center;"> Tel: <?php echo ($SiteInfo["telephone"]); ?></h3>
                <p style="text-align: center;"> <?php echo ($SiteInfo["address"]); ?><br/>
                    邮箱：<?php echo ($SiteInfo["admin_email"]); ?>　网址：<?php echo $_SERVER['HTTP_HOST']; ?>　QQ：<?php echo ($SiteInfo["qq"]); ?></p>
                <p style="text-align: center;"><img src="<?php echo ($SiteInfo["qrcode"]); ?>" title="二维码"/></p>
            </div>
            <center>

                <!--百度地图容器-->
                <div style="width:1000px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
                <script type="text/javascript">
                    //创建和初始化地图函数：
                    function initMap() {
                        createMap();//创建地图
                        setMapEvent();//设置地图事件
                        addMapControl();//向地图添加控件
                        addMarker();//向地图中添加marker
                    }

                    //创建地图函数：
                    function createMap() {
                        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                        var point = new BMap.Point(<?php echo ($SiteInfo["lng"]); ?>, <?php echo ($SiteInfo["lat"]); ?>);//定义一个中心点坐标
                        map.centerAndZoom(point, 15);//设定地图的中心点和坐标并将地图显示在地图容器中
                        window.map = map;//将map变量存储在全局
                    }

                    //地图事件设置函数：
                    function setMapEvent() {
                        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                        map.enableKeyboard();//启用键盘上下左右键移动地图
                    }

                    //地图控件添加函数：
                    function addMapControl() {
                    }

                    //标注点数组
                    var markerArr = [{
                        title: "<?php echo ($SiteInfo["company"]); ?>",
                        content: "<?php echo ($SiteInfo["address"]); ?>",
                        point: "<?php echo ($SiteInfo["lng"]); ?>|<?php echo ($SiteInfo["lat"]); ?>",
                        isOpen: 0,
                        icon: {w: 23, h: 25, l: 46, t: 21, x: 9, lb: 12}
                    }
                    ];
                    //创建marker
                    function addMarker() {
                        for (var i = 0; i < markerArr.length; i++) {
                            var json = markerArr[i];
                            var p0 = json.point.split("|")[0];
                            var p1 = json.point.split("|")[1];
                            var point = new BMap.Point(p0, p1);
                            var iconImg = createIcon(json.icon);
                            var marker = new BMap.Marker(point, {icon: iconImg});
                            var iw = createInfoWindow(i);
                            var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
                            marker.setLabel(label);
                            map.addOverlay(marker);
                            label.setStyle({
                                borderColor: "#808080",
                                color: "#333",
                                cursor: "pointer"
                            });

                            (function () {
                                var index = i;
                                var _iw = createInfoWindow(i);
                                var _marker = marker;
                                _marker.addEventListener("click", function () {
                                    this.openInfoWindow(_iw);
                                });
                                _iw.addEventListener("open", function () {
                                    _marker.getLabel().hide();
                                })
                                _iw.addEventListener("close", function () {
                                    _marker.getLabel().show();
                                })
                                label.addEventListener("click", function () {
                                    _marker.openInfoWindow(_iw);
                                })
                                if (!!json.isOpen) {
                                    label.hide();
                                    _marker.openInfoWindow(_iw);
                                }
                            })()
                        }
                    }
                    //创建InfoWindow
                    function createInfoWindow(i) {
                        var json = markerArr[i];
                        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
                        return iw;
                    }
                    //创建一个Icon
                    function createIcon(json) {
                        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
                            imageOffset: new BMap.Size(-json.l, -json.t),
                            infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                            offset: new BMap.Size(json.x, json.h)
                        })
                        return icon;
                    }

                    initMap();//创建和初始化地图
                </script>
            </center>
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