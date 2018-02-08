<?php
require_once "check.php";

require_once "../tools.php";

define('NOXUE','noxue');
$db = conn();
$sql = 'select * from nx_type';
$stmt = $db -> prepare($sql);
$stmt ->execute();
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
                分类管理
                <small>在这里管理文章的分类</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li><a href="#">分类管理</a></li>
                <li class="active">分类列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">添加分类</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">添加分类</h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>编号</th>
                                            <th>分类名称</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php
                                            foreach ($types as $type){
                                        ?>
                                        <tr>
                                            <td><?=$type['id'] ?></td>
                                            <td><?=$type['name'] ?></td>
                                            <td>
                                                <a href="./typedelete.php?id=<?=$type['id']?>" class="btn btn-danger btn-sm">删除</a>
                                                <a href="./typeedit.php?id=<?=$type['id']?>" class="btn btn-info btn-sm">编辑</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="box-footer">
                    <a href="./types.php" class="btn btn-primary">添加分类</a>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php require_once "footer.php"; ?>
</body>
</html>
