<?php /*a:1:{s:59:"/www/wwwroot/qiangdan/application/index/view/my/detail.html";i:1615598992;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><title><?php echo lang('app_name'); ?></title><link rel="stylesheet" href="/static_new/css/public.css"><link rel="stylesheet" href="/static_new/css/icon-font.css"><style>        body {
            background: #f2f2f2;
            margin-bottom: 65px;
        }

        .header {
            width: 100%;
            background: #fff!important;
            color: #464646 !important;
            position: fixed;
            top: 0;
            z-index: 99;
            position: relative;
        }

        .header > p {
            width: 96%;
            margin: 0 2%;
            height: 46px;
            line-height: 46px;
            text-align: center;
        }

        .help-main {
            margin: 15px 10px;
            background: #fff;
            border-radius: 10px;
            padding: 20px 10px;
        }

        .title {
            padding-bottom: 10px;
            font-weight: 700;
            font-size: 22px;
        }

        .time {
            color: #aaa;
            font-size: 14px;
        }

        .help-detile {
            margin-top: 10px;
            font-size: 13px;
        }

        .help-detile img {
            max-width: 99%;
        }
    </style><link rel="stylesheet" href="/static_new/css/theme.css"><script src="/static_new/js/pack.js"></script><script>        (function () {
            var dw = document.createElement("script");
            dw.src = "/static_new/js/pack.js?e9154e78c011e7e0eba17228a1621937"
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(dw, s);
        })()
    </script><script type="application/javascript">        window.onpageshow = function (event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
    </script></head><body id="app"><div class="header"><div class="goback"><span class="icon iconfont icon-fanhui"></span><a style="color: #464646 !important" href="javascript:history.go(-1)"><?php echo lang('返回'); ?></a></div><p><?php echo htmlentities($msg['title']); ?></p></div><div class="help-main"><!--<p class="time"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($msg['addtime'])? strtotime($msg['addtime']) : $msg['addtime'])); ?></p>--><div class="help-detile"><?php echo $msg['content']; ?></div></div></body></html>