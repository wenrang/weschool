<?php defined('IN_IA') or exit('Access Denied');?>   <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/head', TEMPLATE_INCLUDEPATH)) : (include template('../admin/head', TEMPLATE_INCLUDEPATH));?>
        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/header', TEMPLATE_INCLUDEPATH)) : (include template('../admin/header', TEMPLATE_INCLUDEPATH));?>
        <div class="page-container">
        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/left', TEMPLATE_INCLUDEPATH)) : (include template('../admin/left', TEMPLATE_INCLUDEPATH));?>
            <div class="page-content-wrapper">
                <div class="page-content">
                <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/sidebar', TEMPLATE_INCLUDEPATH)) : (include template('../admin/sidebar', TEMPLATE_INCLUDEPATH));?>
                    <h1 class="page-title"> <?php  echo $_SESSION['school_name'];?>
                            <small> <?php  echo $title;?> </small>
                    </h1>
            <!--结束公共头部-->
                <div class='row'>
                    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1"  >
                 	 <input type='hidden' value='<?php  echo $model;?>' name='model'>
                          <div class="col-md-12 col-sm-12">
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-navicon"></i>请选择需要发送消息的教师 </div>
                                </div> 
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                        <thead>
                                            <tr>
                                              <th class="table-checkbox">
                                                   <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                       <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" onclick="checkBox()"/>
                                                       <span></span>
                                                   </label>
                                                </th>
                                                <th> 教师名 </th>
                                                <th width='20%'> 授课 </th>
                                                <th> 班级 </th>
                                                <th width='20%'> 标签 </th>
                                                <th> 班主任 </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  if(is_array($teacher_list)) { foreach($teacher_list as $item) { ?>
                                                <tr class="odd gradeX">
                                                     <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                          <input type='checkbox' class='teacher_checkbox' value='<?php  echo $item['teacher_id'];?>' name='have[]'>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><?php  echo $item['teacher_realname'];?> </td>
                                                    <td><?php  echo $this->teacherCourse($item['teacher_id'],'echo');?></td>
                                                    <?php  $class_list = D('teacher')->getTeacherClass($item['teacher_id'],true);?>
                                                    <td>
                                                        <?php  if(is_array($class_list['list_all'])) { foreach($class_list['list_all'] as $row) { ?>
                                                            <?php  echo $row['grade_name'];?>-
                                                            <?php  echo $row['class_name'];?>,
                                                        <?php  } } ?>
                                                    </td>
                                                    <td><?php  echo C('teacherTag')->echoTeacherTag($item['teacher_tags']);?></td>
                                                    <td><?php  if($result=$this->classHead($item['teacher_id'])) { ?>
                                                        <a class='a_use_title' href='' title="<?php  echo $this->echoArrOne($result,'class_name');?>">班主任</a>
                                                        <?php  } else { ?>否
                                                        <?php  } ?>
                                                    </td>
                                                </tr>                                           
                                            <?php  } } ?>
 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                       

                       <div style="clear:both"></div>
                              <div class="col-md-12 ">
                                <div class="portlet box green-turquoise col-md-6 ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> 	添加发送内容【微信模板机制】 </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"><span style='color:red'>*</span>消息标题</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control input-lg"  name='weixin_title'  placeholder="" required  onchange="contentTo(this,'title')"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"><span style='color:red'>*</span>内容简要说明</label>
                                                    <div class="col-sm-9 ">
                                                        <textarea name='content' class='form-control' required  onchange="contentTo(this,'content')" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" col-md-3 control-label">详细说明</label>
                                                    <div class="col-sm-9 ">
                                                        <?php  echo tpl_ueditor('record_content','');?>
                                                        <span class="help-block">图片只可粘贴进来</span>	
                                                    </div>
                                                </div>	                                                 
                                                <!--
                                                    <div class="form-group">
                                                        <label class=" col-md-3 control-label"><span style='color:red'>*</span>备注信息</label>
                                                        <div class="col-sm-9 ">
                                                            <textarea name='remark' class='form-control'></textarea>
                                                        </div>
                                                    </div>	
                                                -->
                                                <div class="form-group">
                                                    <label class=" col-md-3 control-label">链接地址（https:// 或者http://）</label>
                                                    <div class="col-sm-9 ">
                                                        <textarea name='url' class='form-control'></textarea>
                                                    </div>
                                                </div>     
                                            </div>
                                            <div class="form-actions ">
                                                	<input type="submit" name="submit_weixin" value="提交" class="btn green" />
                                            </div>
                                    </div>
                                </div>
                                 <div class="portlet-body col-md-6 ">
                                        <div class="portlet box blue ">
                                            <div class="portlet-title">
                                                <div class="caption">模板消息预览  </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                                <div class='title'>
                                                    <h3>学校通知</h3>
                                                    <h5 class="font-blue-oleo">2月12日</h5>
                                                </div>
                                                <div class="form-group">
                                                     <label class="col-md-1 control-label"></label>
                                                    <div class="col-md-9 font-yellow-casablanca" id="title">消息标题</div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">学校：</label>
                                                    <div class="col-md-9">
                                                        <?php  echo $this->school_info['school_name']?>
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label">通知人：</label>
                                                    <div class="col-md-9">
                                                        管理员
                                                    </div>
                                                </div>
 
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label">时间：</label>
                                                    <div class="col-md-9">
                                                        <?php  echo date("Y-m-d H:i:s",time())?>
                                                    </div>
                                                </div>                               
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label">通知内容：</label>
                                                    <div class="col-md-9" id="content">
                                                        
                                                    </div>
                                                </div> 
                                            </div>
                                    </div>

                            </div>
                    </form>
                    </div>
                </div>
            <!--开始公共尾部-->
              </div>
            </div>
    <script>
        var d = 0;
        function checkBox(){
            if(d==0){
                $(".teacher_checkbox").prop("checked",true);
                d =1;
            }else{
                $(".teacher_checkbox").prop("checked",false);
                d =0;
            }
        }
        function contentTo(obj,idname){
            content = $(obj).val();
            $("#"+idname).html(content);
        }
    </script>
    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/right', TEMPLATE_INCLUDEPATH)) : (include template('../admin/right', TEMPLATE_INCLUDEPATH));?>
    </div>
     <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/footer', TEMPLATE_INCLUDEPATH)) : (include template('../admin/footer', TEMPLATE_INCLUDEPATH));?>
     <!--筛选表格-->
     <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/table_script', TEMPLATE_INCLUDEPATH)) : (include template('../admin/table_script', TEMPLATE_INCLUDEPATH));?>         
    </body>
    </html>