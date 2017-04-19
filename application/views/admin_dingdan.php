<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>订单信息</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="" />
    <script src="<?php echo site_url('assets/js/echarts.min.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.datatables.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/app.css') ?>">
    <script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js') ?>"></script>

</head>

<body data-type="widgets">
    <script src="<?php echo site_url('assets/js/theme.js') ?>"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
         <?php include 'admin_top.php'; ?>
                <!-- 侧边导航栏 -->
        <?php include 'admin_left.php'; ?>



        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">订单列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                                      </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>订单号</th>
                                                <th>时间</th>
                                                <th>书籍名称</th>
                                                <th>数量</th>
                                                <th>价格</th>
                                                <th>交易状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($dingdans as $dingdan) { ?>
                                            <tr class="gradeX">
                                                <td><?php echo $dingdan->d_id ?></td>
                                                <td><?php echo $dingdan->d_time ?></td>
                                                <td><?php echo $dingdan->book_name ?></td>
                                                <td><?php echo $dingdan->d_num ?></td>
                                                <td><?php echo $dingdan->d_price ?></td>
                                                <td>交易完成</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="<?php echo site_url('assets/js/amazeui.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/amazeui.datatables.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/app.js') ?>"></script>
</body>

</html>