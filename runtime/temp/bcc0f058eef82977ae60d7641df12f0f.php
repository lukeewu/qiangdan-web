<?php /*a:2:{s:63:"/www/wwwroot/qiangdan/application/admin/view/users/tuandui.html";i:1615598992;s:54:"/www/wwwroot/qiangdan/application/admin/view/main.html";i:1615598992;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><script src="/static_new6/layui/layui.all.js"></script><div class="think-box-shadow"><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span>        当前用户: <?php echo htmlentities($uinfo['username']); ?>(<?php echo htmlentities($uinfo['tel']); ?>)  状态: <?php echo $uinfo['status']>0 ? '<font color="green">正常</font>' : '<font color="red">封禁</font>'; ?><div class="pull-right"></div></div><?php if(auth("open")): ?><div class="layui-form-item layui-inline" style="margin-right: 10px"><a class="layui-btn layui-btn-sm layui-btn-normal" data-open="<?php echo url('index'); ?>" data-reload="true"  data-csrf="<?php echo systoken('index'); ?>">返回会员列表</a><a class="layui-btn layui-btn-sm layui-btn-danger" data-confirm="确定要<?php echo $uinfo['status']>0 ? '封禁' : '解封'; ?>该用户【<?php echo htmlentities($uinfo['username']); ?>】吗？" data-action="<?php echo url('open'); ?>" data-value="id#<?php echo htmlentities($uid); ?>;status#<?php echo htmlentities($uinfo['status']); ?>;type#0" data-csrf="<?php echo systoken('open'); ?>"><?php echo $uinfo['status']>0 ? '封禁' : '解封'; ?></a><a class="layui-btn layui-btn-sm layui-btn-warning" data-confirm="确定要<?php echo $uinfo['status']>0 ? '封禁' : '解封'; ?>该用户【<?php echo htmlentities($uinfo['username']); ?>】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#<?php echo htmlentities($uid); ?>;status#<?php echo htmlentities($uinfo['status']); ?>;type#1" data-csrf="<?php echo systoken('open'); ?>"><?php echo $uinfo['status']>0 ? '封禁' : '解封'; ?>团队</a></div><?php endif; ?><fieldset><legend>条件搜索</legend><form class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get" autocomplete="off"><div class="layui-form-item layui-inline"><label class="layui-form-label">用户名称</label><div class="layui-input-inline"><input name="username" value="<?php echo htmlentities((app('request')->get('username') ?: '')); ?>" placeholder="请输入用户名称" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">手机号码</label><div class="layui-input-inline"><input name="tel" value="<?php echo htmlentities((app('request')->get('tel') ?: '')); ?>" placeholder="请输入手机号码" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">注册时间</label><div class="layui-input-inline"><input data-date-range name="addtime" value="<?php echo htmlentities((app('request')->get('addtime') ?: '')); ?>" placeholder="请选择注册时间" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">是否完成任务</label><div class="layui-input-inline"><select name="is_order" id="selectList" class="layui-input-inline"><option value="0">全部</option><option value="1">已完成</option><option value="-1">未完成</option></select></div></div><div class="layui-form-item layui-inline"><button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button></div></form></fieldset><table lay-filter="parse-table-demo"><thead><tr><th lay-data="{field:'username', width:300}">团队总人数</th><th lay-data="{field:'joinTime', width:300}">团队总余额</th><th lay-data="{field:'qwq', minWidth: 300}">团队总充值</th><th lay-data="{field:'sign', minWidth: 300}">团队总提现</th></tr></thead><tbody><tr><td><span style="color:green"><?php echo htmlentities($user_num); ?></span></td><td><span style="color:green"><?php echo htmlentities($user_price); ?></span></td><td><span style="color:green"><?php echo htmlentities($user_cz); ?></span></td><td><span style="color:green"><?php echo htmlentities($user_tx); ?></span></td></tr></tbody></table><div class="layui-tab"><ul class="layui-tab-title"><li class="layui-this">Ta的下线</li><li class="">一级会员</li><li>二级会员</li><li>三级会员</li><li>四级会员</li><li>五级会员</li><li>今日首充用户</li><li>历史充值用户</li><li>今日提现用户</li><li>今日充值用户</li></ul><div class="layui-tab-content"><div class="layui-tab-item layui-show"><table id="demo0" lay-filter="test1"></table></div><div class="layui-tab-item"><table id="demo1" lay-filter="test2"></table></div><div class="layui-tab-item"><table id="demo2" lay-filter="test2"></table></div><div class="layui-tab-item"><table id="demo3" lay-filter="test3"></table></div><div class="layui-tab-item"><table id="demo4" lay-filter="test2"></table></div><div class="layui-tab-item"><table id="demo5" lay-filter="test3"></table></div><div class="layui-tab-item"><table id="demo6" lay-filter="test3"></table></div><div class="layui-tab-item"><table id="demo7" lay-filter="test3"></table></div><div class="layui-tab-item"><table id="demo8" lay-filter="test3"></table></div><div class="layui-tab-item"><table id="demo9" lay-filter="test3"></table></div></div></div><script>        $(function () {
            var table = layui.table;
table.init('parse-table-demo', { //转化静态表格
        //height: 'full-500'
      }); 
            //第一个实例
            table.render({
                elem: '#demo0'
                ,where: {
                    iasjax:1,
                    level:-1,
                    addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                    tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                    username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                     is_order:"<?php echo htmlentities(app('request')->get('is_order')); ?>",
                    id:<?php echo htmlentities($uid); ?>                }
                ,height: 512
                ,url: '/admin/users/tuandui' //数据接口
                ,totalRow: true
                ,page: true //开启分页
                ,cols: [[ //表头
                    {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                    ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                    ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                    ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                    /*,{field: 'cz', title: '充值',totalRow: true}*/
                    ,{field: 'tx', title: '提现',totalRow: true}
                    ,{field: 'jb', title: '级别',sort:true }
                    ,{field: 'parent_name', title: '上级用户' }
                    ,{field: 'childs', title: '直推人数',totalRow: true }
                    ,{field: 'addtime', title: '注册时间',width:150 }
                    ,{field: 'id', title: '操作',width:170, templet:function (d) {
                        var name = d.status ? "封禁":"解封";
                        return '' +
                            '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                            '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                            '' +
                            '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                        var color = d.status ? "red":"green";
                    }}
                ]]
            });

            //<th lay-data="{field:'id',width:50}" class='text-left nowrap'>ID</th>            $('.layui-tab-title li').click(function () {
                if( $(this).text() == '一级会员') {

                    //第2个实例
                    table.render({
                        elem: '#demo1'
                        ,where: {
                            iasjax:1,
                            level:1,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });

                }else if( $(this).text() == '二级会员') {

                    //第3个实例
                    table.render({
                        elem: '#demo2'
                        ,where: {
                            iasjax:1,
                            level:2,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });

                }else if( $(this).text() == '三级会员') {

                    //第4个实例
                    table.render({
                        elem: '#demo3'
                        ,where: {
                            iasjax:1,
                            level:3,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '四级会员') {

                    //第4个实例
                    table.render({
                        elem: '#demo4'
                        ,where: {
                            iasjax:1,
                            level:4,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '五级会员') {

                    //第4个实例
                    table.render({
                        elem: '#demo5'
                        ,where: {
                            iasjax:1,
                            level:5,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '今日首充用户') {

                    //第4个实例
                    table.render({
                        elem: '#demo6'
                        ,where: {
                            iasjax:1,
                            level:6,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '历史充值用户') {

                    //第4个实例
                    table.render({
                        elem: '#demo7'
                        ,where: {
                            iasjax:1,
                            level:7,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '今日提现用户') {

                    //第4个实例
                    table.render({
                        elem: '#demo8'
                        ,where: {
                            iasjax:1,
                            level:8,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }else if( $(this).text() == '今日充值用户') {

                    //第4个实例
                    table.render({
                        elem: '#demo9'
                        ,where: {
                            iasjax:1,
                            level:9,
                            addtime:"<?php echo htmlentities(app('request')->get('addtime')); ?>",
                            tel:"<?php echo htmlentities(app('request')->get('tel')); ?>",
                            username:"<?php echo htmlentities(app('request')->get('username')); ?>",
                            id:<?php echo htmlentities($uid); ?>                        }
                        ,height: 512
                        ,url: '/admin/users/tuandui' //数据接口
                        ,totalRow: true
                        ,page: true //开启分页
                        ,cols: [[ //表头
                            {field: 'id', title: 'ID', width:50, sort: true, fixed: 'left',}
                            ,{field: 'tel', title: '账号',width:120 ,totalRowText: '合计'}
                            ,{field: 'balance', title: '余额',sort: true,totalRow: true}
                            ,{field: 'yj', title: '佣金',sort: true,totalRow: true}
                            ,{field: 'cz', title: '充值',totalRow: true}
                            ,{field: 'tx', title: '提现',totalRow: true}
                            ,{field: 'jb', title: '级别',sort:true }
                            ,{field: 'parent_name', title: '上级用户' }
                            ,{field: 'childs', title: '直推人数',totalRow: true }
                            ,{field: 'addtime', title: '注册时间',width:150 }
                            ,{field: 'id', title: '操作',width:170, templet:function (d) {
                                var name = d.status ? "封禁":"解封";
                                return '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-title="查看账变" data-reload="true" data-open="<?php echo url('admin/users/caiwu'); ?>?id='+d.id+'" style="background: #dc1ed1">账变</a>' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-danger"  data-confirm="确定要'+name+'该用户【'+d.username+'】吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#0" data-csrf="<?php echo systoken('open'); ?>" style="background: '+color+'">'+name+'</a>' +
                                    '' +
                                    '<a class="layui-btn layui-btn-xs layui-btn-warning"  data-confirm="确定要封禁该用户【'+d.username+'】所有下级吗？" data-action="<?php echo url('open'); ?>" data-value="id#'+d.id+';status#'+d.status+';type#1" data-csrf="<?php echo systoken('open'); ?>">'+name+'团队</a>'
                                var color = d.status ? "red":"green";
                            }}
                        ]]
                    });
                }
                
                
                
                
                
                
                
                
                
                
                
                
                
            })
        })
    </script><script>          var test = "<?php echo htmlentities((app('request')->get('is_order') ?: 0)); ?>";
    $("#selectList").find("option[value="+test+"]").prop("selected",true);
        form.render()</script></div></div></div><script>//    layui.use('element', function(){
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