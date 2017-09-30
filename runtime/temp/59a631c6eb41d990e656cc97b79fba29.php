<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"F:\php\GSY\public/../application/index\view\Personal\sendCode.html";i:1506754269;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="4">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=1300">

    <script charset="utf-8" src="__STATIC__/index/sendCode/v.js"></script>
    <script type="text/javascript" async="" src="__STATIC__/index/sendCode/analytics.js"></script>
    <script src="__STATIC__/index/sendCode/hm.js"></script>
    <script src="__STATIC__/index/sendCode/push.js"></script>
    <script async="" src="__STATIC__/index/sendCode/gtm.js"></script>
    <script src="__STATIC__/index/sendCode/lang.js"></script>
    <style type="text/css" abt="234"></style>
    <link href="__STATIC__/index/sendCode/typical.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/sendCode/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/sendCode/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/sendCode/moo.min.js"></script>
    <script src="__STATIC__/index/sendCode/ui.min.js"></script>
    <script src="__STATIC__/index/sendCode/jquery-1.12.0.min.js"></script>
    <script src="__STATIC__/index/sendCode/common-index.js"></script>
    <title>个人中心_一米市集</title>
    <meta name="keywords" content="个人中心__一米市集">
    <meta name="description" content="个人中心__一米市集">
    <link rel="icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link href="__STATIC__/index/sendCode/basic.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/sendCode/lang(1).js"></script>
    <link href="__STATIC__/index/sendCode/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/sendCode/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/sendCode/shop.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/sendCode/widgetsproinstance-get_css-yimi-bWVtYmVyLSgxKS5odG1s.html">
    <link rel="stylesheet" href="__STATIC__/index/sendCode/styles-1200.css">
    <link rel="stylesheet" href="__STATIC__/index/sendCode/styles-yimi.css">
    <link rel="stylesheet" href="__STATIC__/index/sendCode/member-1200.css">
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
                <div id="member_security" class="member-security step2_v">

                    <h3>
                        邮箱验证
                    </h3>
                    <hr>

                    <!-- 步骤图 2 -->
                    <div id="verify_steps" class="steps steps-three">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td class="step-item step-1 "><span><q class="icon">P</q><i>1</i>身份验证</span></td>
                                <td class="icon step-arrow">(</td>
                                <td class="step-item step-2 active"><span style="color: white"><q class="icon">P</q><i>2</i>设置验证信息</span>
                                </td>
                                <td class="icon step-arrow">(</td>
                                <td class="step-item step-3"><span><q class="icon">P</q><i>3</i>完成</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-8">

                            <div id="verify_content">
                                <form action="<?php echo url('Personal/jumpToPersonal'); ?>"
                                      method="post">
                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            邮箱：
                                        </div>
                                        <div class="col-md-8">

                                            <input type="hidden" name="send_type" value="reset">
                                            <input class="x-input action-account-check form-control Email" type="text"
                                                   name="Email" id="dom_el_42cc0b1" vtype="required&amp;&amp;email"> <a
                                                href="#" id="sendCode"
                                                class="btn btn-default action-resend-email">发送邮箱验证码</a>
                                        </div>
                                        <input type="hidden" name="code">
                                        <script>
                                            $("#sendCode").click(function () {
                                                var email=$(".Email").val();
                                                var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;　　　　
                                                if (emailreg.test(email)) {
                                                    $.ajax({
                                                        type:"POST",
                                                        datatype:"json",
                                                        data:{email:email},
                                                        url:"<?php echo url('Email/index'); ?>",
                                                        success:function (data) {
                                                            if(data.status=='success'){
                                                                $("input[type=hidden]").val(data.code);
                                                            }else {
                                                                alert('验证失败');
                                                            }
                                                        },
                                                    })　　　　
                                                }else {
                                                    alert("邮箱格式错误")
                                                }

                                            })
                                        </script>
                                    </div>
                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            填写验证码：
                                        </div>
                                        <div class="col-md-8">
                                            <input class="x-input form-control" type="text" name="vcode"
                                                   id="dom_el_42cc0b2" vtype="required" size="6" maxlength="6"
                                                   style="width:100px"></div>
                                    </div>
                                    <div class="row ac_securityitem">
                                        <div class="col-md-12">
                                            <button type="submit" rel="_request" class="btn btn-default">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var module = $('verify_content');
                var Query = {
                    send: function (url, data, fn) {
                        new Request({
                            url: url,
                            link: 'cancel',
                            onSuccess: function (rs) {
                                try {
                                    rs = JSON.decode(rs);
                                } catch (e) {
                                }
                                if (typeof rs.error === 'string') Message.error(rs.error);
                                else if (typeof rs.success === 'string') Message.success(rs.success);
                                fn && fn.call(this, rs);
                            }
                        }).post(data);
                    }
                };

                function changeStep(rs, x, fn) {
                    if (rs && rs[0]) {
                        if (typeOf(rs[0]) === 'string') {
                            module.innerHTML = rs[0];
                            if (x) $('verify_steps').getElement('.active').removeClass('active').getSiblings('.step-' + x).addClass('active');
                        }
                        else if (typeOf(rs[0]) === 'object') {
                            if (rs[0].error) return Message.error(rs[0].error);
                        }
                        fn && fn.call(this);
                    }
                }

                module.addEvents({
                    'change:relay(.action-verify-method)': function (e) {
                        var form = this.getParent('form');
                        form.getElements('.op-verify-mobile, .op-verify-email').addClass('hide');
                        form.getElements('.op-verify-' + this.value).removeClass('hide');
                    },
                    'click:relay(.action-resend-email)': function (e) {
                        e.stop();
                        var url = this.href;
                        var data = 'uname=' + module.getElement('.action-account-check').value + '&type=' + module.getElement('input[name=send_type]').value;
                        Query.send(url, data);
                    },
                    'click:relay(.action-get-verifycode)': function (e) {
                        e.stop();
                        if (this.hasClass('disabled')) return false;
                        var el = module.getElement('.action-account-check');
                        if (this.hasClass('disabled')) return false;
                        var form = this.getParent('form');
                        if (form.getElement('.sms-verify-input').value == '') {
                            alert('请输入验证码!');
                            return;
                        }
                        if (form.getElement('.action-account-check').value == '') {
                            alert('请输入手机号码!');
                            return;
                        }
                        sendVerify(this, 'uname=' + el.value + '&type=' + module.getElement('input[name=send_type]').value + '&sms_vcode=' + form.getElement('.sms-verify-input').value);
                    }
                });
                function sendVerify(el, data) {
                    var url = el.href;
                    el.addClass('disabled');
//    var textCont = el.getElement('span span');
                    var innerHTML = el.get('text') + '(<i>0</i>)';
                    el.innerHTML = innerHTML;
                    var cd = new countdown(el.getElement('i'), {
                        start: 120,
                        secondOnly: true,
                        callback: function (e) {
                            el.removeClass('disabled');
                            el.innerHTML = '重发验证码';
                        }
                    });
                    Query.send(url, data, function (rs) {
                        if (rs.error) {
                            cd.stop();
                            el.removeClass('disabled');
                            el.innerHTML = '重发验证码';
                        }
                    });
                }
            </script>

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