<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"E:\PHP\GSY\public/../application/admin\view\login\login.html";i:1506065568;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__STATIC__/admin/style/bootstrap.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__STATIC__/admin/style/beyond.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/demo.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="<?php echo url('Login/doLogin'); ?>" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input  class="form-control" placeholder="username" required="" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input  class="form-control" placeholder="password" name="password" required="" type="password">
                </div>

                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" required='' value="Login" type="submit">
                </div>
            </div>
           
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__STATIC__/admin/style/jquery.js"></script>
    <script src="__STATIC__/admin/style/bootstrap.js"></script>
    <script src="__STATIC__/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__STATIC__/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>