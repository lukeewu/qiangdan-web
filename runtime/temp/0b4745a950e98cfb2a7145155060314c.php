<?php /*a:1:{s:64:"/www/wwwroot/qiangdan/application/index/view/ctrl/recharge2.html";i:1642832222;}*/ ?>
<!DOCTYPE html><!-- saved from url=(0063)http://qiang6-www.baomiche.com/#/RechargeOffDetails?guid=278965 --><html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><title><?php echo htmlentities(app('lang')->get('Rechargedetails')); ?></title><link href="/static_new6/css/app.7b22fa66c2af28f12bf32977d4b82694.css" rel="stylesheet"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/dialog.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script><link rel="stylesheet" href="/static_new/css/public.css"><style type="text/css" title="fading circle style">        .circle-color-8 > div::before {
            background-color: #ccc;
        }
        .file_container {
            margin-top: 2rem;
        }

        .file {
            width: 60%;
            margin: 0 auto;
            height: 3rem;
            background: #dedede;
            position: relative;
        }

        .file::before {
            content: "";
            height: 1px;
            width: 3rem;
            background: white;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .file::after {
            content: "";
            width: 1px;
            height: 3rem;
            background: white;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .file input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            opacity: 0;
            z-index: 233;
        }

        .file img {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: 230;
        }
    </style></head><body style="font-size: 12px;"><div id="app"><div data-v-7d84025e="" class="main"><div data-v-7d84025e="" class="header"><div class="left_btn" onclick="window.history.back(-1)"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF7mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0wMi0wNFQyMDoyNToxMCswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTRjY2JmNDktYjRlOC04ODRjLWI1ZTUtM2FkYjVkMDViM2VkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwNTVCRkZCNjI3NzExRTlBNDkxREZFMzIwMkZEMUZEIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6ODA1NUJGRkI2Mjc3MTFFOUE0OTFERkUzMjAyRkQxRkQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MDU1QkZGODYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MDU1QkZGOTYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NGNjYmY0OS1iNGU4LTg4NGMtYjVlNS0zYWRiNWQwNWIzZWQiIHN0RXZ0OndoZW49IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4QXxioAAABwklEQVRIia3Wy4uOcRQH8M+4JcqlJCmilJqFIgsWQuTrlgUphaKUv0pZWExRGrkdclcWElkoZSELSXKtSaKxeH82vDPemfc99ezO6dPveX7nPGdofHxcP5FkHkawEZuq6k23vFl9IvNxBVsxjkXoCs3oA1mA6w35hVNV9Xyi/GmdKMlCXMPmhpyoqnOT1UwZSrIYN3S+yU8cr6qR/9VNCUqypCHr8QNHq+pCL7U9Q0mW4ibWNeRwVV3qtb4nKMky3MIwvuNQVV3tFekJSrIct7EWYzhYVTUV5L9QkhUNWdOQ/VV1Z6rIpFCSVQ1ZjW/YV1UPpoMwQcMmGcb9hnzBnn4QGPp71iVZi7tYhs/YVVWP+0HofqJf7YEhzO4X6QpV1SvswGssxPUkW/qF/nl1fyLJSp3e6fvGMcn0bv+VrXiJebicZNfAoYa9xTa8aNhokr0Dhxr2DtvxHHNxMcmBgUMNe69zQZ5iDs4nOTRwqGEfGvakYSNJjgwcatinhj3SGV/nkhwbONSwL9iNh5iJs0lODhxq2NeG3WvYmSSnJ6uZsGF7ibbTjWKnzrq1oaqedcud9roFVTWGA7ios899nCj3N99UoTDBVxt6AAAAAElFTkSuQmCC"
                    alt="" class="return"></div><div class="Maintitle"><h3><?php echo htmlentities(app('lang')->get('Rechargepaid')); ?></h3></div><div class="right_btn"></div></div><div data-v-7d84025e="" class="box"><div data-v-7d84025e="" class="p1" style="padding-bottom: 5px;"><p data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Pleaserecharge')); ?></p><p data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Arrivaltime5minutes')); ?></p></div><ul data-v-7d84025e="" id="tran" class="list-group" style="display: none;"></ul><ul data-v-7d84025e="" class="list-group"><li data-v-7d84025e="" id="tran4" class="list-group-item" style="text-align: center; display: none;"><p data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Pleasecode')); ?></p><p data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('WeChatcode')); ?></p></li></ul><div data-v-7d84025e="" class="list-group"><div data-v-7d84025e="" style=""><?php
                        if(isset($_GET['type']) && $_GET['type']=='bipay') {
                    ?><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('SelectPaymentMethod')); ?></label><?php echo htmlentities($pay['name2']); ?><img src="<?php echo htmlentities($pay['ico']); ?>" style="width: 30px" alt=""><span data-v-7d84025e="" data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities($pay['name2']); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Rechargeamount')); ?></label><?php echo htmlentities($info['num']); ?><input type="hidden" name="price" value="<?php echo htmlentities($info['num']); ?>"><span data-v-7d84025e="" data-clipboard-text="100" class="tright copy" onclick="copy_txt(<?php echo htmlentities($info['num']); ?>)"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item" style="padding:0;margin-top: -40px"><div class="meun-item" style="height: 100%;"><div class="item-line"><!--<span>开户行</span>--><div class="file_container" style="height: auto;margin-top: 40px;"><div class="file" style="height: 4rem"><img src="<?php echo htmlentities($pay['ewm']); ?>" alt="" class="voucher_img2"></div></div><p style="font-size: 11px;text-align: center"><?php echo htmlentities(app('lang')->get('Savepay')); ?></p><!--<span>转账人姓名</span>--><!--<input type="text" placeholder="输入转账人姓名" name="zzrname" autocomplete="off" maxlength="9">--></div></div></li><?php }else if(isset($_GET['type']) && $_GET['type']=='paysapi') {?><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('SelectPaymentMethod')); ?></label><?php echo htmlentities($pay['name2']); ?><img src="<?php echo htmlentities($pay['ico']); ?>" style="width: 30px" alt=""><span data-v-7d84025e="" data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities($pay['name2']); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Rechargeamount')); ?></label><?php echo htmlentities($info['num']); ?><input type="hidden" name="price" value="<?php echo htmlentities($info['num']); ?>"><span data-v-7d84025e="" data-clipboard-text="100" class="tright copy" onclick="copy_txt(<?php echo htmlentities($info['num']); ?>)"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item" style="padding:0;margin-top: -40px"><div class="meun-item" style="height: 100%;"><div class="item-line"><!--<span>开户行</span>--><div class="file_container" style="height: auto;margin-top: 40px;"><div class="file" style="height: 4rem"><img src="<?php echo htmlentities($pay['ewm']); ?>" alt="" class="voucher_img2"></div></div><p style="font-size: 11px;text-align: center"><?php echo htmlentities(app('lang')->get('Savepay')); ?>保存截图,扫码付款</p><!--<span>转账人姓名</span>--><!--<input type="text" placeholder="输入转账人姓名" name="zzrname" autocomplete="off" maxlength="9">--></div></div></li><?php }else if(isset($_GET['type']) && $_GET['type']=='card') {foreach($bank as $k=>$b): ?><label style="font-size:15px;margin-left:5%;"><?php echo htmlentities($k+1); ?>.<?php echo htmlentities(app('lang')->get('Bankcardinformation')); ?></label><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Bank')); ?></label><?php echo htmlentities($b['name']); ?><span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($b['name']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Bankcardnumber')); ?></label><?php echo htmlentities($b['account']); ?><span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($b['account']); ?>')" data-clipboard-text="请询问在线客服（平台不定时更换账户）" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('username')); ?></label><?php echo htmlentities($b['realname']); ?><span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($b['realname']); ?>')" data-clipboard-text="请咨询在线客服完成充值后" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('AccountBank')); ?></label><?php echo htmlentities($b['kaihuhang']); ?><span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($b['kaihuhang']); ?>')" data-clipboard-text="点击(我已完成支付）" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Rechargeamount')); ?></label><?php echo htmlentities($info['num']); ?><input type="hidden" name="price" value="<?php echo htmlentities($info['num']); ?>"><span data-v-7d84025e="" data-clipboard-text="100" class="tright copy" onclick="copy_txt(<?php echo htmlentities($info['num']); ?>)"><?php echo htmlentities(app('lang')->get('copy')); ?></span></li><?php endforeach; ?><!-- <label style="font-size:15px;margin-left:5%;"><?php echo htmlentities(app('lang')->get('Bankcardinformation')); ?></label>--><!--<li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Bank')); ?></label>--><!--    <?php echo htmlentities($info['master_bank']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['master_bank']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">銀行名</label>--><!--    <?php echo htmlentities($info['beisa1']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa1']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">支店名</label>--><!--    <?php echo htmlentities($info['beisa2']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa2']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">支店番号</label>--><!--    <?php echo htmlentities($info['beisa3']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa3']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">口座種類</label>--><!--    <?php echo htmlentities($info['beisa4']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa4']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">口座番号</label>--><!--    <?php echo htmlentities($info['beisa5']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa5']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!-- <li data-v-7d84025e="" class="list-group-item">--><!--    <label data-v-7d84025e="">名義人</label>--><!--    <?php echo htmlentities($info['beisa6']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['beisa6']); ?>')"  data-clipboard-text="回执单" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!--<li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Bankcardnumber')); ?></label>--><!--    <?php echo htmlentities($info['master_cardnum']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['master_cardnum']); ?>')" data-clipboard-text="请询问在线客服（平台不定时更换账户）" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!--<li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('username')); ?></label>--><!--    <?php echo htmlentities($info['master_name']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['master_name']); ?>')" data-clipboard-text="请咨询在线客服完成充值后" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!--<li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('AccountBank')); ?></label>--><!--    <?php echo htmlentities($info['master_bk_address']); ?>--><!--    <span data-v-7d84025e="" onclick="copy_txt('<?php echo htmlentities($info['master_bk_address']); ?>')" data-clipboard-text="点击(我已完成支付）" class="tright copy"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><!--<li data-v-7d84025e="" class="list-group-item"><label data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Rechargeamount')); ?></label>--><!--    <?php echo $info['num']+mt_rand(0,100)/100; ?>--><!--    <input type="hidden" name="price" value="<?php echo htmlentities($info['num']); ?>">--><!--    <span data-v-7d84025e="" data-clipboard-text="100" class="tright copy" onclick="copy_txt(<?php echo htmlentities($info['num']); ?>)"><?php echo htmlentities(app('lang')->get('copy')); ?></span>--><!--</li>--><?php }?><li data-v-7d84025e="" class="list-group-item" style="padding:0;margin-top: -40px"><div class="meun-item" style="height: 100%;"><div class="item-line"><!--<span>开户行</span>--><div class="file_container"><div class="file"><input type="file" name="" id="voucher"><img src="" alt="" class="voucher_img"></div></div><p style="font-size: 11px;text-align: center"><?php echo htmlentities(app('lang')->get('Uploadpaymentscreenshot')); ?></p><!--<span>转账人姓名</span>--><!--<input type="text" placeholder="输入转账人姓名" name="zzrname" autocomplete="off" maxlength="9">--></div></div></li><input name="" id="webcopyinput" type="text"
                           style="color: #FF0000; font-size: 20px; width: 1px; height: 1px; border: hidden; font-weight: bold; text-align: center;"
                           value=""></div></div><div data-v-7d84025e="" style=""><div data-v-7d84025e="" class="p1"><p data-v-7d84025e=""><span data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Betime')); ?></span></p></div><div data-v-7d84025e="" class="p2"><center data-v-7d84025e=""><a data-v-7d84025e="" href="javascript:void(0)" class="save-btn"><button data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('Ipayment')); ?></button></a></center></div></div><div data-v-7d84025e="" class="p1"><p data-v-7d84025e=""><?php echo htmlentities(app('lang')->get('pay_desc')); ?></p><!--<p data-v-7d84025e="">温馨提示：</p>--><!--<p data-v-7d84025e="">1.转账请复制信息，到网上银行或支付宝完成转账充值。</p>--><!--<p data-v-7d84025e="">--><!--    2.APP请手动--><!--    <span data-v-7d84025e="">截屏</span>或直接--><!--    <span data-v-7d84025e="">保存二维码</span>到本地扫码。--><!--</p>--><!--<p data-v-7d84025e="">--><!--    3.--><!--    <span data-v-7d84025e="">微信端</span>可直接长按识别二维码。--><!--</p>--><!--<p data-v-7d84025e="">4.以上操作完成，可请联系客服上分。</p></div>--></div></div></div><script type="application/javascript">    var pic ='';
    $(function () {
        function check() {
            if ($("input[name=pic]").val() == '') {
                $(document).dialog({infoText: '<?php echo htmlentities(app('lang')->get('Pleasevoucher')); ?>'});
                return false;
            }
            return true;
        }

        // 上传凭证
        $('#voucher').change(function () {
            var file = $("#voucher").get(0).files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function () {
                $(".voucher_img").attr("src", reader.result);
                pic = reader.result;
                $("input[name=pic]").val(pic)
            }
        })

        $(".save-btn").on('click', function () {
            if (pic==''){
                $(document).dialog({infoText: '<?php echo htmlentities(app('lang')->get('Pleasevoucher')); ?>'});
                return false;
            }

            if (check()) {
                var loading = null;
                var price = $("input[name=price]").val();
                $.ajax({
                    url: '/index/ctrl/recharge_do',
                    data: {pic:pic,price:price,type:'<?php echo htmlentities($pay['name2']); ?>'},
                    type: 'POST',
                    beforeSend: function () {
                        loading = $(document).dialog({
                            type: 'notice',
                            infoIcon: '/static_new/img/loading.gif',
                            infoText: '<?php echo htmlentities(app('lang')->get('z_Loading')); ?>',
                            autoClose: 0
                        });
                    },
                    success: function (data) {

                        if (data.code == 0) {
                            $(document).dialog({infoText: '<?php echo htmlentities(app('lang')->get('Thereview')); ?>'});
                            setTimeout(function () {
                                window.location.href = '/index/my/index';
                            }, 2000);
                        } else {
                            loading.close();
                            $(document).dialog({infoText: data.info});
                        }
                    }
                });
            }
        })
    })

    function copy_txt(xx) {
        //var text = document.createElement('input');
        var text = document.getElementById("webcopyinput");
        text.id = 'webcopyinput';
        text.value = '' + xx + '';
        //text.style.position = 'fixed';
        // text.style.top = '- 10000px';
        // document.body.appendChild(text);
        text.focus();//给input输入框聚焦
        text.setSelectionRange(0, text.value.length);//设置input框选中的范围
        copied = document.execCommand('Copy');//执行复制操作
        text.blur();
        copied = false;
        document.body.scrollTop = 0;
        $(document).dialog({infoText: '<?php echo htmlentities(app('lang')->get('Copysuccessfully')); ?>'});
    }
</script></body></html>