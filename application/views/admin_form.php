<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>添加书籍</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
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
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加书籍</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="POST" action="<?php echo site_url('index.php/shu_user/admin_insert_book')?>" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">书籍名称<span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入书籍名称" name="book_name" >
                                            <small>请填写书籍全称</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">作者<span class="tpl-form-line-small-title">Anthor</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入作者" name="book_anthor">
                                            <small>请填写作者全称</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">出版社<span class="tpl-form-line-small-title">Press</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入出版社" name="book_chubanshe">
                                            <small>请填写出版社全称</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="" name="book_time">
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">书籍字数<span class="tpl-form-line-small-title">FontNum</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入书籍字数" name="book_zs">
                                            <small>请填写数字</small>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">出售价格<span class="tpl-form-line-small-title">Price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入价格" name="book_price">
                                            <small>请填写数字</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">出售数量<span class="tpl-form-line-small-title">Num</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入出售数量" name="book_num">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="userfile">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类 <span class="tpl-form-line-small-title">Classify</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="book_fenlei">
                                              <option value="文艺">文艺</option>
                                              <option value="经管">经管</option>
                                              <option value="社科">生活</option>
                                              <option value="教育">教育</option>
                                              <option value="科技">科技</option>
                                              <option value="童书">童书</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">书籍描述</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入书籍内容描述" name="book_des"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
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