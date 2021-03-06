<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>用户登录</title>

    <!-- Bootstrap Core CSS -->
    <link href="/MeiZu-SunShine/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/MeiZu-SunShine/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="/MeiZu-SunShine/Public/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="/MeiZu-SunShine/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">魅族后台登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo U('Index/demo3');?>" method="post" id="forms">
                            <fieldset>
                            <?php if(isset($_COOKIE)): ?><div class="form-group">
                                    <input class="form-control" name="adminname" id='adminname' value="<?php echo ($_COOKIE['adminname']); ?>" type="text" autofocus><div id='div1'></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="password" id="password" type="password" value="<?php echo ($_COOKIE['password']); ?>">
                                </div>
                                <?php else: ?>
                                 <div class="form-group">
                                    <input class="form-control" name="adminname" id='adminname' value="" type="text" autofocus><div id='div1'></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="password" id="password" type="password" value="">
                                </div><?php endif; ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="验证码" name="code" id="code" type="text" value="">
                                    <img src="<?php echo U('Index/code');?>" id="imgcode" alt="" style="width:100px;height:50px;">
                                    <div></div>
                                </div>

                                <div class="checkbox">
                                <div id='div2'></div>
                                    <label>
                                        <input name="remember" type="checkbox" value="$_COOKIE['remember']">记住密码</label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" id="submit"value="登陆">
                            </fieldset>
                        </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/MeiZu-SunShine/Public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/MeiZu-SunShine/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/MeiZu-SunShine/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/MeiZu-SunShine/Public/dist/js/sb-admin-2.js"></script>

    <script src="/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
    <script src="/MeiZu-SunShine/Public/dist/js/admin.js"></script>
    <script>
    var url = '/MeiZu-SunShine/index.php/Admin';
    </script>
     <script>
        $('#imgcode').click(function(){
            var now = new Date();
            // $(this).attr('src',"<?php echo U('Index/code');?>?code="+now.getTime());
            $(this).attr('src',"<?php echo U('Index/code');?>?code="+Math.random()*1000);
        })
    </script>
</body>
</html>