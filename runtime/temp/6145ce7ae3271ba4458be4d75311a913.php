<?php /*a:1:{s:58:"/www/wwwroot/qiangdan/application/index/view/ctrl/vip.html";i:1615598992;}*/ ?>
<html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title><?php echo htmlentities(app('lang')->get('Memberupgrade')); ?></title><meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"><meta name="keywords" content=""><meta name="description" content=""><link rel="stylesheet" href="/public/css/style.css"><!--<link rel="stylesheet" href="/public/js/layer_mobile/need/layer.css">--><!--JQ--><!--<script src="/static/plugs/jquery/jquery.min.js"></script>--><!--<script type="text/javascript" src="/statics/js/swiper.3.1.7.min.js"></script>--><!--<script type="text/javascript" src="/statics/js/jquery.SuperSlide.2.1.1.js"></script>--><!--<script type="text/javascript" src="/statics/js/TouchSlide.1.0.js"></script>--><!--<script type="text/javascript" src="/statics/js/jquery.simplesidebar.js"></script>--><link rel="stylesheet" href="/statics/css/share.css"><link rel="stylesheet" href="/statics/css/font.css"><!--JQ--><script type="text/javascript" src="/statics/js/jquery-2.1.1.min.js"></script><script type="text/javascript" src="/statics/js/jquery-form.js"></script><script src="/public/js/layer_mobile/layer.js"></script><link href="/public/js/layer_mobile/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss"><script type="text/javascript" src="/statics/js/swiper.3.1.7.min.js"></script><script src="/statics/js/jquery.simplesidebar.js"></script><script src="/statics/js/jquery.SuperSlide.2.1.1.js"></script><script src="/statics/js/TouchSlide.1.0.js"></script><script type="text/javascript" src="/statics/js/func.js"></script><script>        var SITE_URL  = 'https:' == document.location.protocol ?'https://' : 'http://' + "6688.605839.com";

    </script><script>if(("standalone" in window.navigator) && window.navigator.standalone){
        var noddy, remotes = false;
        document.addEventListener('click', function(event) {
            noddy = event.target;
            while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                noddy = noddy.parentNode;
            }
            if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)){
                event.preventDefault();
                document.location.href = noddy.href;
            }
        },false);
    }</script><style type="text/css">        .yhidden{
            overflow-y:hidden;
        }
        .vip_car{
            width: 100%;
            height: 6rem;
            background: -webkit-linear-gradient(#fff, #e2e2e2);
            background: -o-linear-gradient(#fff, #e2e2e2);
            background: -moz-linear-gradient#fff(, #e2e2e2);
            background: linear-gradient(#fff, #ededed);
            background: -webkit-linear-gradient(left,#27a6fa,#8e71f5);
            /*border-bottom: 2px red solid;*/
        }
        .vip_car_xx{
            width: 92%;
            height: 5rem;
            background: url(/public/img/vip_bg.png) no-repeat;
            background-size: 100% 100%;
            margin-left: 4%;
            margin-top: 1rem;
            float: left;
            border-radius: 0.5rem 0.5rem 0 0;
            position: relative;

        }
        .vip_car_logo{
            width: 3rem;
            height: 3rem;
            border-radius: 3rem;
            margin-top: 1rem;
            margin-left: 1rem;
            float: left;
        }
        .vip_car_logo_name{
            width: 43%;
            height: 2.5rem;
            /*background: red;*/
            float: left;
            margin-top: 0.5rem;
            padding-left: 0.5rem;
            line-height: 2.5rem;
            font-size: 18px;
            font-weight: bold;
            color: #fff;

        }
        .vip_car_logo_rw{
            float: left;
            line-height: 1rem;
            padding-left: 0.5rem;
            color: #fff;
            font-size: 14px;
            width: 60%;
            height: 1rem;
        }
        .vip_car_hyxq{
            background: #cfa55d;
            float: right;
            height: 1.5rem;
            line-height: 1.5rem;
            display: inline-block;
            position: absolute;
            top: 1.75rem;
            right: 0rem;
            padding: 0 1rem;
            border-radius: 1.5rem 0 0 1.5rem;
            color: #997030;
            font-size: 11px;
            text-decoration: none;
        }
        .vip_car_hyjj{
            width: 100%;
            height: 3rem;
            background: rgba(255,255,255,.25);
            float: left;
            margin-top: 0.5rem;
            padding: 0 1rem;
            box-sizing: border-box;
        }
        .vip_car_hytq{
            height: 1.5rem;
            line-height: 1.5rem;

        }
        .vip_car_hytq span{
            width: 50%;
            height: 1.5rem;
            line-height: 1.5rem;
            display: inline-block;
            text-align: center;
            color: #997030;
        }
        .vip_car_yjsl span{
            text-align: center;
            /*background: red;*/
            display: inline-block;
            width: 50%;
            font-size: 16px;
            color: #fff;
        }
        .vip_xxjss{
            width: 92%;
            height: 6rem;
            margin: 0.5rem 4% 0;
        }
        .vip_xxjss li{
            width: 33.33%;
            height: 6rem;
            float: left;
        }
        .vip_tequan{
            width: 100%;
            height: 2rem;
            line-height: 2rem;
            font-size: 16px;
            font-weight: bold;
            padding: 0 0.5rem;
            box-sizing: border-box;
            text-align: left;
            float: left;
            margin-bottom: 0.25rem;
            text-align: center;
            margin: 0.5rem 0;

        }
        .vip_tequan span{
            width: 35%;
            height: 0.02rem;
            background: #ccc;
            display: inline-block;
            /*margin-top: 1rem;*/
            float: left;
            margin-top: 0.95rem;
        }
        .vip_tequan a{
            width: 60%;
            height: 2rem;
            display: inline-block;
            line-height: 2.2rem;
            color: #228aff;
        }
        .vip_xxjss li img{
            width: 3rem;
            height: 3rem;
            display: block;
            margin: 0.25rem auto;
        }
        .vip_xxjss li p{
            width: 100%;
            height: 2rem;
            margin-top: -01rem;
            text-align: center;
            line-height: 2rem;
            font-size: 14px;
            color: #febb35;
        }
        .vio_rwktlb{
            width: 92%;
            height: 8rem;
            margin-left: 4%;
        }
        .vio_rwktlb li{
            width: 30.3%;
            height: 7.5rem;
            border: 1px #f5f5f5 solid;
            border-radius: 0.5rem;
            float: left;
            box-sizing: border-box;
            margin-left: 0;
            /*box-shadow: 0 1px 1px #228aff;*/

        }
        .vip_hylss{
            width: 100%;
            height: 2rem;
            line-height: 2rem;
            text-align: center;
            font-size: 16px;
            margin-top: 0.5rem;
            color: #000;
        }
        .vip_hyjg{
            width: 100%;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            margin-top: 0rem;
            color: #228aff;
        }
        .vip_hyjg span{
            font-size: 12px;
            font-weight: normal;
            margin-left: 0.25rem;
        }
        .vip_yuanjia{
            width: 100%;
            height: 1rem;
            line-height: 1rem;
            text-align: center;
            /*text-decoration:line-through;*/
            font-size: 12px;
            color:#a6a6a6;
        }
        .vio_rwktlb .active{
            width: 30%;
            height: 7.5rem;
            border: 1px #228aff solid;
            border-radius: 0.5rem;
            float: left;
            box-sizing: border-box;
            /*margin-left: 2.5%;*/
            background: #228aff;
        }
        .vio_rwktlb .active p{
            color: #fff;
        }
        .recharge_box{
            width: 84%;
            margin-left: 8%;
            height: 4rem;
            padding: 0;
            margin-bottom: 0;
            position: static;
            background: #fff;
            border: 0;
        }
        .vip_lijisj{
            width: 84%;
            height: 2.5rem;
            background: #228aff;
            margin: 0.5rem 8%;
            border-radius: 0.5rem;
            color: #fff;
        }
        .vip_yuanjia2{text-align: center;font-size: 12px}
        .sub .vip_hylss{
            color: #a29d9d;
        }
        .lv .vip_hylss{
            color: #000;
        }
        .avatar{width:20px;height: 20px}
        .task_box{
            display: block;
            background: #eeeeee;
            border: solid 1px #dddddd;
            left: 5%;
            top: 10%;
            position: fixed;
            width:90%;margin:0;
            height:90%;
        }
        .task_box .con ul li{padding:1px 10px}
        .task_box .con ul li a span.zhuangtai{float: none;width:auto;padding-left:10px;padding-right:10px}
        .task_box .con ul li a{height:30px}

        .recharge_box label{padding:15px 40px;margin:0}
        .recharge_box label a{position: relative;
            top:-5px;}
        .recharge_box label span{position: relative;top:2px}

        .task_box .con ul li{
            height: auto;
        }
    </style></head><body style="background-color:#ffffff; padding-bottom: 4rem;"><header><div class="back" onclick="window.history.back(-1)"></div><span><?php echo htmlentities(app('lang')->get('Memberupgrade')); ?></span></header><div style="height: 40px"></div><!-- 头部部分 开始 --><div class="vip_car"><div class="vip_car_xx"><img  class="vip_car_logo" src="<?php echo htmlentities($info['headpic']); ?>" alt="" onerror="this.src='/public/img/head.png'"><p class="vip_car_logo_name" style="width: auto;"><?php echo htmlentities(app('lang')->get('Mygrade')); ?>：<?php echo htmlentities($level_name); ?></p><p class="vip_car_logo_rw"><?php echo htmlentities(app('lang')->get('Ordersavailableeveryday')); ?>：<span id="num_task"><?php echo htmlentities($order_num); ?></span> (<?php echo htmlentities(app('lang')->get('single')); ?>)</p><?php if ($info['level_validity']){ ?><p class="vip_car_logo_rw" style="width: 80%;"><?php echo htmlentities(app('lang')->get('Membershipisvaliduntil')); ?>：<span><?php if($info['level_validity']!= 99){ ?><?php echo htmlentities($info['level_validity']); }else{ ?><?php echo htmlentities(app('lang')->get('permanent')); } ?></span></p><?php } ?><a class="vip_car_hyxq" href="/index/my/index"><?php echo htmlentities(app('lang')->get('Personalcenter')); ?></a><!--<div class="vip_car_hyjj"><p class="vip_car_hytq"><span>下级任务佣金</span><span style="float: right;">下级会员佣金</span></p><p class="vip_car_yjsl"><span>10%</span><span style="float: right;">20%</span></p></div>--></div></div><div class="vip_xxjss"><ul><li><img src="/public/img/v1.png"><p><?php echo htmlentities(app('lang')->get('Commissionbonus')); ?></p></li><li><img src="/public/img/v2.png"><p style="color: #e65a69;"><?php echo htmlentities(app('lang')->get('Moretasks')); ?></p></li><li><img src="/public/img/v3.png"><p style="color: #33cdf8;"><?php echo htmlentities(app('lang')->get('Dedicatedcustomerservice')); ?></p></li></ul></div><p style="text-align: center;color: #d4d2d2;">●<?php echo htmlentities(app('lang')->get('Clicaymentupgrade')); ?>●</p><!--</div>--><div class="swiper-container vio_rwktlb" id="vip_sel" style="width: 100%; margin-left: 0; height: auto;"><!--<div class="swiper-wrapper">--><div><?php
        //var_dump($info,$member_level);die;

        foreach($member_level as $key=>$vo): $lv = $vo['id'] == $info['level'] ? 1 : ''  ?><li class="swiper-slide sub <?php echo $vo['level'] > $info['level'] ? 'lv' :'' ;?>  " data-id="<?php echo htmlentities($vo['level']); ?>" data-price="<?php echo htmlentities($vo['num']); ?>"  style="width: 45%; margin-left: 3.3%; margin-bottom: 3.3%;"><p class="vip_hylss"><?php echo htmlentities($vo['name']); ?></p><p class="vip_hyjg"><?php echo htmlentities($vo['num'] * lang('duna')); ?><span><?php echo htmlentities(app('lang')->get('yuan')); ?></span></p><!--<p  class="vip_yuanjia2">提现次数:<?php echo htmlentities($vo['tixian_ci']); ?>次/天</p>--><!--<p  class="vip_yuanjia2">额度:<?php echo htmlentities($vo['num_min']); ?>/笔</p>--><!--<p  class="vip_yuanjia2">额度:<?php echo htmlentities($vo['tixian_max']); ?>/笔</p>--><p  class="vip_yuanjia2"><?php echo htmlentities(app('lang')->get('Taskvolume')); ?>:<?php echo htmlentities($vo['order_num']); ?><?php echo htmlentities(app('lang')->get('Single_day')); ?></p><p  class="vip_yuanjia2"><?php echo htmlentities(app('lang')->get('Commissionrate')); ?>:<?=$vo['bili'] * 100?><?php echo htmlentities(app('lang')->get('qweringle')); ?></p><!--<p data-name="<?php echo !empty($lv) ? htmlentities($lv) :  ''; ?>" class="vip_yuanjia <?php echo $lv? 'isc': '' ?> ">会员永久有效</p>--><p  class="vip_yuanjia2"><?php if($vo['validity'] != 0){ ?><?php echo htmlentities(app('lang')->get('Membervalidityperiod')); ?><?php echo htmlentities($vo['validity']); ?><?php echo htmlentities(app('lang')->get('day')); }else{ ?><?php echo htmlentities(app('lang')->get('Membervalidityperiod')); ?><?php echo htmlentities(app('lang')->get('permanent')); } ?></p></li><?php endforeach; ?></div><!-- Add Pagination --><div class="swiper-pagination"></div></div><input type="hidden"  id="is_vip_price" value="1"><input type="hidden"  id="is_vip_bu" value="1"><input type="hidden" name="price" id="price" value=""><input type="hidden" name="level" id="level" value=""><!--<div class="recharge_box" style="margin-top: 0;border-top: 0; padding-bottom: 40px;display: none"><input type="hidden" name="payment_type" id="payment_type" value=""><label data-key="999"><img src="/public/img/yq.png" class="avatar" alt=""><a>余额支付</a><span class=""></span></label></div>--><button data-name="1" style="display: none;margin-top:60px" id="submit" class="vip_lijisj"><?php echo htmlentities(app('lang')->get('Upgradepaymentnow')); ?><span id="show_price_1"></span></button><!-- </form> --><div class="recharge_box2 task_box" style="text-align:center;display:none ;z-index:99999" ><div class="con" style="background: #fff;padding:15px"><ul style="display: block;"><li><a onclick="javascript:void(0)" class="link"><p class="clear"><span class="t"><?php echo htmlentities(app('lang')->get('SelectPaymentMethod')); ?></span><span class="zhuangtai2"><img id="ico" src="" alt="" style="width: 30px;height: 30px;"></span></p></a><a onclick="javascript:void(0)" class="link" style="margin-top: 10px"><p class="clear"><span class="t"><?php echo htmlentities(app('lang')->get('Ordernumber')); ?></span><span class="zhuangtai" id="orderId">12345678945</span></p></a><a onclick="javascript:void(0)" class="link"><p class="clear"><span class="t"><?php echo htmlentities(app('lang')->get('Rechargeamount')); ?></span><span class="zhuangtai2" id="price2">50</span></p></a></li></ul><div id="erweima_div" style="display: block;text-align: center;height: 200px;"><img src="" id="erweima" alt="" height="150"></div></div><label style="padding:0">*<?php echo htmlentities(app('lang')->get('Ifdescmanually')); ?></label><button type="button" class="cancel vip_lijisj"><?php echo htmlentities(app('lang')->get('cancel')); ?></button><button type="submit" id="submit_cz" class="vip_lijisj"><?php echo htmlentities(app('lang')->get('Confirmrecharge')); ?></button><div id="pay_desc" style="text-align: left"></div></div><script>    $(document).ready(function(){
        $('.recharge_box label').click(function(){
            $('.recharge_box label span').removeClass('active');
            $(this).find('span').addClass('active');
            var payment_type = $(this).attr('data-key');
            $('#payment_type').val(payment_type);
        });

        $('#vip_sel .sub.lv').click(function(){
            var price = $(this).attr('data-price');
            var level = $(this).attr('data-id');
            $(this).addClass('active').siblings().removeClass('active');

            var is_vip_bu = $('#is_vip_bu').val();
            var is_vip_price = $('#is_vip_price').val();
            if (0 && is_vip_bu == 1) {
                price = price - is_vip_price;

                $('#show_price_1').html("（需补交 ￥" +price+"）");
            }else{
                $('#show_price_1').html("（￥" +price+"）");
            }

            $('.recharge_box').show();
            $('#submit').show()
            $('#price').val(price);
            $('#level').val(level);
        });

        $('#submit').click(function(){
            var payment_type = 999;//$('#payment_type').val();
            var level = $('#level').val();

            if( level == '' ) {
                sp_tip('<?php echo htmlentities(app('lang')->get('Pleasedescraded')); ?>.');
                return false;
            }
            if( payment_type == '' ) {
                sp_tip('<?php echo htmlentities(app('lang')->get('Pleasedecschannel')); ?>.');
                return false;
            }
//            layer.open({
//                type: 2
//                ,content: '支付中...'
//                ,time: 3
//            });
            submitPay(payment_type)
        })
        //$('#form1').submit();

    });

    function submitPay(paytype) {
        var payment_type = $('#payment_type').val();
        var level = $('#level').val();

        if( level == '' ) {
            sp_tip('<?php echo htmlentities(app('lang')->get('Pleasedescraded')); ?>.');
            return false;
        }
        
        $('#submit').unbind(); //因为提交太慢，所以先解绑防止重复提交

        $.ajax({
            type:"POST",
            url:"<?php echo url('recharge_dovip'); ?>",
            data :{level:level,type:paytype},
            dataType:"json",
            async : false,
            success:function(coordinates){
                result = coordinates;
                if (result.code == 0) {
                    if (result.info = '<?php echo htmlentities(app('lang')->get('updatesuccessed')); ?>') {
                        sp_tip(result.info);
                        setTimeout(function (){
                           location.reload();
                        }, 1500);

                        return false;
                    }

                    if (result.paytype == 'alipay_wap' && result.redirect_url) {
                        window.location.href = result.redirect_url;
                        return false;
                    }
                    if (result.paytype != '' && result.redirect_url) {
                        window.location.href = result.redirect_url;
                        return false;
                    }

                    if (result.info.name2 == 'card') {
                        var html = '\
                    <p class="clear" style="padding: 5px;text-align: left;padding-left: 30px;">\
                            <span class="t">银行卡账户 : </span>\
                        <span class="zhuangtai" id="">'+result.info.master_cardnum+'</span>\
                            </p>\
                            <p class="clear" style="padding: 5px;text-align: left;padding-left: 30px;">\
                            <span class="t">收款人　　 : </span>\
                        <span class="zhuangtai" id="">'+result.info.master_name+'</span>\
                            </p>\
                            <p class="clear" style="padding: 5px;text-align: left;padding-left: 30px;">\
                            <span class="t">所属银行　 : </span>\
                        <span class="zhuangtai" id="">'+result.info.master_bank+'</span>\
                            </p>\
                                ';


                        $('#erweima_div').html(html);
                        //return false;
                    }

                    $('#ico').attr('src',result.info.ico);
                    $('#orderId').text(result.info.id);
                    $('#price2').text(result.info.num);
                    //$('#pay_desc').html(result.pay_desc);
                    $('#erweima').attr('src',result.info.ewm);
                    //$('body').addClass('yhidden');
                    $('.task_box').show();
                }else{
                    sp_tip(result.info);
                }


            },
            error:function(data){
                console.log('error'+data.status)
            }
        });
    }
    $('.cancel').click(function () {
        $('.task_box').hide();
    });


    $('#submit_cz').click(function () {
        layer.open({
            content: '充值中,请稍后刷新余额!'
            ,skin: 'msg'
            ,time: 2 //2秒后自动关闭
        });
        $('.task_box').hide();
    });

    function submit_callback(data){
        if( data.status == 1 ) {
            window.location.href = data.url;
        } else {
            sp_tip(data.info);
        }
    }
    //
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });


</script></body></html>