<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"F:\php\GSY\public/../application/index\view\personal\security.html";i:1506666784;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="4">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1300">
    <script type="text/javascript" async="" src="__STATIC__/index/security/analytics.js"></script>
    <script charset="utf-8" src="__STATIC__/index/security/v.js"></script>
    <script src="__STATIC__/index/security/hm.js"></script>
    <script src="__STATIC__/index/security/push.js"></script>
    <script async="" src="__STATIC__/index/security/gtm.js"></script>
    <script src="__STATIC__/index/security/lang.js"></script>
    <style type="text/css" abt="234"></style>
    <link href="__STATIC__/index/security/typical.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/security/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/security/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/security/moo.min.js"></script>
    <script src="__STATIC__/index/security/ui.min.js"></script>
    <script src="__STATIC__/index/security/jquery-1.12.0.min.js"></script>
    <script src="__STATIC__/index/security/common-index.js"></script>
    <title>个人中心_一米市集</title>
    <meta name="keywords" content="个人中心__一米市集">
    <meta name="description" content="个人中心__一米市集">
    <link rel="icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link href="__STATIC__/index/security/basic.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/security/lang(1).js"></script>
    <link href="__STATIC__/index/security/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/security/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/security/shop.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/security/styles-1200.css">
    <link rel="stylesheet" href="__STATIC__/index/security/styles-yimi.css">
    <link rel="stylesheet" href="__STATIC__/index/security/member-1200.css">
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/./css/cart.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('Widget/header'); ?>
<div id="container" class="page-container mb-wrap clearfix">
    <div class="inner-wrap">
        <div class="bread-crumbs">
        </div>
        <div id="main" class="clearfix">
            <!-- 左栏 -->
            <?php echo widget('Widget/left'); ?>
            <!-- 会员中心主内容区 -->
            <div class="page-article">
                <!-- 个人信息 -->
                <div id="member_security" class="member-security">

                    <h3>安全中心 <br>
                        <small>建议您开启全部安全设置，以保障账户及资金安全</small>
                    </h3>
                    <hr>
                    <div>
                        <form action="<?php echo url('Personal/setting'); ?>" method="post">
                            <!-- 登录密码 -->
                            <div class="row ac_securityitem">
                                <div class="col-md-1 ac_securityIcon">
                                    <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
                                </div>
                                <div class="col-md-2 ac_securityTitle">
                                    <p>登录密码</p>
                                </div>
                                <div class="col-md-7 ac_securityDesc">
                                    <p>密码难或易，大脑知道，一定要设一个它能记住的。</p>
                                </div>
                                <div class="col-md-2 ac_securityAction">
                                    <a class="btn btn-default"
                                       href="">修改</a>
                                </div>
                            </div>
                            <!-- 登录密码 -->
                            <!-- 手机已验证 -->
                            <div class="row ac_securityitem">
                                <div class="col-md-1 ac_securityIcon">
                                    <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
                                </div>
                                <div class="col-md-2 ac_securityTitle">
                                    <p>手机已验证</p>
                                </div>
                                <div class="col-md-7 ac_securityDesc">
                                    <p>您的验证手机：<?php echo $memberData['mobile']; ?></p>
                                </div>
                                <div class="col-md-2 ac_securityAction">
                                    <a class="btn btn-default"
                                       href="">修改</a>
                                </div>
                            </div>
                            <!-- 手机已验证 -->
                            <!-- 邮箱未验证 -->
                            <?php if($memberData['email'] != ''): ?>
                            <div class="row ac_securityitem">
                                <div class="col-md-1 ac_securityIcon">
                                    <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
                                </div>
                                <div class="col-md-2 ac_securityTitle">
                                    <p>邮箱已验证</p>
                                </div>
                                <div class="col-md-7 ac_securityDesc">
                                    <p>您的验证邮箱：<?php echo $memberData['email']; ?></p>
                                </div>
                                <div class="col-md-2 ac_securityAction">
                                    <a class="btn btn-default"
                                       href="">修改</a>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="row ac_securityitem">
                                <div class="col-md-1 ac_securityIcon">
                                    <p><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></p>
                                </div>
                                <div class="col-md-2 ac_securityTitle">
                                    <p>邮箱未验证</p>
                                </div>
                                <div class="col-md-7 ac_securityDesc">
                                    <p>通过这个验证后，若你忘记了密码，就多了一个找回的办法。</p>
                                </div>
                                <div class="col-md-2 ac_securityAction">
                                    <a class="btn btn-default" href="<?php echo url('Personal/email'); ?>">立即验证</a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- 邮箱未验证 -->
                        </form>
                    </div>
                    <hr>

                </div>
            </div>

        </div>
    </div>
</div>
<div id="im_bar" class="im clearfix" style="top: 300px;">
    <ul>
        <li class="ics online"></li>
        <li class="ics qes"></li>
        <li class="ics opin"></li>
    </ul>
</div>
<div class="to_top"></div>
</div>
    <?php echo widget('Widget/footer'); ?>

</body>
</html>