        <header>
            <!-- logo -->
            <?php 
                $session_id = $this->session->userdata('admin_user_id');
                $username=$this->session->userdata('admin_user_name');
            ?>
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="<?php echo site_url('assets/images/logo_bg.png') ?>" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span><?php echo $username ?></span> </a>
                        </li>

                       

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo site_url('index.php/shu_user/admin_zhuxiao')?>">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
