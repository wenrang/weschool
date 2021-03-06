<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php  echo $title;?><?php  if($_W['uniaccount']['name']) { ?>--<?php  echo $_W['uniaccount']['name'];?><?php  } ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="家校互联" name="description" />
<meta content="zhuhuan" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo MODULE_URL;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo MODULE_URL;?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

<link href="<?php echo MODULE_URL;?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo MODULE_URL;?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo MODULE_URL;?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo MODULE_URL;?>admin/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo MODULE_URL;?>admin/js/js.js" ></script>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo MODULE_URL;?>/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<?php  $admin_theme =  S('base','getKeywordContent',array('web_admin_theme',false))?>
<?php  if(!$admin_theme) { ?>
	<?php  $admin_theme='darkblue'?>
<?php  } ?>
<link href="<?php echo MODULE_URL;?>/assets/layouts/layout/css/themes/<?php  echo $admin_theme;?>.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo MODULE_URL;?>/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
 <!-- END THEME LAYOUT STYLES -->
<script src="<?php echo MODULE_URL;?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
 <!-- we7 -->
 <link href="<?php echo MODULE_URL;?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo MODULE_URL;?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<?php  if(!in_array($left_nav,array('system_index_nav','system_set' ,'attence') ) && $we7_js!='no'  ) { ?>
 <script src="<?php echo MODULE_URL;?>admin/js/util.js"   	  type="text/javascript"></script>
 <script src="<?php echo MODULE_URL;?>admin/js/require.js"    type="text/javascript"></script>
 <?php  if(IMS_VERSION > 0.8) { ?>
 <script>
    require.config({
	baseUrl: 'resource/js/app',
	paths: {
		'jquery': '<?php echo MODULE_URL;?>/assets/global/plugins/jquery.min',
		'jquery.ui': '../lib/jquery-ui-1.10.3.min',
		'jquery.caret': '../lib/jquery.caret',
		'jquery.jplayer': '../../components/jplayer/jquery.jplayer.min',
		'jquery.zclip': '../../components/zclip/jquery.zclip.min',
		'bootstrap': '../lib/bootstrap.min',
		'bootstrap.switch': '../../components/switch/bootstrap-switch.min',
		'angular': '../lib/angular.min',
		'angular.sanitize': '../lib/angular-sanitize.min',
		'underscore': '../lib/underscore-min',
		'chart': '../lib/chart.min',
		'moment': '../lib/moment',
		'filestyle': '../lib/bootstrap-filestyle.min',
		'datetimepicker': '../../components/datetimepicker/jquery.datetimepicker',
		'daterangepicker': '../../components/daterangepicker/daterangepicker',
		'colorpicker': '../../components/colorpicker/spectrum',
		'map': 'http://api.map.baidu.com/getscript?v=2.0&ak=F51571495f717ff1194de02366bb8da9&services=&t=20140530104353',
		'editor': '../../components/tinymce/tinymce.min',
		'kindeditor':'../../components/kindeditor/lang/zh_CN',
		'kindeditor.main':'../../components/kindeditor/kindeditor-min',
		'css': '../lib/css.min',
		'webuploader' : '../../components/webuploader/webuploader.min',
		'fileUploader' : '<?php echo MODULE_URL;?>admin/js/fileuploader.min',
		'json2' : '../lib/json2',
		'wapeditor' : './wapeditor',
		'jquery.wookmark': '../lib/jquery.wookmark.min',
		'validator': '../lib/bootstrapValidator.min',
		'select2' : '../../components/select2/zh-CN',
		'clockpicker': '../../components/clockpicker/clockpicker.min',
		'jquery.qrcode': '../lib/jquery.qrcode.min',
		'raty': '../lib/raty.min'
	},
	shim:{
		'jquery.ui': {
			exports: "$",
			deps: ['jquery']
		},
		'jquery.caret': {
			exports: "$",
			deps: ['jquery']
		},
		'jquery.jplayer': {
			exports: "$",
			deps: ['jquery']
		},
		'bootstrap': {
			exports: "$",
			deps: ['jquery']
		},
		'bootstrap.switch': {
			exports: "$",
			deps: ['bootstrap', 'css!../../components/switch/bootstrap-switch.min.css']
		},
		'angular': {
			exports: 'angular',
			deps: ['jquery']
		},
		'angular.sanitize': {
			exports: 'angular',
			deps: ['angular']
		},
		'emotion': {
			deps: ['jquery']
		},
		'chart': {
			exports: 'Chart'
		},
		'filestyle': {
			exports: '$',
			deps: ['bootstrap']
		},
		'daterangepicker': {
			exports: '$',
			deps: ['bootstrap', 'moment', 'css!../../components/daterangepicker/daterangepicker.css']
		},
		'datetimepicker' : {
			exports : '$',
			deps: ['jquery', 'css!../../components/datetimepicker/jquery.datetimepicker.css']
		},
		'kindeditor': {
			deps: ['kindeditor.main', 'css!../../components/kindeditor/themes/default/default.css']
		},
		'colorpicker': {
			exports: '$',
			deps: ['css!../../components/colorpicker/spectrum.css']
		},
		'map': {
			exports: 'BMap'
		},
		'json2': {
			exports: 'JSON'
		},
		'fileUploader': {
			deps: ['webuploader', 'css!../../components/webuploader/webuploader.css', 'css!../../components/webuploader/style.css']
		},
		'wapeditor' : {
			exports : 'angular',
			deps: ['angular.sanitize', 'jquery.ui', 'underscore', 'fileUploader', 'json2', 'datetimepicker']
		},
		'jquery.wookmark': {
			exports: "$",
			deps: ['jquery']
		},
		'validator': {
			exports: "$",
			deps: ['bootstrap']
		},
		'select2': {
			deps: ['css!../../components/select2/select2.min.css', './resource/components/select2/select2.min.js']
		},
		'clockpicker': {
			exports: "$",
			deps: ['css!../../components/clockpicker/clockpicker.min.css', 'bootstrap']
		},
		'jquery.qrcode': {
			exports: "$",
			deps: ['jquery']
		}
	}
});
 </script>
 <?php  } else { ?>
     <script src="<?php echo MODULE_URL;?>admin/js/config.js" type="text/javascript"></script>
 <?php  } ?>
<?php  } ?>
 <script>
     function teacher_class_change(){
       class_obj=$('.class_s');
       var class_id_str='';
       $.each(class_obj,function(i,e){
             have_check=$(this).prop('checked');
             if(have_check){
                 class_id_str +=$(this).val()+',';
             }
       });   
          $.ajax({
           url:'<?php  echo $this->createWebUrl("ajax")?>',
           type:'post',
           dataType:'json',
           data:{ac:'teacher_class_change',class_str:class_id_str}, 
           success:function(obj){
               if(obj.status=='success'){
                   $("#course_list").html('');
                   $.each(obj.list,function(i,e){
                     $("#course_list").append("<input type='checkbox' class='box_type' value='"+e.course_id+"' name='course_id[]' >&nbsp;"+e.course_name+"&nbsp;&nbsp;&nbsp;&nbsp;");
                   });
               }
           }
       });
   }
   //审核通过
   function passThis(id,type){
       $.ajax({
           url:'<?php  echo $this->createWebUrl("ajax")?>',
           type:'post',
           dataType:'json',
           data:{id:id,type:type,ac:'pass'},
           success:function(obj){
               if(obj.errcode==0){
                   if(type=='line'){
                      queue_num =  $("#"+type+'_'+id).find('.queue_num').attr("data-queue");
                      location.href="<?php  echo $this->createWebUrl("sendToMsg")?>&que_num="+queue_num;
                   }
                   $("#"+type+'_status_'+id).html("审核通过");
                   $("#"+type+'_'+id).find('.red').remove();   
            }
           }
       });
   }
    //删除操作
     function deleteThis(id,type){
            $.ajax({
                url:'<?php  echo $this->createWebUrl("ajax")?>',
                type:'post',
                dataType:'json',
                data:{id:id,type:type,ac:'tea_delete'},
                success:function(obj){
                    if(obj.errcode==0){
                        alert("删除成功！");
                        $("#"+type+'_'+id).remove();   
                    }
                }
            });
   }
   function check_this(id){
       if($("#chebox_"+id).prop('checked'))
            $("#chebox_"+id).prop('checked',false);
       else
            $("#chebox_"+id).prop('checked',true);
   }
   function input_this(id){
       $("#input_"+id).focus();
   }
</script>
    <body class=" page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed">