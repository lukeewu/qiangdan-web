<?php /*a:1:{s:61:"/www/wwwroot/qiangdan/application/admin/view/index/index.html";i:1615598992;}*/ ?>
<!DOCTYPE html><html lang="zh"><head><title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); if(!empty($title)): ?> · <?php endif; ?><?php echo sysconf('site_name'); ?></title><meta charset="utf-8"><meta name="renderer" content="webkit"><meta name="format-detection" content="telephone=no"><meta name="apple-mobile-web-app-capable" content="yes"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=0.4"><link rel="shortcut icon" href="<?php echo sysconf('site_icon'); ?>"><link rel="stylesheet" href="/static/plugs/awesome/fonts.css?at=<?php echo date('md'); ?>"><link rel="stylesheet" href="/static/plugs/layui/css/layui.css?at=<?php echo date('md'); ?>"><link rel="stylesheet" href="/static/theme/css/console.css?at=<?php echo date('md'); ?>"><script>window.ROOT_URL = '';</script><script src="/static/plugs/jquery/pace.min.js"></script><style>        .layui-badge {
            border-radius: 50%;
            top:10px!important;
        }
    </style></head><body class="layui-layout-body"><div class="layui-layout layui-layout-admin layui-layout-left-hide"><!-- 顶部菜单 开始 --><div class="layui-header notselect"><a href="<?php echo url('@'); ?>" class="layui-logo layui-elip"><?php echo sysconf('app_name'); if(sysconf('app_version')): ?><sup class="padding-left-5"><?php echo sysconf('app_version'); ?></sup><?php endif; ?></a><ul class="layui-nav layui-layout-left"><li class="layui-nav-item" lay-unselect><a class="text-center" data-target-menu-type><i class="layui-icon layui-icon-spread-left"></i></a></li><?php foreach($menus as $oneMenu): ?><li class="layui-nav-item"><a data-menu-node="m-<?php echo htmlentities($oneMenu['id']); ?>" data-open="<?php echo htmlentities($oneMenu['url']); ?>"><?php if(!(empty($oneMenu['icon']) || (($oneMenu['icon'] instanceof \think\Collection || $oneMenu['icon'] instanceof \think\Paginator ) && $oneMenu['icon']->isEmpty()))): ?><span class='<?php echo htmlentities($oneMenu['icon']); ?> padding-right-5'></span><?php endif; ?><span><?php echo htmlentities((isset($oneMenu['title']) && ($oneMenu['title'] !== '')?$oneMenu['title']:'')); ?></span></a></li><?php endforeach; ?></ul><ul class="layui-nav layui-layout-right"><li lay-unselect="" class="layui-nav-item"><a href="/admin.html#/admin/deal/user_recharge.html?jia=1&spm=m-69-72-99">                    充值(假人)
                    <span class="layui-badge recharge_jia">0</span></a></li><li lay-unselect="" class="layui-nav-item"><a href="/admin.html#/admin/deal/deposit_list.html?jia=1&spm=m-69-72-100">                    提现(假人)
                    <span class="layui-badge deposit_jia">0</span></a></li><li lay-unselect="" class="layui-nav-item"><a href="/admin.html#/admin/deal/user_recharge.html?spm=m-69-72-74">                    充值
                    <span class="layui-badge recharge">0</span></a></li><li lay-unselect="" class="layui-nav-item"><a href="/admin.html#/admin/deal/deposit_list.html?spm=m-69-72-76">                    提现<span class="layui-badge deposit">0</span></a></li><li lay-unselect class="layui-nav-item"><a data-reload><i class="layui-icon layui-icon-refresh-3"></i></a></li><?php if(!(empty(app('session')->get('admin_user.username')) || ((app('session')->get('admin_user.username') instanceof \think\Collection || app('session')->get('admin_user.username') instanceof \think\Paginator ) && app('session')->get('admin_user.username')->isEmpty()))): ?><li class="layui-nav-item"><dl class="layui-nav-child"><dd lay-unselect><a data-modal="<?php echo url('admin/index/info',['id'=>session('admin_user.id')]); ?>"><i class="layui-icon layui-icon-set-fill margin-right-5"></i>基本资料</a></dd><dd lay-unselect><a data-modal="<?php echo url('admin/index/pass',['id'=>session('admin_user.id')]); ?>"><i class="layui-icon layui-icon-component margin-right-5"></i>安全设置</a></dd><?php if(auth('admin/index/buildoptimize')): ?><dd lay-unselect><a data-modal="<?php echo url('admin/index/buildOptimize'); ?>"><i class="layui-icon layui-icon-template-1 margin-right-5"></i>压缩发布</a></dd><?php endif; if(auth('admin/index/clearruntime')): ?><dd lay-unselect><a data-modal="<?php echo url('admin/index/clearRuntime'); ?>"><i class="layui-icon layui-icon-fonts-clear margin-right-5"></i>清理缓存</a></dd><?php endif; if(!(empty($GLOBALS['AdminUserRightOption']) || (($GLOBALS['AdminUserRightOption'] instanceof \think\Collection || $GLOBALS['AdminUserRightOption'] instanceof \think\Paginator ) && $GLOBALS['AdminUserRightOption']->isEmpty()))): foreach($GLOBALS['AdminUserRightOption'] as $option): if(auth($option['node'])): ?><dd lay-unselect><a data-<?php echo htmlentities($option['type']); ?>="<?php echo htmlentities($option['action']); ?>"><i class="<?php echo htmlentities($option['icon']); ?> margin-right-5"></i><?php echo htmlentities($option['title']); ?></a></dd><?php endif; ?><?php endforeach; ?><?php endif; ?><dd lay-unselect><a data-confirm="确定要退出登录吗？" data-load="<?php echo url('admin/login/out'); ?>"><i class="layui-icon layui-icon-release margin-right-5"></i>退出登录</a></dd></dl><a><span><i class="layui-icon layui-icon-username margin-right-5"></i><?php echo session('admin_user.username'); ?></span></a></li><?php else: ?><li class="layui-nav-item"><a data-href="<?php echo url('@admin/login'); ?>"><i class="layui-icon layui-icon-username"></i> 立即登录</a></li><?php endif; ?></ul></div><!-- 顶部菜单 结束 --><!-- 左则菜单 开始 --><div class="layui-side layui-bg-black notselect"><div class="layui-side-scroll"><?php foreach($menus as $oneMenu): if(!(empty($oneMenu['sub']) || (($oneMenu['sub'] instanceof \think\Collection || $oneMenu['sub'] instanceof \think\Paginator ) && $oneMenu['sub']->isEmpty()))): ?><ul class="layui-nav layui-nav-tree layui-hide" data-menu-layout="m-<?php echo htmlentities($oneMenu['id']); ?>"><?php foreach($oneMenu['sub'] as $twoMenu): if(empty($twoMenu['sub']) || (($twoMenu['sub'] instanceof \think\Collection || $twoMenu['sub'] instanceof \think\Paginator ) && $twoMenu['sub']->isEmpty())): ?><li class="layui-nav-item"><a data-target-tips="<?php echo htmlentities($twoMenu['title']); ?>" data-menu-node="m-<?php echo htmlentities($oneMenu['id']); ?>-<?php echo htmlentities($twoMenu['id']); ?>" lay-href="<?php echo htmlentities($twoMenu['url']); ?>" data-open="<?php echo htmlentities($twoMenu['url']); ?>"><span class='<?php echo htmlentities((isset($twoMenu['icon']) && ($twoMenu['icon'] !== '')?$twoMenu['icon']:"layui-icon layui-icon-link")); ?>'></span><span class="nav-text padding-left-5"><?php echo htmlentities($twoMenu['title']); ?></span></a></li><?php else: ?><li class="layui-nav-item" data-submenu-layout='m-<?php echo htmlentities($oneMenu['id']); ?>-<?php echo htmlentities($twoMenu['id']); ?>'><a data-target-tips="<?php echo htmlentities($twoMenu['title']); ?>" style="background:#393D49"><span class='nav-icon layui-hide <?php echo htmlentities((isset($twoMenu['icon']) && ($twoMenu['icon'] !== '')?$twoMenu['icon']:"layui-icon layui-icon-triangle-d")); ?>'></span><span class="nav-text padding-left-5"><?php echo htmlentities($twoMenu['title']); ?></span></a><dl class="layui-nav-child"><?php foreach($twoMenu['sub'] as $thrMenu): ?><dd><a data-target-tips="<?php echo htmlentities($thrMenu['title']); ?>" data-open="<?php echo htmlentities($thrMenu['url']); ?>" data-menu-node="m-<?php echo htmlentities($oneMenu['id']); ?>-<?php echo htmlentities($twoMenu['id']); ?>-<?php echo htmlentities($thrMenu['id']); ?>"><span class='nav-icon padding-left-5 <?php echo htmlentities((isset($thrMenu['icon']) && ($thrMenu['icon'] !== '')?$thrMenu['icon']:"layui-icon layui-icon-link")); ?>'></span><span class="nav-text padding-left-5"><?php echo htmlentities($thrMenu['title']); ?></span></a></dd><?php endforeach; ?></dl></li><?php endif; ?><?php endforeach; ?></ul><?php endif; ?><?php endforeach; ?></div></div><!-- 左则菜单 结束 --><!-- 主体内容 开始 --><div class="layui-body layui-bg-gray"></div><!-- 主体内容 结束 --></div><script src="/static/plugs/layui/layui.all.js"></script><script src="/static/plugs/require/require.js"></script><script src="/static/admin.js"></script></body><script type="text/javascript" charset="utf-8">    $(function(){
            $.get("/admin/index/order_info.html", function(result){
                result = JSON.parse(result);
                console.log(result)
                $('.recharge').html(result.recharge)
                $('.deposit').html(result.deposit);
                $('.recharge_jia').html(result.recharge_jia);
                $('.deposit_jia').html(result.deposit_jia);
                _to_audio(result);
                /*if(result.recharge > 0 || result.deposit > 0 || result.deposit_jia > 0 || result.deposit_jia > 0 ) {
                    var strAudio = "<audio id='audioPlay' src='/public/634.wav' hidden='true'>";
                    if ( $( "body" ).find( "audio" ).length <= 0 )
                        $( "body" ).append( strAudio );
                    var audio = document.getElementById( "audioPlay" );
                    //浏览器支持 audion
                    audio.play();
                }*/
            });
            setInterval(function (){
                $.get("/admin/index/order_info.html", function(result){
                    result = JSON.parse(result);
                    $('.recharge').html(result.recharge)
                    $('.deposit').html(result.deposit);
                    $('.recharge_jia').html(result.recharge_jia);
                    $('.deposit_jia').html(result.deposit_jia);
                    _to_audio(result);
                    /*if(result.recharge > 0 || result.deposit>0 || result.deposit_jia>0 || result.deposit_jia>0 ) {
                        var strAudio = "<audio id='audioPlay' src='/public/634.wav' hidden='true'>";
                        if ( $( "body" ).find( "audio" ).length <= 0 )
                            $( "body" ).append( strAudio );
                        var audio = document.getElementById( "audioPlay" );
                        //浏览器支持 audion
                        audio.play();
                    }*/
                });
            } , 30000);
            
            function _to_audio(result) {
                var ti = 100;
                if (result.recharge > 0) {
                    var strAudio1 = "<audio id='audioPlay1' src='/public/cz.mp3' hidden='true'>";
                    if ( $( "body" ).find( "#audioPlay1" ).length <= 0 )
                        $( "body" ).append( strAudio1 );
                    var audio1 = document.getElementById( "audioPlay1" );
                    //浏览器支持 audion
                    setTimeout(function () {
                        audio1.play();
                    }, ti);
                    ti = ti + 6000;
                }
                if (result.deposit > 0) {
                    var strAudio2 = "<audio id='audioPlay2' src='/public/tx.mp3' hidden='true'>";
                    if ( $( "body" ).find( "#audioPlay2" ).length <= 0 )
                        $( "body" ).append( strAudio2 );
                    var audio2 = document.getElementById( "audioPlay2" );
                    //浏览器支持 audion
                    setTimeout(function () {
                        audio2.play();
                    }, ti);
                    ti = ti + 6000;
                }
                if (result.recharge_jia > 0) {
                    console.log('cz_jia', ti);
                    var strAudio3 = "<audio id='audioPlay3' src='/public/cz_jia.mp3' hidden='true'>";
                    if ( $( "body" ).find( "#audioPlay3" ).length <= 0 )
                        $( "body" ).append( strAudio3 );
                    var audio3 = document.getElementById( "audioPlay3" );
                    //浏览器支持 audion
                    setTimeout(function () {
                        audio3.play();
                    }, ti);
                    ti = ti + 6000;
                }
                if (result.deposit_jia > 0) {
                    var strAudio4 = "<audio id='audioPlay4' src='/public/tx_jia.mp3' hidden='true'>";
                    if ( $( "body" ).find( "#audioPlay4" ).length <= 0 )
                        $( "body" ).append( strAudio4 );
                    var audio4 = document.getElementById( "audioPlay4" );
                    //浏览器支持 audion
                    setTimeout(function () {
                        audio4.play();
                    }, ti);
                }
            }
            
        })
</script></html>