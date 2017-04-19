<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理员登录</title>
    <meta name="description" content="这是一个 admin_login 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.datatables.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/app.css') ?>">
    <script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js') ?>"></script>

</head>

<body data-type="login">
    <script src="<?php echo site_url('assets/js/theme.js') ?>"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form" method="POST" action="<?php echo site_url('index.php/shu_user/admin_do_login')?>">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入账号" name="username">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-name" placeholder="请输入密码" name="password">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
                        记住密码
                         </label>
                    </div>
                    <div class="am-form-group">

                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo site_url('assets/js/amazeui.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/app.js') ?>"></script>

</body>

</html>