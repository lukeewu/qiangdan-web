<?php

namespace app\index\controller;

use library\Controller;
use think\facade\Request;
use think\db;

class Send extends Controller
{
    // 请求地址
    public function sendSMS($mobile, $msg)
    {

        //创蓝接口参数
        $postArr = array(
            'account'  =>  'I1641663',
            'password' => 'ngj8SPtb639c6b',
            'msg' => $msg,
            'mobile' => $mobile,
            // 'report' => $needstatus,
        );
        $postArr = json_encode($postArr);
        $result = $this->curlPost('http://intapi.253.com/send/json', $postArr);
        return $result;
    }
	public function smsyun(){
	    $myPost = $_POST;
	    $my = $_POST['dai'] . $_POST['tel'];
	    $code = rand(10000,99999);
	    session('yzm', $code);
        $result = $this->sendSMS($my, "Your verification code is $code and it is valid for 5 minutes.");
        if (!is_null(json_decode($result))) {
            $output = json_decode($result, true);
            if (isset($output['code'])  && $output['code'] == '0') {
                echo $result;
            } else {
                echo $result;
            }
        } else {
            echo $result;
        }
	}
// 	国际
    private function curlPost($url, $postFields)
    {
        // $postFields = json_encode($postFields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8'   //json版本需要填写  Content-Type: application/json;
        ));
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); //若果报错 name lookup timed out 报错时添加这一行代码
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $ret = curl_exec($ch);
        if (false == $ret) {
            $result = curl_error($ch);
        } else {
            $rsp = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 != $rsp) {
                $result = "请求状态 " . $rsp . " " . curl_error($ch);
            } else {
                $result = $ret;
            }
        }
        curl_close($ch);
        return $result;
    }
    //获取验证码
    // public function sendsms(Request $request)
    // {
    //     if (config('app.duanxin.duanxin_status') == 2) {
    //         return json(['code'=>1,'info'=>lang('当前未开启验证码注册，您可以直接注册')]);
    //     }
        
    //     $tel = Request::post('tel/s','');
    //     $type = Request::post('type',1);
    //     // if(!is_mobile($tel)){
    //     // }

    //     if($type == 1){
    //         $num = Db::table('xy_users')->where(['tel'=>$tel])->count();
    //         if($num){
    //             return json(['code'=>1,'info'=>lang('手机号码已注册')]);
    //         }
    //     }

    //     $res = Db::table('xy_verify_msg')->field('addtime,tel')->where(['tel'=>$tel])->find();
    //     if($res && (($res['addtime'] + 60) > time()))
    //         return json(['code'=>0,'info'=>lang('1分钟内只能发送一条短信')]);

    //     $time = date('YmdHis',time());
    //     $num = rand(10000,99999);

    //     if (config('app.duanxin.duanxin_type') == 2) {
    //         $sms_code = new AliCode();
    //         $result = $sms_code->code($tel, $num);
    //     } else if (config('app.duanxin.duanxin_type') == 3) {
    //         $result = $this->send_by_yunzhixun($tel,$num);
    //     } else {
    //         $result = $this->smsbao($tel,$num);
    //     }

    //     if($result['status'] == 1){  //发送成功
    //         if(!$res){
    //             $r = Db::table('xy_verify_msg')->insert(['tel'=>$tel, 'msg'=>$num, 'addtime'=>time(),'type'=>$type]);
    //         }else{
    //             $r = Db::table('xy_verify_msg')->where(['tel'=>$tel])->data(['msg'=>$num,'addtime'=>time(),'type'=>$type])->update();
    //         }

    //         if($r)
    //             return json(['code'=>0,'info'=>lang('发送成功')]);
    //         else
    //             return json(['code'=>0,'info'=>lang('发送失败')]);
    //     }else
    //         return $result;
    // }


    public function smsbao($tel,$code)
    {
        //----------------短信宝---------------------
        $statusStr = array(
            "0" => "短信发送成功",
            "-1" => "参数不全",
            "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
            "30" => "密码错误",
            "40" => "账号不存在",
            "41" => "余额不足",
            "42" => "帐户已过期",
            "43" => "IP地址限制",
            "50" => "内容含有敏感词"
        );
        $smsapi = "http://api.smsbao.com/";
        $user = config('app.smsbao.user');       //短信平台帐号15196952584
        $pass = config('app.smsbao.pass') ;
        $pass = md5("$pass");   //短信平台密码
        $sign = config('app.smsbao.sign') ;
        $content = "【".$sign."】您的验证码为{$code}，验证码5分钟内有效。";
        $phone = urlencode('+91'.$tel);//要发送短信的手机号码
        $sendurl = $smsapi . "wsms?u=" . $user . "&p=" . $pass . "&m=" . $phone . "&c=" . urlencode($content);
        $result = file_get_contents($sendurl);

        if ($result == '0') {
            return ['status' => 1, 'msg' => lang("发送成功")];
        } else {
            return ['status' => 0, 'msg' => $statusStr[$result]];
        }

    }

    /**
     * 云之讯
     */
    public function send_by_yunzhixun($tel="", $codeNum='000000') {

        $url    = "https://open.ucpaas.com/ol/sms/sendsms";
        $body   = array(
            "sid"        => config('yunzhixun')['yunzhixun_sid'],
            "token"      => config('yunzhixun')['yunzhixun_token'],
            "appid"      => config('yunzhixun')['yunzhixun_appid'],
            "templateid" => config('yunzhixun')['yunzhixun_templateid'],
            "param"      => $codeNum,
            "mobile"     => $tel
        );
        $header = array("Content-Type:application/json");
        $result = $this->curlPost($url, $body, 5, $header, 'json');
        $res2   = json_decode($result, true);
        $d = [
            'status' => 0,
            'info'  => lang("发送失败")
        ];

        if ($res2["msg"] == 'OK') {
            $d['status'] = 1;
            $d['info'] = lang("发送成功");
            return $d;
        }
        return $d;
    }

    /**
     * 传入数组进行HTTP POST请求
     */
    // public function curlPost($url, $post_data = array(), $timeout = 5, $header = "", $data_type = "") {
    //     $header = empty($header) ? '' : $header;
    //     //支持json数据数据提交
    //     if($data_type == 'json'){
    //         $post_string = json_encode($post_data);
    //     }elseif($data_type == 'array') {
    //         $post_string = $post_data;
    //     }elseif(is_array($post_data)){
    //         $post_string = http_build_query($post_data, '', '&');
    //     }

    //     $ch = curl_init();    // 启动一个CURL会话
    //     curl_setopt($ch, CURLOPT_URL, $url);     // 要访问的地址
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // 对认证证书来源的检查   // https请求 不验证证书和hosts
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
    //     curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    //     //curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    //     //curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    //     curl_setopt($ch, CURLOPT_POST, true); // 发送一个常规的Post请求
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);     // Post提交的数据包
    //     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);     // 设置超时限制防止死循环
    //     curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    //     //curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     // 获取的信息以文件流的形式返回
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $header); //模拟的header头
    //     $result = curl_exec($ch);

    //     // 打印请求的header信息
    //     //$a = curl_getinfo($ch);
    //     //var_dump($a);

    //     curl_close($ch);
    //     return $result;
    // }

}
