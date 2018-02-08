<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);
    require_once './purifier/HTMLPurifier.auto.php';
    require_once './purifier/HTMLPurifier.func.php';
//    $dirty_html = isset($_POST['content']) ? $_POST['content'] : false;


    /*if (!$dirty_html) {
        display_error('You must write some HTML!');
    }*/
    echo $html = HTMLPurifier($dirty_html);
    /*database_insert($html);
    display_success();*/
    // notice that $dirty_html is *not* saved
}

?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ueditor demo</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
<form action="" method="post">
    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain" style="height: 500px;">
            这里写你的初始化内容
        </script>
    <button type="submit" class="btn btn-danger pull-right">提交</button>
</form>
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="editor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./editor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</body>