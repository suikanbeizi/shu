<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <title>报名信息</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/amazeui.min.css');?>"/>
  <link rel="stylesheet" href="<?php echo site_url('assets/css/admin.css');?>">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>大数据私董会</strong> <small>人员报名信息</small>
  </div>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="#"><span class="am-icon-table"></span> 表格</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>是兄弟 一起干</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default">新增</button>
              <button type="button" class="am-btn am-btn-default">保存</button>
              <button type="button" class="am-btn am-btn-default">审核</button>
              <button type="button" class="am-btn am-btn-default">删除</button>
            </div>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有类别</option>
              <option value="option2">IT业界</option>
              <option value="option3">数码产品</option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option>
            </select>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">姓名</th><th class="table-company">公司</th><th class="table-title">职位</th><th class="table-type">电话</th><th class="table-author am-hide-sm-only">城市</th><th class="table-date am-hide-sm-only">报名日期</th><th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php
                  foreach($users as $user){
                ?>
              <tr>
                <td><input type="checkbox" value="<?php echo $user->id;?>" /></td>
                <td>
                  <?php
                  echo $user->username;
                  ?>
                </td>
                <td>
                  <?php
                  echo $user->company;
                  ?>
                </td>
                <td>
                  <?php
                  echo $user->position;
                  ?>
                </td>
                <td>
                  <?php
                  echo $user->tel;
                  ?>

                </td>
                <td class="am-hide-sm-only">
                  <?php
                  echo $user->city;
                  ?>
                </td>
                <td class="am-hide-sm-only">
                  <?php
                  echo $user->time;
                  ?>
                </td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <form action="<?php echo site_url('index.php/user_sign/deluser/'.$user->id);?>" method="POST">
                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" type="submit">删除</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
            <div class="am-cf">
              <div class="am-fr">
                <ul class="am-pagination">
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
            <hr />

          </form>
        </div>

      </div>
    </div>

    <footer class="admin-content-footer">
      <hr>

    </footer>

  </div>
  <!-- content end -->
</div>


<footer>
  <hr>

</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
<!--<![endif]-->
<script src="<?php echo site_url('assets/js/amazeui.min.js');?>"></script>
<script src="<?php echo site_url('assets/js/app.js');?>"></script>

</body>
</html>
