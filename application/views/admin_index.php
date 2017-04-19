<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台首页</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.datatables.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/app.css') ?>">
    <script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js') ?>"></script>

</head>

<body data-type="index">
    <script src="<?php echo site_url('assets/js/theme.js') ?>"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <?php include 'admin_top.php'; ?>
                <!-- 侧边导航栏 -->
        <?php include 'admin_left.php'; ?>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 后台首页 <small>信息统计</small></div>
                        <p class="page-header-description">用户数量、订单数量统计、销售额度等统计</p>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">
                <div class="row  am-cf">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户数量</div>
                            </div>
                            <div class="widget-body am-fr">
                                <div class="am-fl">
                                    <div class="widget-fluctuation-period-text">
                                        <?php echo $person_count->count ?> 人
                                        <button class="widget-fluctuation-tpl-btn">
                                        <i class="am-icon-calendar"></i>
                                        <a href="<?php echo site_url('index.php/shu_user/admin_person')?>" class="button">查看用户信息</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4" >
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">书籍统计</div>
                            </div>
                            <div class="widget-body am-fr">
                                <div class="am-fl">
                                    <div class="widget-fluctuation-period-text">
                                        <?php echo $book_count->count ?>本
                                        <button class="widget-fluctuation-tpl-btn">
                                        <i class="am-icon-calendar"></i>
                                        <a href="<?php echo site_url('index.php/shu_user/admin_book')?>" class="button">查看书籍信息</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4" >
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">订单统计</div>
                            </div>
                            <div class="widget-body am-fr">
                                <div class="am-fl">
                                    <div class="widget-fluctuation-period-text">
                                        <?php echo $dingdan_count->count ?>个
                                        <button class="widget-fluctuation-tpl-btn">
                                        <i class="am-icon-calendar"></i>
                                        <a href="<?php echo site_url('index.php/shu_user/admin_dingdan')?>" class="button">查看订单信息</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                 
                       <div class="am-u-sm-12 am-u-md-6 am-u-lg-12">
                        <div class="widget widget-primary am-cf">
                            <div class="widget-statistic-header">
                                销售额统计
                            </div>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    <?php echo $chushou_count->count ?>元
                                </div>
                                <div class="widget-statistic-description">
                                    比去年多收入 <strong><?php echo $chushou_count->count ?>元</strong> 人民币
                                </div>
                                <span class="widget-statistic-icon am-icon-credit-card-alt"></span>
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