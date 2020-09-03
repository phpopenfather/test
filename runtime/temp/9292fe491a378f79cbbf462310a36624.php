<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:104:"D:\phpstudy_pro\WWW\miaoxiang_php\website\miaoxiang\public/../application/index\view\user\codelogin.html";i:1599029681;s:94:"D:\phpstudy_pro\WWW\miaoxiang_php\website\miaoxiang\application\index\view\layout\default.html";i:1598432069;s:91:"D:\phpstudy_pro\WWW\miaoxiang_php\website\miaoxiang\application\index\view\common\meta.html";i:1596610657;s:93:"D:\phpstudy_pro\WWW\miaoxiang_php\website\miaoxiang\application\index\view\common\script.html";i:1596610657;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?> – <?php echo $site['name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
        <link href="/assets/css/user.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
        <link href="/assets/css/xm_common.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top navbar-mx" role="navigation">
            <div class="container-mx">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<!--                    <a class="navbar-brand" href="<?php echo url('/'); ?>"><img class="img-responsive" width="120" src="/assets/img/logo@1x.png"></a>-->
                    <a class="navbar-brand" href="<?php echo url('/'); ?>"><img class="img-responsive" width="120" src="<?php if(isset($logo)){ echo $logo;}else{ echo '/assets/img/logo@1x.png';}?>"></a>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">

                    <a href="" class="btn navbar-right download-client" >客户端下载</a>
                    <ul class="nav navbar-nav navbar-avatar navbar-right">
                        <?php if($user): ?>
                        <li class="dropdown img-li">
                            <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle avatar-a" data-toggle="dropdown">
                                <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i><?php echo __('User center'); ?></a></li>
                                <li><a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i><?php echo __('Profile'); ?></a></li>
                                <li><a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i><?php echo __('Change password'); ?></a></li>
                                <li><a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo __('Sign out'); ?></a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="dropdown login-text">
                            <a class="login" href="<?php echo url('user/login'); ?>"></i> <?php echo __('Sign in'); ?></a><span class="split_line">/</span><a class="register" href="<?php echo url('user/registermode'); ?>"><?php echo __('Sign up'); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-nav-mx">
                        <li class=""><a href="<?php echo url('/'); ?>">主页</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo url('component/index'); ?>"><?php echo __('Component'); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="">1111</a></li>
                                <li class=""><a href="">2222</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="">企业中心</a></li>
                    </ul>
<!--                    <div class="search-div navbar-left">-->
<!--                        <span class="search-select">-->
<!--                            <button type="button" class="btn dropdown-btn dropdown-toggle" data-toggle="dropdown">-->
<!--                                <span class="search-text">方案</span>-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu search-menu">-->
<!--                                <li><a href="javascript:;">方案</a></li>-->
<!--                                <li><a href="javascript:;">构件</a></li>-->
<!--                            </ul>-->
<!--                        </span>-->
<!--                        <span class="search-span">-->
<!--                            <input type="text" class="search-input form-control" value="" placeholder="新中式">-->
<!--                            <img src="/assets/img/search.png">-->
<!--                        </span>-->

<!--                    </div>-->
                </div>
            </div>
        </nav>

        <main class="content">
            <style>
    body{
        background-image: url("/assets/img/login-bg.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .navbar-mx{
        background-color: transparent;
    }
    .navbar-inverse .navbar-nav>li>a{
        color: #fff;
    }
    .navbar-inverse .navbar-nav>li>a:hover{
        color: #fff;
    }
    .split_line{
        color: #fff;
    }
    .login-section{
        width: 480px;
        height: 480px;
        border-radius: 8px;
        float: right;
        border: none;
        margin-top: 170px;
    }
    .container{
        max-width: 1400px;
        width: 1400px;
    }
    .login-title{
        color: #3A3C3C;
        font-size: 24px;
        text-align: center;
        margin-top: 30px;
    }
    .sub-title{
        color: #868F91;
        font-size: 16px;
        text-align: center;
    }
    .login-section .login-main{
        padding: 28px 55px 20px 55px;
    }

    .controls{
        font-size: 16px;
        color: #BEC8CA;
    }
    .keeplogin{

    }
    .img-div{
        width: 180px;
        height: 180px;
        margin: 0 auto;
    }
    .img-div img{
        width: 100%;
        height: 100%;
    }
    .btn-forgot{
        color: #72D6E5;
        font-size: 16px;
    }
    .btn-forgot:hover{
        color: #72D6E5;
    }
    .keeplogin-bottom{
        margin: 37px 0 10px;
        text-align: center;
    }
    .login-btn{
        background: #72D6E5;
        font-size: 18px;
        color: #fff;
    }
    .login-btn:hover{
        color: #fff;
    }
    .last-p{
        text-align: center;
        margin-top: 35px;
    }
    .last-p a{
        font-size: 14px;
        color: #3A3C3C;
    }
    .last-p span{
        color: #BEC8CA;
        margin: 0 17px;
        font-size: 13px;
    }
    .login-sub{
        float: left;
        color: #fff;
        margin-top: 270px;
    }
    .text-b{
        font-size: 68px;
        margin-bottom: 20px;
    }
    .text-s{
        font-size: 34px;
    }
    @media screen and (min-width: 1300px) and (max-width: 1400px){
        .container {
            width: 1300px;
            max-width: 1300px;
        }
        .login-section{
            margin-top: 100px;
        }
    }
</style>
<div id="content-container" class="container container-login">
    <div class="login-sub">
        <p class="text-b">装配式</p>
        <p class="text-s">让装修更环保、更简单、更快捷</p>
    </div>
    <div class="user-section login-section">
        <p class="login-title">扫码登录</p>
        <p class="sub-title">支持微信/企业微信扫码登录</p>
<!--        <div class="logon-tab clearfix"> <a class="active"><?php echo __('Sign in'); ?></a> <a href="<?php echo url('user/register'); ?>?url=<?php echo urlencode($url); ?>"><?php echo __('Sign up'); ?></a> </div>-->
        <div class="login-main"> 
            <form name="form" id="login-form" class="form-vertical" method="POST" action="">
                <input type="hidden" name="url" value="<?php echo $url; ?>" />
                <?php echo token(); ?>
                <div class="form-group form-bottom">
                    <div class="img-div">
                        <img src="/assets/img/code.png">
                    </div>
                </div>
                <div class="form-group keeplogin-bottom">
                    <div class="controls">
                        <input type="checkbox" class="keeplogin" name="keeplogin" checked="checked" value="1"> 5天内自动登录
                    </div>
                </div>
                <p class="last-p"><a href="<?php echo url('index/user/codelogin'); ?>">扫码登录</a><span>|</span><a href="<?php echo url('index/user/mblogin'); ?>">手机号登录</a><span>|</span><a href="<?php echo url('user/registermode'); ?>">注册</a></p>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
        </main>

        <footer class="footer" style="clear:both">
            <p class="copyright">Copyright&nbsp;©&nbsp;2017-2020 <?php echo $site['name']; ?> All Rights Reserved <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo htmlentities($site['beian']); ?></a></p>
        </footer>

        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>

    </body>

</html>