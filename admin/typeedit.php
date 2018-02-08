<?php
require_once "check.php";

require_once "../tools.php";
define('NOXUE','noxue');
$id = get('id');
$db = conn();
$sql = 'select * from nx_type where id = :id';
$stmt = $db ->prepare($sql);
$stmt -> execute([':id'=>$id]);
$type = $stmt ->fetch();

?>

<?php require_once "top.php"; ?>

    <?php require_once "header.php"; ?>

    <?php require_once "side.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                编辑分类
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
                    <h3 class="box-title">编辑分类</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="dotypeedit.php" method="post">
                                <div class="form-group">
                                    <label for="typename">分类名称</label>
                                    <input type="hidden" value="<?=$type['id']?>" name="id" class="form-control" >
                                    <input type="text" value="<?=$type['name']?>" name="typename" class="form-control" id="typename" placeholder="请输入分类名称">
                                </div>
                                <button type="submit" class="btn btn-danger typeSubmit">编辑分类</button>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php require_once "footer.php"; ?>
</body>
</html>
