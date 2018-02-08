<?php

require_once "check.php";
require_once "../tools.php";
define('NOXUE','noxue');

$db = conn();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    print_r($_POST);
    $title = post('title');
    $type_id = post('type');
    $content = clean(post('content'));
    $sql = 'insert into nx_article(title,type_id,content) values (:title,:type_id,:content)';
    $stmt = $db ->prepare($sql);
    $stmt ->execute([':title'=>$title,':type_id'=>$type_id,':content'=>$content]);
    /*if($db ->lastInsertId()>0){
        header('location:/');
    }*/
    $row = $stmt -> rowCount();
    if($row){
        header('location:./articlelist.php');
    }
    exit('你出错了');
}

$sql = "select * from nx_type";
$stmt = $db ->prepare($sql);
$stmt -> execute();
$types = $stmt ->fetchAll();

?>

<?php require_once "top.php"; ?>

    <?php require_once "header.php"; ?>

    <?php require_once "side.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                添加文章
                <small>it all starts here</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">添加文章</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title">文章标题</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="type">选择分类</label>
                            <select name="type" id="type" class="form-control">
                                <option>选择分类</option>
                                <?php
                                    foreach ($types as $type){
                                ?>
                                <option value="<?=$type['id']?>"><?=$type['name']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">文章内容</label>
                            <script id="container" name="content" type="text/plain"></script>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="添加文章" class="btn btn-primary pull-right">
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php require_once "footer.php"; ?>
<!-- 配置文件 -->
<script type="text/javascript" src="./editor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./editor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</body>
</html>
