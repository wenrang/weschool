<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('school/app_header', TEMPLATE_INCLUDEPATH)) : (include template('school/app_header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>/style/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>/style/css/old_css.css">
<body>
  <style>
  .bg-gradient{
    background-color: rgba(51,203,213,1);
    background-image: none;
  }
  </style>
  <section class="w-section mobile-wrapper">
    <div class="page-content" id="main-stack">
      <div  class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title" style="z-index: 800">选择要发送的年级、班级</div>
            <div class=" navbar-button left" style="z-index: 900" >
                <a  href="<?php  echo $this->createMobileUrl('school_home')?>">
                    <div class="navbar-button-icon smaller icon ion-ios-home-outline" style="color:#fff"></div>
                </a>
            </div>
        </div>
      </div>
      <div class="body"  style="padding-top:45px;padding-left:20px;padding-right:20px;" >
                  <form  method="post" action="<?php  echo $this->createMobileUrl('schoolAdminMsgSend')?>">
               <?php  if(is_array($grade_list)) { foreach($grade_list as $row) { ?>
                    <div class="w-dropdown dropdown-container" data-delay="0" style="z-index: 1">
                        <div class="w-dropdown-toggle w-clearfix nav-menu-link dropdown">
                            <div class="icon-list-menu">
                                <input type="checkbox" onclick="checkthis(this,<?php  echo $row['grade_id'];?>)" name="grade[]" value="<?php  echo $row['grade_id'];?>">
                            </div>
                            <div class="nav-menu-titles" style="color:#222"> <?php  echo $row['grade_name'];?></div>
                            <div class="w-icon-dropdown-toggle dropdown-icon" style="color:#222;margin-right: -20px"></div>
                        </div>
                        <?php  if(is_array($row['second'])) { foreach($row['second'] as $item) { ?>
                            <nav class="w-dropdown-list drop-down-list">
                                <div class="w-clearfix w-inline-block ">
                                <div class="icon-list-menu">
                                    <input type="checkbox"  class='grade_id_<?php  echo $row['grade_id'];?>' name="class[]" value="<?php  echo $item['class_id'];?>">
                                </div>
                                <div class="nav-menu-titles" style="color:#666"><?php  echo $item['class_name'];?></div>
                                </div>
                            </nav>
                        <?php  } } ?>
                    </div>   
                    <div class="clear:both"></div>
                <?php  } } ?>
                <div class="w-form">
                    <div class="separator-button-input"></div>
                    <div>
                      <label class="label-form" for="full-name-field">通知标题【不填写为默认】</label>
                        <input class="w-input input-form" id="full-name-field" type="text" name="title"  placeholder="[学生姓名]你好，这是个新的消息" >
                      <div class="separator-fields"></div>
                    </div>
                    <div>
                      <label class="label-form" for="message">简要</label>
                        <input class="w-input input-form" id="full-name-field" type="text" name="intro" data-name="intro" >
                    </div>
                    <div>
                      <label class="label-form" for="message">详细内容</label>
                      <textarea class="w-input input-form textarea" name="content" data-name="content"></textarea>
                    </div>
                      <div >
                        <label class="label-form" for="message">照片</label>
                                <br>
                                <div class="weui_uploader_bd">
                                      <ul class="weui_uploader_files" id='weui_uploader_files'>
                                      </ul>
                                      <div class="weui_uploader_input_wrp">
                                          <span class="weui_uploader_input"  id="chooseImage"  accept="image/*" multiple=""></span>
                                      </div>
                                  </div>
                                  <div style='clear:both'></div>
                                  <div  class='hide' id='img_value'> </div>  
                                  <div id='uploadImg' style='margin-bottom:5px;margin-left:10px;display:inline;'></div>
                      </div>	
                      <div>
                          <div  class='hide' id='voice_value'></div>     
                            <div class="button button-primary button-rounded button-small up_button" style='margin:5px 0px 5px 10px;' onclick='chooseVoice()'>开始录音</div>
                            <div id='uploadVoice' style='margin-bottom:5px;margin-left:10px;display:inline;' ></div>
                      </div>             
                    <div class="separator-button-input"></div>
                    <input type="hidden" value="<?php  echo $token;?>"  name='token'>
                    <input class="w-button action-button" type="submit" name="submit" value="提交" data-wait="Please wait...">
                </div>               
                  </form>
        </div>
      </div>
      <div class="page-content loading-mask" id="new-stack">
        <div class="loading-icon">
          <div class="navbar-button-icon icon ion-load-d"></div>
        </div>
      </div>
  </section>

<script>
  function checkthis(obj,grade_id){
    if($(obj).prop("checked")){
      $(".grade_id_"+grade_id).prop("checked",true);
    }else{
      $(".grade_id_"+grade_id).prop("checked",false);
    }
  }
  var images = {
    localId: [],
    serverId: []
  };
    document.querySelector('#chooseImage').onclick = function () {
      images.localId='';
      $('#img_list').html('');
      wx.chooseImage({
        success: function (res) {
          images.localId = res.localIds;
          $.each(images.localId,function(i,e){
              insertImg(e);
          });
            uploadImg();
        }
      });
    };
  function uploadImg(){
      $("#img_value").html('');
      if (images.localId.length == 0) {
          alert('请先选择图片');
          return;
      }
      var i = 0, length = images.localId.length;
      $("#weui_cell_ft_num").find('.all_num').html(length);
      images.serverId = [];

      function upload() {
        wx.uploadImage({
          localId: images.localId[i],
          success: function (res) {
            i++;
            images.serverId.push(res.serverId);
            insertValue(res.serverId);
            if (i < length) {
              $("#weui_cell_ft_num").find('.num').html(i);
              upload();
            }else{
              $("#weui_cell_ft_num").find('.num').html(length);
            }
          },
          fail: function (res) {
            alert(JSON.stringify(res));
          }
        });
      }
      upload();     
    }
  function insertImg(img_src){
      $('#weui_uploader_files').prepend(" <li class='weui_uploader_file' style='background-image:url("+img_src+")'></li>");
  }
  function insertValue(value){
      $("#img_value").prepend("<input type='hidden' name='img_value[]' value='"+value+"' >");
  }
</script>
  <style>
  #voice_stop{
    margin-top:50px;
  }
  </style>
  <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('../new/voice', TEMPLATE_INCLUDEPATH)) : (include template('../new/voice', TEMPLATE_INCLUDEPATH));?>
  <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('jsweixin', TEMPLATE_INCLUDEPATH)) : (include template('jsweixin', TEMPLATE_INCLUDEPATH));?>
  <link href="<?php echo MODULE_URL;?>style/css/weui.min.css" rel="stylesheet" type="text/css" />
  <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('school/app_footer', TEMPLATE_INCLUDEPATH)) : (include template('school/app_footer', TEMPLATE_INCLUDEPATH));?>
</body>
</html>