<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\PHP\GSY\public/../application/admin\view\cate\addcate.html";i:1505977936;}*/ ?>
<?php echo widget('widget/header'); ?>
<!-- /头部 -->
<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('widget/left'); ?>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Cate/lis'); ?>">分类列表</a>
                    </li>
                    <li class="active">增加分类</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增分类</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="<?php echo url('Cate/addCate'); ?>"
                                          method="post">
                                        <div class="form-group">
                                            <label for="username"
                                                   class="col-sm-2 control-label no-padding-right">所属父类</label>
                                            <div class="col-sm-6">
                                                <select name="id" id="username" class="form-control">
                                                    <option value="0">--顶级分类--</option>
                                                    <?php foreach($data as $val): ?>
                                                    <option value="<?php echo $val['cate_id']; ?>"><?php echo $val['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"
                                                   class="col-sm-2 control-label no-padding-right">添加分类</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="name" placeholder="" name="name"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>