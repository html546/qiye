<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/1
 * Time: 21:55
 */

require_once "./tools.php";

$db = conn();
$id = get('id');
$sql = 'select a.*,t.name from nx_article as a,nx_type as t where a.type_id=t.id and a.id=:id';
$stmt = $db -> prepare($sql);
$stmt ->execute([':id'=>$id]);
$article = $stmt ->fetch();

?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title><?=$article['title']?>-企业网站</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="images/favicon.png">
    <link rel='icon' href='favicon.ico' type='image/x-ico' />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/default.min.css?t=227" />
    <style>
        #content img{
            max-width: 100%;
        }
    </style>
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="lib/amazeui/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="lib/handlebars/handlebars.min.js"></script>
    <script type="text/javascript" src="lib/iscroll/iscroll-probe.js"></script>
    <script type="text/javascript" src="lib/amazeui/amazeui.min.js"></script>
    <script type="text/javascript" src="lib/raty/jquery.raty.js"></script>
    <script type="text/javascript" src="js/main.min.js?t=1"></script>
</head>
<body>
<header>
    <div class="header-top">
        <div class="width-center">
            <div class="header-logo "><img src="images/logo.png" alt=""></div>
            <div class="header-title div-inline">
                <strong>XXX环保设备有限公司</strong>
                <span>XXXHUANBAOSHEBEIYOUXIANGONGSI</span>
            </div>

            <div class="header-right">
                <span>全国咨询热线</span>
                <span>00-000-00000000</span>
            </div>



        </div>
    </div>
    <div class="header-nav">
        <button class="am-show-sm-only am-collapsed font f-btn" data-am-collapse="{target: '.header-nav'}">Menu <i
                    class="am-icon-bars"></i></button>
        <nav>
            <ul class="header-nav-ul am-collapse am-in">
                <li class="on"><a href="index.html" name="index">网站首页</a></li>
                <li><a href="about.html" name="about">关于我们</a></li>
                <li><a href="productlist.html" name="show">工程案例</a></li>
                <li><a href="article_list.html" name="new">新闻资讯</a></li>
                <li><a href="contact.html" name="message">联系我们</a>
                    <div class="secondary-menu">

                        <ul><li><a href="message.html" class="message"></a></li></ul>
                    </div>
                </li>
            </ul>




        </nav>
    </div>

</header>
<div class="am-slider am-slider-default"
     data-am-flexslider="{playAfterPaused: 8000 , controlNav: false, directionNav: false    }">
    <a class="prevbtn" href="#" onClick="javascript :history.back(-1);"></a>
    <div class="search-box">
        <div><input type="text" name="" placeholder="      请输入您需要的环保类别"></div>
        <div class="search-box-btn"></div>
    </div>
    <ul class="am-slides">
        <li><img src="images/banner.jpg" alt=""></li>
        <li><img src="images/banner.jpg" alt=""></li>
        <li><img src="images/banner.jpg" alt=""></li>
        <li><img src="images/banner.jpg" alt=""></li>
    </ul>
</div>
<div>

    <div class="article-protect-tab">
        <span>公司新闻</span>
        <span>行业新闻</span>
        <span>环保知识</span>
    </div>
    <section class="article-contents">
        <h4><?=$article['title']?></h4>
        <main id="content">
            <?=$article['content']?>
        </main>
    </section>
    <footer class="header-article-list">
        <a class="prev-btn" href="article_list_content.html">
            <span>上一篇</span>
        </a>
        <a class="next-btn" href="article_list_content.html">
            <span>下一篇</span>
        </a>
    </footer>
    <div class="feature">
        <img class="sm" src="images/main5.jpg">
    </div>
</div>
<footer class="footer">
    <div class="footer-pc">
        <ul>
            <li><p>网站首页 | 关于我们 | 工程案例 | 新闻资讯 | 联系我们</p></li>
            <li><p>地址：湖北省大冶市XXX大道XXX办公室</p></li>
            <li><P>电话：0714-8868331</P></li>
            <li><p>邮编：435100</p></li>
            <li><span><a href="http://www.haothemes.com/" target="_blank" title="好主题">好主题</a>提供 - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span></li>
        </ul>
        <img src="images/qccode.png" alt="">
    </div>

    <div class="footer-phone">
        <button data-am-smooth-scroll class="am-btn am-btn-success">Top<i class="font">&#xe611;</i></button>
    </div>
</footer>
<script src="./admin/editor/ueditor.parse.min.js"></script>
<script>
    $(function () {
        uParse('#content',{
            rootPath: './admin/editor/'
        })
    })
</script>
</body>
</html>
