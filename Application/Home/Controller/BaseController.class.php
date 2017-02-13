<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    protected $email_set;
    protected $admin_email;
    protected $CAPTCHA_ID = "c6a8f518771d8ea164fd92890d5685b7";
    protected $PRIVATE_KEY = "5eff47a446c7f4958cef79f9e16b16c7";
    public function _initialize(){

        if ($this->isMobile()) {
            C('DEFAULT_THEME', 'mobile');
        }
        if (I('get.mobile') == 1) {
            //C('DEFAULT_THEME', 'mobile');
        }
        //
        $fenlei = M("category");
        $fenleiListone = $fenlei->where("fid = 0")->order('sort desc')->select();
        $this ->assign("fenleiListone", $fenleiListone);
        $Site = M("site");
        $SiteInfo =$Site->find(1);
        $this->SiteInfo = $SiteInfo;
        $this->assign("SiteInfo",$SiteInfo);
        /*查询邮件配置*/
        $emailModel = M("email_set");
        $email_set = $emailModel->find(1);
        $this->email_set = $email_set;
        /*设置管理员邮箱*/
        $this->admin_email = $SiteInfo['admin_email'];
        /*查询友情链接*/
        $m = M("friendlink");
        $friendlinkarr = $m->order("id desc")->select();
        $this->assign("friendlinkarr",$friendlinkarr);
    }

    /*发送邮件方法*/
    protected function MySmtp($smtpemailto,$mailtitle,$mailcontent){
        $email = new \Org\Util\Smtp();
        $email->smtp($this->email_set['smtpserver'],$this->email_set['smtpserverport'],true,$this->email_set['smtpuser'],$this->email_set['smtppass']);
        $email->debug = false;//是否显示发送的调试信息
        $state = $email->sendmail($smtpemailto,$this->email_set['smtpusermail'], $mailtitle, $mailcontent,"HTML");
    }


    /*极验验证验证码*/
    public function EchoMyVerify(){
        $GtSdk = new \Org\Util\GeetestLib($this->CAPTCHA_ID,$this->PRIVATE_KEY);
        $user_id = "test";
        $status = $GtSdk->pre_process($user_id);
        $_SESSION['gtserver'] = $status;
        $_SESSION['user_id'] = $user_id;
        echo $GtSdk->get_response_str();
    }

    public function CheckMyVerify(){

    }

    private function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        {
            return true;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
        {
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT']))
        {
            $clientkeywords = array ('nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap',
                'mobile'
            );

            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            {
                return true;
            }
        }
        // 协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT']))
        {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
            {
                return true;
            }
        }

        return false;
    }
}
