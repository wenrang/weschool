<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('school/app_header', TEMPLATE_INCLUDEPATH)) : (include template('school/app_header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>/style/css/old_css.css">
<body>
  <style>
  .bg-gradient{
    background-color: rgba(51,203,213,0.8);
    background-image: none;
  }
  </style>
  <section class="w-section mobile-wrapper">
    <div class="page-content" id="main-stack">
      <div  class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <nav class="w-nav-menu nav-menu bg-gradient" role="navigation">
              <div class="nav-menu-header">
                <div class="logo"><?php  echo $_SESSION['school_name'];?></div>
              </div>
              <a class="w-clearfix w-inline-block nav-menu-link" href="<?php  echo $this->createMobileUrl("school_home")?>" data-load="1">
                <div class="icon-list-menu">
                  <div class="icon ion-ios-home-outline"></div>
                </div>
                <div class="nav-menu-titles">首页</div>
              </a>
              <a class="w-clearfix w-inline-block nav-menu-link" href="<?php  echo $this->createMobileUrl("SchoolAdminSchoolMsg")?>" data-load="1">
                <div class="icon-list-menu">
                  <div class="icon ion-ios-list-outline"></div>
                </div>
                <div class="nav-menu-titles">公告列表</div>
              </a>

              <div class="separator-bottom"></div>
              <div class="separator-bottom"></div>
              <div class="separator-bottom"></div>
            </nav>                      
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">学校公告列表</div>

          <div class="w-nav-button navbar-button left" id="menu-button" data-ix="hide-navbar-icons">
            <div class="navbar-button-icon home-icon">
              <div class="bar-home-icon top"></div>
              <div class="bar-home-icon middle"></div>
              <div class="bar-home-icon bottom"></div>
            </div>          
          </div>
        <a class="w-inline-block navbar-button right" href="<?php  echo $this->createMobileUrl('SchoolAdminSchoolMsgAdd')?>" data-load="1" data-ix="search-box">
                <div class="navbar-button-icon smaller icon ion-ios-plus-outline"></div>
        </a>  
        </div>
      </div>
      <div class="body"   >
        <div class="news-mask"></div>
        <div class="news-container">
            <ul class="w-clearfix list-news" id="list">
                    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('../new/SchoolAdminSchoolMsg_content', TEMPLATE_INCLUDEPATH)) : (include template('../new/SchoolAdminSchoolMsg_content', TEMPLATE_INCLUDEPATH));?>
            </ul>
        </div>
        <div id="add_msg" class="add_msg"></div>
      </div>
    </div>
    <div class="page-content loading-mask" id="new-stack">
      <div class="loading-icon">
        <div class="navbar-button-icon icon ion-load-d"></div>
      </div>
    </div>
  </section>
   <script>
    var pager    = 1;
    $(function(){
        $(window).scroll(function(){
            if ($(document).height() - $(this).scrollTop() - $(this).height() < 100){
                if(pager==0) return false;
                pager++;       
                $.ajax({
                url:'<?php  echo $this->createMobileUrl('schoolAdminSchoolMsg')?>',
                type:'post',
                data:{page:pager,ac:'ajax' },
                dataType:'text',
                async:'false',
                success:function(html){
                        if(html=='done' ){
                            $("#add_msg").html("已经全部查看！");
                            pager=0;
                        }else{
                            $('#list').append(html);   
                        }
                    }
                });
            }
        });
    });
   </script>
    
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('school/app_footer', TEMPLATE_INCLUDEPATH)) : (include template('school/app_footer', TEMPLATE_INCLUDEPATH));?>
</body>
</html>