<?php /*a:2:{s:62:"/www/wwwroot/qiangdan/application/index/view/ctrl/lixibao.html";i:1615859276;s:62:"/www/wwwroot/qiangdan/application/index/view/public/floor.html";i:1640706244;}*/ ?>
<!DOCTYPE html><!-- saved from url=(0038)http://qiang6-www.baomiche.com/#/YuBao --><html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><title><?php echo lang('余额宝'); ?></title><link href="/static_new6/css/app.7b22fa66c2af28f12bf32977d4b82694.css" rel="stylesheet"><link rel="stylesheet" href="/static_new/css/public.css"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/dialog.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script><style type="text/css" title="fading circle style">        .circle-color-8 > div::before {
            background-color: #ccc;
        }
        body {
            background: #f7f7f7 !important;
        }
        .main {
            padding-bottom: 2.466667rem !important;
        }
        .report {
            width: 96% !important;
            height: auto !important;
            margin: 0.266rem !important;
            border-radius: 0.21rem !important;
            display: block;
            /* display: flex !important; */
            /* align-items: center !important; */
            /* justify-content: center !important; */
            color: #fff !important;
            font-size: 0.426rem !important;
            text-align: center !important;
            background: linear-gradient(to bottom, #5A91EC 30%, #367EFD) !important;
        }
        .report div {
            float: none !important;
        }
        .assets-wrapper {
            width: 100% !important;
            text-align: center !important;
            margin-top: 6% !important;
        }
        .assets-wrapper .cen {
            width: 3.25rem !important;
            height: 3.25rem !important;
            border-radius: 50% !important;
            text-align: center !important;
            background: #75A2F2 !important;
            border: 1px solid #fff !important;
            margin: 0 auto !important;
            float: none !important;
        }
        .assets-wrapper .cen .num-wrapper {
            font-size: 0.426rem !important;
            font-weight: bold !important;
            margin-top: 30% !important;
            color: #fff !important;
        }
        .assets-wrapper .cen .text-wrapper p {
            color: #fff !important;
            font-size: 0.37rem !important;
            white-space: nowrap;
        }
        .lev_box {
            display: flex !important;
            width: 100% !important;
            margin-top: 6% !important;
            margin-bottom: 6% !important;
            overflow: hidden !important;
        }
        .lev_box_item {
            flex: 0 0 33% !important;
            border-right: 0.026rem solid #fff !important;
        }
        .lev_box_item:last-child {
            border: none !important;
        }
        .lev_box_item > div {
            width: 100% !important;
            background: none !important;
        }
        .lev_box_item > div > p {
            color: #fff !important;
        }
        .lev_box_item > div span {
            color: #fff !important;
            font-weight: bold !important;
        }
        .Cash_num {
            padding: 0 !important;
        }
        .wdal-box {
            display: flex !important;
            align-items: center !important;
            width: 100% !important;
            height: 1.06rem !important;
            border: .01rem solid #c7c7c7 !important;
            background-color: #fff !important;
            box-sizing: border-box !important;
            padding-left: 0.4rem !important;
            margin: 0.4rem 0 !important;
            border-radius: 0.21rem !important;
        }
        .wdal-box h3 {
            font-family: HelveticaNeue !important;
            font-size: 0.37rem !important;
            color: #777777 !important;
            margin-right: 0.53rem !important;
            white-space: nowrap !important;
        }
        .wdal-box .Cash_num_money {
            letter-spacing: 0 !important;
            font-weight: 500 !important;
            display: flex !important;
            align-items: center !important;
        }
        .wdal-box .Cash_num_money input {
            font-family: HelveticaNeue !important;
            font-size: 0.37rem !important;
            color: #333 !important;
            flex: 1 !important;
            height: 100% !important;
        }
        .Cash_num_money_wrapper span {
            font-family: HelveticaNeue !important;
            font-size: 0.37rem !important;
            color: #777777 !important;
            margin-right: 0.53rem !important;
            white-space: nowrap !important;
        }
        .Cash_num_password {
            width: 100% !important;
            display: flex !important;
            justify-content: space-between !important;
            flex-wrap: wrap !important;
            color: #777 !important;
        }
        .Cash_num_password span {
            width: 46.5% !important;
            padding: 0.32rem 0.21rem !important;
            border-radius: 0.106rem !important;
            background: #FFFFFF !important;
            margin-bottom: 0.32rem !important;
        }
        .c2 {
            color: #777777 !important;
            margin-bottom: 0.1rem;
        }
        .active .c1 {
            background: #75A2F2 !important;
        }
        .save-btn {
            background: #75A2F2 !important;
        }
    </style></head><body style="font-size: 12px;"><div id="app"><div data-v-792dab99="" class="main"><div data-v-792dab99="" class="header"><div class="left_btn" onclick="window.history.back(-1)"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF7mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0wMi0wNFQyMDoyNToxMCswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTRjY2JmNDktYjRlOC04ODRjLWI1ZTUtM2FkYjVkMDViM2VkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwNTVCRkZCNjI3NzExRTlBNDkxREZFMzIwMkZEMUZEIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6ODA1NUJGRkI2Mjc3MTFFOUE0OTFERkUzMjAyRkQxRkQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MDU1QkZGODYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MDU1QkZGOTYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NGNjYmY0OS1iNGU4LTg4NGMtYjVlNS0zYWRiNWQwNWIzZWQiIHN0RXZ0OndoZW49IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4QXxioAAABwklEQVRIia3Wy4uOcRQH8M+4JcqlJCmilJqFIgsWQuTrlgUphaKUv0pZWExRGrkdclcWElkoZSELSXKtSaKxeH82vDPemfc99ezO6dPveX7nPGdofHxcP5FkHkawEZuq6k23vFl9IvNxBVsxjkXoCs3oA1mA6w35hVNV9Xyi/GmdKMlCXMPmhpyoqnOT1UwZSrIYN3S+yU8cr6qR/9VNCUqypCHr8QNHq+pCL7U9Q0mW4ibWNeRwVV3qtb4nKMky3MIwvuNQVV3tFekJSrIct7EWYzhYVTUV5L9QkhUNWdOQ/VV1Z6rIpFCSVQ1ZjW/YV1UPpoMwQcMmGcb9hnzBnn4QGPp71iVZi7tYhs/YVVWP+0HofqJf7YEhzO4X6QpV1SvswGssxPUkW/qF/nl1fyLJSp3e6fvGMcn0bv+VrXiJebicZNfAoYa9xTa8aNhokr0Dhxr2DtvxHHNxMcmBgUMNe69zQZ5iDs4nOTRwqGEfGvakYSNJjgwcatinhj3SGV/nkhwbONSwL9iNh5iJs0lODhxq2NeG3WvYmSSnJ6uZsGF7ibbTjWKnzrq1oaqedcud9roFVTWGA7ios899nCj3N99UoTDBVxt6AAAAAElFTkSuQmCC"
                        alt="" class="return"></div><div data-v-792dab99="" class="Maintitle"><h3 data-v-792dab99=""><?php echo lang('余额宝'); ?></h3></div></div><div data-v-792dab99="" class="report"><div class="assets-wrapper"><div data-v-792dab99="" class="cen red"><div class="num-wrapper"><span><?php echo htmlentities($ubalance); ?></span></div><div class="text-wrapper"><p data-v-792dab99=""><?php echo lang('总资产'); ?>（<?php echo lang('元'); ?>）</p></div></div></div><div class="lev_box"><div class="lev_box_item"><div data-v-792dab99="" class="lf" style="font-size: 13px"><span>+<?php echo htmlentities($balance); ?></span><p data-v-792dab99=""><?php echo lang('余额宝'); ?>（<?php echo lang('元'); ?>）</p></div></div><div class="lev_box_item"><div data-v-792dab99="" class="rg red"><span>+<?php echo htmlentities($balance_shouru); ?></span><p data-v-792dab99=""><?php echo lang('总收益'); ?></p></div></div><div class="lev_box_item"><div data-v-792dab99="" class="rg red"><span>+<?php echo htmlentities($yes_shouyi); ?></span><p data-v-792dab99=""><?php echo lang('昨日收益'); ?></p></div></div></div></div><div data-v-792dab99="" class="Cash_num"><div class="wdal-box"><h3 data-v-792dab99=""><?php echo lang('余额转入'); ?></h3><div data-v-792dab99="" class="Cash_num_money"><span data-v-792dab99="">$</span><input data-v-792dab99="" type="text" name="price" id="price" placeholder="<?php echo lang('请输入转入金额'); ?>"></div></div><div class="wdal-box" ><div data-v-792dab99="" class="Cash_num_money"><span data-v-792dab99=""><?php echo lang('预计收益'); ?></span><input data-v-792dab99="" type="text" name="yuji" id="yjsy" disabled value="" style="padding-left: 30px"></div></div><h4 data-v-792dab99=""><?php echo lang('收益标准'); ?></h4><div data-v-792dab99="" class="Cash_num_password"><?php if($lixibao): if(is_array($lixibao) || $lixibao instanceof \think\Collection || $lixibao instanceof \think\Paginator): $i = 0; $__LIST__ = $lixibao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span data-v-792dab99="" data-id="<?php echo htmlentities($v['id']); ?>"  class="col-xs-3 ch5" style="width: 45%"><p data-v-792dab99="" class="c2"><?php echo htmlentities($v['name']); ?></p><p data-v-792dab99="" class="c2">+<?php echo htmlentities($v['bili']*100); ?>&nbsp;<small data-v-792dab99="">%</small></p><p data-v-792dab99="" class="c1">[<?php echo lang('定'); ?>] <?php echo htmlentities($v['day']); ?>&nbsp;<small data-v-792dab99=""><?php echo lang('天'); ?></small></p></span><?php endforeach; endif; else: echo "" ;endif; else: ?><?php endif; ?></div></div><div data-v-792dab99="" class="postForm"><!--<button data-v-792dab99="" class="auto" onclick="window.location.href=`/index/ctrl/lixibao_chu`"><?php echo lang('转出'); ?></button>--><button data-v-792dab99="" class="auto"><?php echo lang('转出'); ?></button><button data-v-792dab99="" class="save-btn"><?php echo lang('转入'); ?></button></div><div style="height: 1.33rem;"></div><div data-v-8755e8fe="" data-v-eebac136="" class="footer"  style="background: none;width: 100%;height: 1.7rem;background-color: white;"><ul data-v-8755e8fe=""><li onclick="window.location.href='<?php echo url('index/home'); ?>'" data-v-8755e8fe=""><?php
                if(cookie('lang') == 'th-th' ){
            ?><img data-v-8755e8fe=""
                 src="/image/571.png"
                 alt=""><img data-v-8755e8fe=""
                 src="/image/638651.png"
                 alt=""><?php }else{ ?><!--if(cookie('lang') == 'en-us' )home--><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/home_before.png','home'); ?>"
                 alt="" style="margin-top: -0.3rem;"><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/home_after.png','home'); ?>"
                 alt="" style="margin-top: -0.3rem;"><span style="display: block;margin: 0 25%;" class="activeText"><?php echo lang('Home'); ?></span><?php
                }
            ?><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h',[1]); ?>"--><!--     alt="">--><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_l',[1]); ?>"--><!--     alt="">--></li><li onclick="window.location.href='<?php echo url('order/index'); ?>'" data-v-8755e8fe=""><?php
                if(cookie('lang') == 'th-th' ){
            ?><img data-v-8755e8fe=""
                 src="/image/6561.png"
                 alt=""><img data-v-8755e8fe=""
                 src="/image/881.png"
                 alt=""><?php }else{ ?><!--if(cookie('lang') == 'en-us' )--><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/order_before.png','order'); ?>"
                 alt="" style="margin-top: -0.3rem;"><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/order_after.png','order'); ?>"
                 alt="" style="margin-top: -0.3rem;"><span style="display: block;margin: 0 25%;"><?php echo lang('Historic'); ?></span><?php
                }
            ?><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h',[2]); ?>"--><!--     alt="">--><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h',[2]); ?>"--><!--     alt="">--></li><?php
            $level = session('level') ? session('level') : 0;
            $level = $level + 1;
            $url = '/index/ctrl/team';
        ?><li onclick="window.location.href='<?=$url?>'" data-v-8755e8fe=""><?php
                if(cookie('lang') == 'th-th' ){
            ?><img data-v-8755e8fe=""
                 src="/image/5425445-1.png"
                 alt="" style="border-radius:30px;"><img data-v-8755e8fe=""
                 src="/image/5425445-1.png"
                 alt=""  style="border-radius:30px;"><?php }else{ ?><!--if(cookie('lang') == 'en-us' )--><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/team_before.png',[3]); ?> "
                 alt="" style="border-radius:30px;
                               margin-top: -0.3rem;
                               width: auto;
                               height: .933333rem;
                               display: block;
                               margin-bottom: .066667rem;"><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/team_before.png',[3]); ?>"
                 alt=""  style="border-radius:30px;"><span style="display: block;margin: 0 25%;text-align: center;"><?php echo lang('Team'); ?></span><?php
                }
            ?><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h1'); ?>"--><!--     alt="" style="border-radius:30px;">--><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h1'); ?>"--><!--     alt=""  style="border-radius:30px;">--></li><li onclick="window.location.href='<?php echo url('my/index'); ?>'" data-v-8755e8fe=""><?php
                if(cookie('lang') == 'th-th' ){
            ?><img data-v-8755e8fe=""
                 src="/image/9681.png"
                 alt="" style="margin-top: -0.3rem;"><img data-v-8755e8fe=""
                 src="/image/6541.png"
                 alt="" style="margin-top: -0.3rem;"><?php }else{ ?><!--if(cookie('lang') == 'en-us' )--><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/person_before.png',[5]); ?>"
                 alt="" style="margin-top: -0.3rem;"><img data-v-8755e8fe=""
                 src="<?php echo lang('/img/person_after.png',[5]); ?>"
                 alt="" style="margin-top: -0.3rem;"><span style="display: block;margin: 0 25%;"><?php echo lang('Personal'); ?></span><?php
                }
            ?><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_h',[5]); ?>"--><!--     alt="">--><!--<img data-v-8755e8fe=""--><!--     src="<?php echo lang('img_bar_l',[5]); ?>"--><!--     alt="">--></li></ul></div><style>   /* .footer li.activeText{
      color: #347DFF;
  } */
    .footer ui li {
        float: none;
        width: auto;
    }
    .footer ul img {
        height: 0.733rem !important;
    }
    .footer span {
        text-align: center;
    }

</style></div></div><script>    function check() {
        if ($("input[name=price]").val() == '') {
            $(document).dialog({infoText: "<?php echo lang('存入金额不符合系统要求'); ?>"});
            return false;
        }
        return true;
    }
    $(function () {
        $('.Cash_num_password>span').eq(0).trigger("click")


    });

    $('.Cash_num_password>span').click(function () {
        cid = $(this).data('id');
        $('.Cash_num_password').attr('data-id',cid);
        $('.Cash_num_password>span').removeClass('active');
        $(this).addClass('active');
        yjsy();
    });

    function yjsy() {
        var price = $("#price").val();
        if(price<=0) return false;
        $.ajax({
            url: '/index/ctrl/deposityj',
            data: {price: price, cid: cid},
            type: 'POST',
            success: function (data) {
                $("#yjsy").val(data.data);
            }
        });
    }


    $("#price").keyup(function () {
        yjsy();
    })
    
    $('.auto').click(function(){
                $(document).dialog({
                    type: 'confirm',
                    titleText: "<h2><?php echo lang('提醒'); ?></h2><br><?php echo lang('是否要取出所有利息宝余额?'); ?>",
                    autoClose: 0,
                    onClickConfirmBtn: function () {
                        $.post("<?php echo url('lixibao_chu'); ?>",{type:1},function(data){
                            if(data.code == 0){
                                window.location.href="<?php echo url('lixibao'); ?>";
                            }else{
                                $(document).dialog({infoText: data.info});
                            }
                        });
                    },
                    onClickCancelBtn: function () {
                    }
                });
    });

    $(".save-btn").on('click', function () {
        if (check()) {
            var loading = null;
            var price = $("input[name=price]").val();
            $.ajax({
                url: "<?php echo url('lixibao_ru'); ?>",
                data: {price:price,cid:cid},
                type: 'POST',
                // beforeSend: function () {
                //     loading = $(document).dialog({
                //         type: 'notice',
                //         infoIcon: '/static_new/img/loading.gif',
                //         infoText: <?php echo lang('正在加载中'); ?>,
                //         autoClose: 0
                //     });
                // },
                success: function (data) {
                    if (data.code == 0) {
                        $(document).dialog({infoText: data.info});
                        setTimeout(function () {
                           // loading.close();
                            window.location.href = '/index/ctrl/lixibao';
                        }, 2000);

                    } else {
                        $(document).dialog({infoText: data.info});
                        loading.close();
                    }
                }
            });
        }
    })
</script></body></html>