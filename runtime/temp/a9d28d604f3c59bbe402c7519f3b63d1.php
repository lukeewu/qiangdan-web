<?php /*a:1:{s:65:"/www/wwwroot/qiangdan/application/admin/view/users/add_users.html";i:1615598992;}*/ ?>
<form class="layui-form layui-card" action="<?php echo request()->url(); ?>" data-auto="true" method="post" autocomplete="off"><div class="layui-card-body"><div class="layui-form-item"><label class="layui-form-label">真实姓名</label><div class="layui-input-block"><input name="user_name" placeholder="请输入真实姓名" class="layui-input"><?php echo token(); ?></div></div><div class="layui-form-item"><label class="layui-form-label label-required">手机号码</label><div class="layui-input-block"><input name="tel" required placeholder="请输入手机号码" class="layui-input"></div></div><div class="layui-form-item"><label class="layui-form-label label-required">登录密码</label><div class="layui-input-block"><input name="pwd" required placeholder="请输入登录密码" class="layui-input"></div></div><div class="layui-form-item"><label class="layui-form-label">上级ID</label><div class="layui-input-block"><input name="parent_id" placeholder="请输入上级ID" class="layui-input"></div></div></div><div class="hr-line-dashed"></div><div class="layui-form-item text-center"><button class="layui-btn" type='submit'>提交</button><button class="layui-btn layui-btn-danger" type='button' data-close>取消</button></div><script>window.form.render();</script></form>