<?php /*a:3:{s:65:"/www/wwwroot/qiangdan/application/admin/view/deal/order_list.html";i:1615598992;s:54:"/www/wwwroot/qiangdan/application/admin/view/main.html";i:1615598992;s:72:"/www/wwwroot/qiangdan/application/admin/view/deal/order_list_search.html";i:1615598992;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><div class="think-box-shadow"><fieldset><legend>条件搜索</legend><form class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get" autocomplete="off"><div class="layui-form-item layui-inline"><label class="layui-form-label">订单号</label><div class="layui-input-inline"><input name="oid" value="<?php echo htmlentities((app('request')->get('oid') ?: '')); ?>" placeholder="请输入订单号" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">手机号</label><div class="layui-input-inline"><input name="tel" value="<?php echo htmlentities((app('request')->get('tel') ?: '')); ?>" placeholder="请输入手机号" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">真实姓名</label><div class="layui-input-inline"><input name="username" value="<?php echo htmlentities((app('request')->get('username') ?: '')); ?>" placeholder="请输入真实姓名" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">下单时间</label><div class="layui-input-inline"><input data-date-range name="addtime" value="<?php echo htmlentities((app('request')->get('addtime') ?: '')); ?>" placeholder="请选择添加时间" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">状态</label><div class="layui-input-inline"><select name="status" id="status" class="layui-input-inline" ><option value="1"  <?php
                    if(isset($_GET['status'])){
                    $dd = $_GET['status']=='1' ? 'selected' : '';echo $dd;  
                    }
                    
                    ?>  >所有状态</option><option value="2"  <?php 
                    if(isset($_GET['status'])){
                    $dd = $_GET['status']=='2' ? 'selected' : '';echo $dd;  
                    } 
                    ?> >等待付款</option><option value="3" <?php
                    if(isset($_GET['status'])){
                    $dd = $_GET['status']=='3' ? 'selected' : '';echo $dd;  
                    }
                    ?> >完成付款</option><option value="5" <?php
                    if(isset($_GET['status'])){
                    $dd = $_GET['status']=='5' ? 'selected' : '';echo $dd;
                    }
                    ?> >订单冻结</option></select></div></div><div class="layui-form-item layui-inline"><button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button></div><div style="margin-left:20px;" class="layui-form-item layui-inline"><button class="layui-btn" onclick="parent.location.reload()" > 刷新</button></div></form></fieldset><fieldset><legend>数据统计</legend><font color="red">交易总额：<?php echo htmlentities((isset($order_tongji['sum_num']) && ($order_tongji['sum_num'] !== '')?$order_tongji['sum_num']:'0.00')); ?>元</font>		&emsp; <font color="red">佣金总额：<?php echo htmlentities((isset($order_tongji['sum_commission']) && ($order_tongji['sum_commission'] !== '')?$order_tongji['sum_commission']:'0.00')); ?>元</font></p></fieldset><script>form.render()</script><table class="layui-table margin-top-15" lay-skin="line"><?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?><thead><tr><th class='text-left nowrap'>订单号</th><th class='text-left nowrap'>真实姓名</th><th class='text-left nowrap'>余额</th><th class='text-left nowrap'>今日单数</th><th class='text-left nowrap'>上级用户</th><th class='text-left nowrap'>商品单价</th><th class='text-left nowrap'>交易数量</th><th class='text-left nowrap'>交易数额</th><th class='text-left nowrap'>佣金</th><th class='text-left nowrap'>下单时间</th><th class='text-left nowrap'>解冻时间</th><th class='text-left nowrap'>交易状态</th><th class='text-left nowrap'>操作</th><th class='text-left nowrap'>商品名称</th></tr></thead><?php endif; ?><tbody><?php foreach($list as $key=>$vo): ?><tr><td class='text-left nowrap'><?php echo htmlentities($vo['id']); ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['username']); ?></td><td class='text-left nowrap'><?=$vo['user_current_balance'] > 0 ? $vo['user_current_balance'] : ''?></td><td class='text-left nowrap'><?=!empty($today_num_list[$vo['id']]) ? $today_num_list[$vo['id']]['date'] : ''?><?=!empty($today_num_list[$vo['id']]) ? ' 第' . $today_num_list[$vo['id']]['today_num'] . '单' : ''?></td><td class='text-left nowrap'><?=!empty($today_num_list[$vo['id']]) ? $today_num_list[$vo['id']]['parent_username'] : ''?></td><td class='text-left nowrap'><?php foreach($res as $k=>$v): if($vo['id'] == $v['oid']): if($v['dun'] == 3): ?>                                            美元
                                            <?php $sum = 0.14 ?><?php endif; if($v['dun'] == 2): ?>                                            卢比
                                             <?php $sum = 11 ?><?php endif; if($v['dun'] == 1): ?>                                           元
                                            <?php $sum = 1 ?><?php endif; ?><?php echo htmlentities($vo['goods_price'] * $sum); break  ?><?php endif; ?><?php endforeach; ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['goods_count']); ?></td><td class='text-left nowrap'><?php foreach($res as $k=>$v): if($vo['id'] == $v['oid']): if($v['dun'] == 3): ?>                                            美元
                                             <?php $sum = 0.14 ?><?php endif; if($v['dun'] == 2): ?>                                            卢比
                                             <?php $sum = 11 ?><?php endif; if($v['dun'] == 1): ?>                                           元
                                           <?php $sum = 1 ?><?php endif; ?><?php echo htmlentities($vo['num'] * $sum); break  ?><?php endif; ?><?php endforeach; ?></td><td class='text-left nowrap'><?php foreach($res as $k=>$v): if($vo['id'] == $v['oid']): if($v['dun'] == 3): ?>                                            美元
                                            <?php $sum = 0.14 ?><?php endif; if($v['dun'] == 2): ?>                                            卢比
                                             <?php $sum = 11 ?><?php endif; if($v['dun'] == 1): ?>                                           元
                                            <?php $sum = 1 ?><?php endif; ?><?php echo htmlentities($vo['commission'] * $sum); break  ?><?php endif; ?><?php endforeach; ?></td><td class='text-left nowrap'><?php echo htmlentities(format_datetime($vo['addtime'])); ?></td><td class='text-left nowrap'><?php echo htmlentities(format_datetime($vo['endtime'])); ?></td><td class='text-left nowrap'><?php switch($vo['status']): case "0": ?><!-- <?php if(auth("edit_recharge")): ?><a data-csrf="<?php echo systoken('admin/deal/edit_recharge'); ?>" class="layui-btn layui-btn-xs layui-btn" data-action="<?php echo url('edit_recharge',['status'=>2,'id'=>$vo['id']]); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#2" >确认付款</a><a data-csrf="<?php echo systoken('admin/deal/edit_recharge'); ?>" class="layui-btn layui-btn-xs layui-btn-warm" data-action="<?php echo url('edit_recharge',['status'=>3,'id'=>$vo['id']]); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#3" >取消订单</a><?php endif; ?> -->                            等待付款
                    
                    <?php break; case "1": ?>完成付款<?php break; case "2": ?>用户取消<?php break; case "3": ?>强制付款<?php break; case "4": ?>系统取消<?php break; case "5": ?>订单冻结<?php break; ?><?php endswitch; ?></td><td class='text-left nowrap'><?php if($vo['status']==0): ?><a data-csrf="<?php echo systoken('admin/deal/do_user_order'); ?>" class="layui-btn layui-btn-xs layui-btn" data-action="<?php echo url('do_user_order'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#3" >强制付款</a><a data-csrf="<?php echo systoken('admin/deal/do_user_order'); ?>" class="layui-btn layui-btn-xs layui-btn-warm" data-action="<?php echo url('do_user_order'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#4" >取消订单</a><?php endif; if($vo['status']==5): ?><a data-csrf="<?php echo systoken('admin/deal/jiedong'); ?>" class="layui-btn layui-btn-xs layui-btn" data-action="<?php echo url('jiedong'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#3" >手动解冻</a><?php endif; ?></td><td class='text-left nowrap'><?php echo htmlentities($vo['goods_name']); ?></td></tr><?php endforeach; ?></tbody></table><?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><span class="notdata">没有记录哦</span><?php else: ?><?php echo (isset($pagehtml) && ($pagehtml !== '')?$pagehtml:''); ?><?php endif; ?></div></div></div><script>//    layui.use('element', function(){
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