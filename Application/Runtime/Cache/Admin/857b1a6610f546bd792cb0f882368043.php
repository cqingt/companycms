<?php if (!defined('THINK_PATH')) exit();?>
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-网站配置</title>
    <link href="/Public/Default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Default/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Public/Default/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/Public/Default/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/Public/Default/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/Public/Default/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/Public/Default/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/Public/Default/css/animate.css" rel="stylesheet">
    <link href="/Public/Default/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

<link href="/Public/Default/jquery-upload-file/css/uploadfile.css" rel="stylesheet">
<link href="/Public/Default/jquery-upload-file/css/uploadfile.custom.css" rel="stylesheet">

<!-- start left -->
<nav class="navbar-default navbar-static-side" role="navigation" id="navs">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header" style="text-align:center;">
                <div class="dropdown profile-element"> <span>
                        </span>
                        <span class="clear"> <span class="block m-t-xs" style="color:#fff;"> <strong class="font-bold">管理员您好</strong>
                        </span> <span class="text-muted text-xs block">欢迎回来~~   </span> </span>
                </div>
                <div class="logo-element">

                </div>
            </li>
            <li class="active">
                <a href="<?php echo U('Index/index');?>">
                    <i class="fa fa-diamond"></i>
                    <span class="nav-label">后台首页</span>
                </a>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-gear"></i> <span class="nav-label">网站设置</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Site/index');?>">网站管理</a></li>
                    <li><a href="<?php echo U('Email/index');?>">网站邮件设置</a></li>
                    <li><a href="<?php echo U('Adminer/index');?>">管理员修改</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">分类管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Category/index');?>">查看分类</a></li>
                    <li><a href="<?php echo U('Category/add');?>">添加分类</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html">
                    <i class="fa fa-file-image-o"></i>
                    <span class="nav-label">图片管理</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Images/base');?>">基地展示</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-file-image-o"></i> <span class="nav-label">幻灯片管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Slides/index');?>">查看幻灯片</a></li>
                    <li><a href="<?php echo U('Slides/add');?>">添加幻灯片</a></li>
                </ul>
            </li>
            <li style="display: none;">
                <a href="index.html"><i class="fa fa-sitemap"></i> <span class="nav-label">邀请码管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Yaoqing/index');?>">查看邀请码</a></li>
                    <li><a href="<?php echo U('Yaoqing/add');?>">添加邀请码</a></li>
                    <li><a href="<?php echo U('Yaoqing/production');?>">生成邀请码</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-clipboard"></i> <span class="nav-label">文章管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Article/add');?>">添加文章</a></li>
                    <li><a href="<?php echo U('Article/index');?>">查看文章</a></li>
                    <li><a href="<?php echo U('Article/recovery');?>">文章回收站</a></li>
                </ul>
            </li>
            <li style="display: none;">
                <a href="index.html"><i class="fa fa-users"></i> <span class="nav-label">会员管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('User/index');?>">会员查看</a></li>
                    <li><a href="<?php echo U('User/recovery');?>">会员回收站</a></li>
                </ul>
            </li>
            <li style="display: none;">
                <a href="index.html"><i class="fa fa-bank"></i> <span class="nav-label">主题管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Theme/index');?>">主题查看</a></li>
                    <li><a href="<?php echo U('Theme/down');?>" onclick="alert('静静等待 暂未开放');return false;">主题下载</a></li>
                </ul>
            </li>
            <li style="display: none;">
                <a href="index.html"><i class="fa fa-bug"></i> <span class="nav-label">插件管理</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Plugs/index');?>" onclick="alert('静静等待 暂未开放');return false;">插件浏览</a></li>
                    <li><a href="<?php echo U('Plugs/recovery');?>" onclick="alert('静静等待 暂未开放');return false;">插件下载</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-key"></i> <span class="nav-label">网站维护</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Maintain/index');?>">缓存清理</a></li>
                    <li><a href="<?php echo U('Maintain/databackups');?>">备份还原数据库</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-bookmark"></i> <span class="nav-label">友情链接</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Friendlink/index');?>">查看友链</a></li>
                    <li><a href="<?php echo U('Friendlink/add');?>">添加友链</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Login/logout');?>">
                    <i class="fa fa-sign-out"></i>退出登录
                </a>
            </li>
        </ul>
</nav>
</div>
<div id="page-wrapper" class="gray-bg" style="overflow: hidden;">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="人痛苦的本质都是对自己无能的愤怒" class="form-control" style="width: 500px;"
                               disabled="">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">每一个你不满意的现在,都有一个你不努力的曾经.</span>
                </li>
                <li>欢迎你，<?php echo (session('username')); ?></li>
                <li>
                    <a data-toggle="modal" href="#myModal6">Good Luck</a>
                </li>
            </ul>

        </nav>
    </div>

<!-- end left -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>网站配置</h2>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <!-- <h5>All form elements <small>With custom checbox and radion elements.</small></h5> -->
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal" action="<?php echo U('Site/doedit',array('id'=>$arr['id']));?>"
                      enctype="multipart/form-data">
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站标题</label>

                        <div class="col-sm-8"><input type="text" class="form-control" name="title" required
                                                     value="<?php echo ($arr["title"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站名称</label>

                        <div class="col-sm-8"><input type="text" class="form-control" name="name" required
                                                     value="<?php echo ($arr["name"]); ?>"></div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">副标题</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="set_content" value="<?php echo ($arr["set_content"]); ?>">
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">品牌</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="brand" value="<?php echo ($arr["brand"]); ?>">
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">标语</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="slogan" value="<?php echo ($arr["slogan"]); ?>">
                        </div>
                    </div>

                    <div class="form-group has-success"><label class="col-sm-4 control-label">管理员邮箱</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="admin_email" value="<?php echo ($arr["admin_email"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">联系电话</label>
                        <div class="col-sm-8"><input name="telephone" class="form-control" value="<?php echo ($arr["telephone"]); ?>">
                        </div>
                    </div>

                    <div class="form-group has-success"><label class="col-sm-4 control-label">联系QQ</label>
                        <div class="col-sm-8"><input name="qq" class="form-control" value="<?php echo ($arr["qq"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">联系地址</label>
                        <div class="col-sm-8"><input name="address" class="form-control" value="<?php echo ($arr["address"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">公司名称</label>
                        <div class="col-sm-8"><input name="company" class="form-control" value="<?php echo ($arr["company"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">经度(查询地址：http://www.gpsspg.com/maps.htm)</label>
                        <div class="col-sm-8"><input name="lat" class="form-control" value="<?php echo ($arr["lat"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">纬度</label>
                        <div class="col-sm-8"><input name="lng" class="form-control" value="<?php echo ($arr["lng"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">上传文件大小限制(M为单位
                        0为不限制)</label>

                        <div class="col-sm-8"><input type="text" class="form-control" name="file_size" required
                                                     value="<?php echo ($arr["file_size"]); ?>"></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站关键字</label>
                        <div class="col-sm-8"><textarea name="keywords" required
                                                        class="form-control"><?php echo ($arr["keywords"]); ?></textarea></div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站描述</label>
                        <div class="col-sm-8"><textarea name="description" required class="form-control"><?php echo ($arr["description"]); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站ICP备案号</label>
                        <div class="col-sm-8"><textarea name="icp" required class="form-control"><?php echo ($arr["icp"]); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">网站统计代码</label>
                        <div class="col-sm-8"><textarea name="statistics" required class="form-control"><?php echo ($arr["statistics"]); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group has-success"><label class="col-sm-4 control-label">友情链接说明</label>
                        <div class="col-sm-8"><textarea name="friend_link" required class="form-control"><?php echo ($arr["friend_link"]); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">网站LOGO (250px * 96px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="logo" required value="<?php echo ($arr["logo"]); ?>" id="logo">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["logo"]); ?>"
                                                                                       height="170px;"></div>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">二维码 (92px * 113px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader2">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="qrcode" required value="<?php echo ($arr["qrcode"]); ?>"
                                   id="qrcode">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["qrcode"]); ?>"
                                                                                       height="113px;"></div>
                        </div>
                    </div>

                    <div class="form-group has-success"><label class="col-sm-4 control-label">关于我们—品牌标题</label>
                        <div class="col-sm-8"><input name="about_title" class="form-control" value="<?php echo ($arr["about_title"]); ?>">
                        </div>
                    </div>

                    <div class="form-group has-success"><label class="col-sm-4 control-label">关于我们—品牌说明</label>
                        <div class="col-sm-8"><textarea name="about_content" required class="form-control"><?php echo ($arr["about_content"]); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">关于我们左侧图 (220px * 300px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader3">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="about_left" required value="<?php echo ($arr["about_left"]); ?>"
                                   id="about_left">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["about_left"]); ?>"
                                                                                       height="113px;"></div>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">关于我们右侧图 (310px * 256px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader4">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="about_right" required
                                   value="<?php echo ($arr["about_right"]); ?>" id="about_right">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["about_right"]); ?>"
                                                                                       height="113px;"></div>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">产品展示右侧图 (192px * 540px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader5">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="product_right" required
                                   value="<?php echo ($arr["product_right"]); ?>" id="product_right">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["product_right"]); ?>"
                                                                                       height="113px;"></div>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label">基地展示遮蔽图片 (300px * 300px)</label>
                        <div class="col-sm-4">
                            <div id="fileuploader6">上传</div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pic_hover" required
                                   value="<?php echo ($arr["pic_hover"]); ?>" id="pic_hover">
                            <div style="height: 170px;width: 100%;padding: 15px;"><img src="<?php echo ($arr["pic_hover"]); ?>" height="150px;"></div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <!--<div class="form-group has-success"><label class="col-sm-4 control-label">注册是否需要注册码</label>
                        <div class="col-sm-3">
                            <select name="userStatus">
                                <option value="0" <?php if($arr["userstatus"] == 0): ?>selected<?php endif; ?>>不需要</option>
                                <option value="1" <?php if($arr["userstatus"] == 1): ?>selected<?php endif; ?>>需要</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">注册支持会员投稿</label>
                        <div class="col-sm-3">
                            <select name="submission">
                                <option value="0" <?php if($arr["submission"] == 0): ?>selected<?php endif; ?>>支持</option>
                                <option value="1" <?php if($arr["submission"] == 1): ?>selected<?php endif; ?>>不支持</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">发表文章是否需要审核</label>
                        <div class="col-sm-3">
                            <select name="articleSatus">
                                <option value="0" <?php if($arr["articlesatus"] == 0): ?>selected<?php endif; ?>>不需要</option>
                                <option value="1" <?php if($arr["articlesatus"] == 1): ?>selected<?php endif; ?>>需要</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success"><label class="col-sm-4 control-label">是否显示幻灯片</label>
                        <div class="col-sm-3">
                            <select name="slides_display">
                                <option value="0" <?php if($arr["slides_display"] == 0): ?>selected<?php endif; ?>>显示</option>
                                <option value="1" <?php if($arr["slides_display"] == 1): ?>selected<?php endif; ?>>不显示</option>
                            </select>
                        </div>
                    </div>
                    </div>-->
                    <div class="ibox-content">
                        <div class="text-center">
                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- start footer -->
    
<div class="footer">
    <div class="pull-right">
        <a href="/">企业管理系统</a>
    </div>
    <div>
        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/Public/Default/js/jquery-2.1.1.js"></script>
    <script src="/Public/Default/js/jquery.cookie.js"></script>
    <script src="/Public/Default/js/inspinia.js"></script>
    <script src="/Public/Default/js/bootstrap.min.js"></script>
    <script src="/Public/Default/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/Public/Default/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/Public/Default/js/plugins/flot/jquery.flot.js"></script>
    <script src="/Public/Default/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/Public/Default/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/Public/Default/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/Public/Default/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/Public/Default/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/Public/Default/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- 消息通知 -->
    <script src="/Public/Default/js/plugins/gritter/jquery.gritter.min.js"></script>

<script>
    $(function(){
        $("#navs a").click(function(){
            $.cookie('click_url',$(this).attr('href'));
        })
        if($.cookie('click_url') != undefined){
            var s_url=$.cookie('click_url');
            var now_url = '';
            for(var i = 0;i<$("#side-menu li").length;i++){
                now_url=$("#side-menu li a").eq(i).attr("href");
                if(now_url == s_url){
                    $("#side-menu a").eq(i).parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().addClass("in");
                }else{
                    $("#side-menu a").eq(i).parent().removeClass("active");
                }
            }
        }
    })


        </script>
    <!-- Toastr -->

    <script src="/Public/Default/jquery-upload-file/js/jquery.form.js"></script>
    <script src="/Public/Default/jquery-upload-file/js/jquery.uploadfile.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#fileuploader").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "logo", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "logo"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#logo").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });

            $("#fileuploader2").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "qrcode", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "qrcode"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#qrcode").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });

            $("#fileuploader3").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "about_left", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "about_left"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#about_left").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });

            $("#fileuploader4").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "about_right", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "about_right"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#about_right").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });

            $("#fileuploader5").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "product_right", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "product_right"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#product_right").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });

            $("#fileuploader6").uploadFile({
                url: "<?php echo U('Site/upload_logo');?>", //上传URL
                fileName: "pic_hover", //名称
                maxFileCount: 1, //上传文件数量
                acceptFiles: "image/*", //类型
                formData: {name: "pic_hover"}, //通过FROM传过去的参数
                onSuccess: function (files, data, xhr, pd) {
                    if (data.success) {
                        $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传成功</div>');
                        $("#pic_hover").val(data.file_path);
                    } else {

                    }
                },
                onError: function (files, status, errMsg, pd) {
                    $(".ajax-file-upload-filename:contains(" + files + ")").after('<div style = "color:red;">上传失败</div>');
                    alert('上传失败请检查,错误提示：' + errMsg);
                }
            });
        });
    </script>
    <!-- end footer -->
</div>
</script>