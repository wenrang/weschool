<?php defined('IN_IA') or exit('Access Denied');?>   <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/head', TEMPLATE_INCLUDEPATH)) : (include template('../admin/head', TEMPLATE_INCLUDEPATH));?>
        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/header', TEMPLATE_INCLUDEPATH)) : (include template('../admin/header', TEMPLATE_INCLUDEPATH));?>
        <div class="page-container">
       <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/left', TEMPLATE_INCLUDEPATH)) : (include template('../admin/left', TEMPLATE_INCLUDEPATH));?>
            <div class="page-content-wrapper">
                <div class="page-content">
                <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/sidebar', TEMPLATE_INCLUDEPATH)) : (include template('../admin/sidebar', TEMPLATE_INCLUDEPATH));?>
                    <h1 class="page-title"> 
                            <small> 系统参数设置[<?php  echo $_SESSION['school_name'];?>] </small> 
                    </h1>
                    <div class="row">
                        <div class='col-md-12'>
                            <div class="portlet light ">
                                 <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> 入口链接</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                        <div class="form-body">
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label font-red">家长中心  </label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  id='home' class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=bangding&m=lianhu_school" readonly />
                                                            </div>
                                                          </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label font-red">学生绑定  </label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  id='home' class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=studentBd&m=lianhu_school" readonly />
                                                                 <span class="font-red"> 特定使用，一般情况下无用</span>
                                                            </div>
                                                          </div>                                                          
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">教师中心 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='teain'   class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=teaIn&m=lianhu_school" readonly />

                                                            </div>
                                                          </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label  font-red">管理入口 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  id='adminin' class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=school_app&m=lianhu_school" readonly />

                                                            </div>
                                                          </div>            
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label ">学号入口 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='xuehao' class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=get_xuehao&m=lianhu_school" readonly />
                                                            </div>
                                                          </div>

                                                        <!--<div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label  font-red">手机号绑定 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="mobilebd" class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=bdMobile&m=lianhu_school" readonly />
                                                            </div>
                                                        </div>-->
                                                        
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">校外报名 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='booking'  class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=booking&m=lianhu_school&school_id=<?php  echo getSchoolId();?>" readonly />
                                                            </div>
                                                          </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label  font-red">打卡记录 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  id="card_record" class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=wapOutAttence&m=lianhu_school&school_id=<?php  echo getSchoolId();?>&begin_time=2016-06-01&end_time=2017-05-06" readonly />
                                                            </div>
                                                          </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">微官网[&tem=模板名字调用模板]</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="wap" class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=wapHome&m=lianhu_school&school_id=<?php  echo getSchoolId()?>&tem=default" readonly />
                                                            </div>
                                                          </div>
                                                    <!--<div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label  font-red">PC官网 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='pc'  class="form-control  font-red" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=pcHome&m=lianhu_school&school_id=<?php  echo getSchoolId()?>" readonly />
                                                            </div>
                                                          </div>-->
                                                    <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">独立入口 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='alonein' class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=adminlogin&m=lianhu_school" readonly />
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label  font-red">非微信环境下手机号登录【需要配置短信接口】 </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='alonein' class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=login&m=lianhu_school" readonly />
                                                            </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">定时任务访问口[ 10秒一次 ]</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id='alonein' class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=crontab&m=lianhu_school" readonly />
                                                            </div>
                                                    </div>
                                                    <?php  $class_doAction = Au("jiacard/doAction");?>
                                                    <?php  if($class_doAction) { ?>
                                                        <div class="form-group form-md-line-input">
                                                                <label class=" col-md-2 control-label font-red ">插入数据到自主对接考勤表里</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" id='alonein' class="form-control" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=insertIntoJiaCardLog&m=lianhu_school" readonly />
                                                                </div>
                                                        </div>                                                                                                           
                                                    <?php  } ?>
                                        </div>                                    
                                </div>                                        
                                </div>                       
                        </div>
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> 参数设置</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1"  >
                                        <div class="form-body">
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">学校通知</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="msg" class="form-control" value="<?php  echo $settings['msg'];?>" />
                                                                 <span class="help-block"> 行业：教育 - 院校；名称：学校通知；编号OPENTM204845041</span>

                                                            </div>
                                                          </div>
                                                        <!--<div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label"></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="msg01" class="form-control" value="<?php  echo $settings['msg01'];?>" />
                                                                 <span class="help-block">   行业：IT科技 - 互联网|电子商务；名称：重要通知；编号OPENTM400751454 </span>
                                                              
                                                         </div>					
                                                        </div>-->
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">班级通知</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="msg1" class="form-control" value="<?php  echo $settings['msg1'];?>" />
                                                                 <span class="help-block">   模板编号：OPENTM204533457；行业：教育 ；名称： 班级通知 </span>
                                                                
                                                            </div>
                                                       </div>
                                                        <!--<div class="form-group form-md-line-input">
                                                            
                                                            <label class="col-md-2 control-label"></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="msg11" class="form-control" value="<?php  echo $settings['msg11'];?>" />
                                                                 <span class="help-block">  行业：IT科技 - 互联网|电子商务；名称：重要通知；编号OPENTM400751454 </span>
                                                                
                                                            </div>					
                                                        </div>-->
                                                           <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">刷卡通知</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="msg_card" class="form-control" value="<?php  echo $settings['msg_card'];?>" />
                                                                <span class="help-block">  模板编号：TM00188；行业：教育 ；名称：到校离校提醒</SPAN>
                                                            </div>
                                                        </div> 
                                                       <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">作业通知</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="homework_msg" class="form-control" value="<?php  echo $settings['homework_msg'];?>" />
                                                                <span class="help-block">  模板编号：TM00376；行业：教育 ；名称：作业提醒</SPAN>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">家长私信提醒</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="parent_msg" class="form-control" value="<?php  echo $settings['parent_msg'];?>" />
                                                                <span class="help-block">  模板编号：OPENTM207719538；行业：教育 - 院校 ；名称：家长私信提醒</span>
                                                            </div>
                                                        </div> 
                                                       <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">老师私信提醒</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="teacher_msg" class="form-control" value="<?php  echo $settings['teacher_msg'];?>" />
                                                                <span class="help-block">  模板编号：OPENTM207719517；行业：教育 - 院校 ；名称：老师私信提醒</span>
                                                            </div>
                                                        </div>                 
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">留言提醒</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="email_msg" class="form-control" value="<?php  echo $settings['email_msg'];?>" />
                                                                <span class="help-block">  模板编号：OPENTM202309749；行业：教育 - 院校 ；名称：留言提醒</span>
                                                            </div>
                                                        </div>  
                                                        <?php  if(Au("studentCard/battery")) { ?>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">设备电量提醒[低于10%]</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="battery_num" class="form-control" value="<?php  echo $settings['battery_num'];?>" />
                                                                <span class="help-block">  模板编号：OPENTM408695277；行业：教育 - 院校 ；名称：设备电量提醒</span>
                                                            </div>
                                                        </div>                         
                                                        <?php  } ?>
                                                        <!--<div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">校内位置追踪</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="school_locus" class="form-control" value="<?php  echo $settings['school_locus'];?>" />
                                                                <span class="help-block">  【暂时】模板编号：OPENTM207941156；行业：IT科技	互联网|电子商务 ；名称：签到提醒</SPAN>
                                                            </div>
                                                        </div>                                                                                                                                                     -->
                                                        <div class="form-group form-md-line-input">
                                                            <label class=" col-md-2 control-label">短信接口配置(在末尾加&str=gbk在采用GBK发送)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="sms_set"  class="form-control" value="<?php  if($settings['sms_set']) { ?><?php  echo $settings['sms_set'];?>
                                                                <?php  } else { ?>http://api.smsbao.com/sms?u=USERNAME&p=PASSWORD&m=PHONE&c=CONTENT<?php  } ?>"  />
                                                                 <span class="help-block">  配置时，只需把相应的帐密填写上，PHONE和CONTENT，不需要动，其他类似接口也请在相应值上设置为这两个关键字；
                                                            </div>
                                                        </div>  
                                                       <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label">未关注引导二维码</label>
                                                             <div class="col-sm-10">
                                                                <?php  echo tpl_form_field_image('follow_code',$settings['follow_code']);?>
                                                             </div>					
                                                       </div>
                                                           <div class="form-group form-md-radios form-md-line-input ">
                                                               <label class="col-md-2 control-label"  >家长绑定配置</label>
                                                                  <div class="md-radio-inline">
                                                                      <div class="md-radio">
                                                                                <input type="radio" id='radiol' name="family_set" class="md-radiobtn"   value="much_school" <?php  if($settings['family_set'] !='alone_school' ) { ?>  checked <?php  } ?> />
                                                                                <label for="radiol">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>系统编号模式（多校平台建议）</label>
                                                                       </div>
                                                                        <div class="md-radio">
                                                                             <input type="radio" name="family_set"  id='radiol1' class="md-radiobtn"   value="alone_school"  <?php  if($settings['family_set'] =='alone_school' ) { ?>  checked <?php  } ?>  />
                                                                                <label for="radiol1">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>学生学号模式</label>
                                                                       </div>
                                                            </div> 
                                                            <div class="form-group form-md-line-input">
                                                                <label class=" col-md-2 control-label">超级管理员OPENID:</label>
                                                                <div class="col-sm-10">
                                                                    <input type='password' value='<?php  echo $settings['admin_openid'];?>' name='admin_openid'  class='form-control'> 					
                                                                </div>
                                                            </div> 		    

                                                    <div class="panel panel-default">
                                                                <div class="panel-heading">七牛云（多校共用）必须配置</div>
                                                                <div class="panel-body">
                                                                  <div class="form-group form-md-radios form-md-line-input ">
                                                                        <label class="col-md-2 control-label"  >图片是否开启七牛</label>
                                                                        <div class="md-radio-inline">
                                                                            <div class="md-radio">
                                                                               <input type='radio' value='0'  id= 'img_qiniu1' name='img_qiniu' class="md-radiobtn" <?php  if($settings['img_qiniu']==0) { ?> checked <?php  } ?>/> 
                                                                                <label for="img_qiniu1">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>不开启</label>
                                                                            </div>
                                                                            <div class="md-radio">
                                                                            <input type='radio' value='1' name='img_qiniu'  id= 'img_qiniu12' class="md-radiobtn"  <?php  if($settings['img_qiniu']==1) { ?> checked <?php  } ?>/> 
                                                                                <label for="img_qiniu12">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>开启</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>   

                                                                    <div class="form-group form-md-line-input">
                                                                        <label class=" col-md-2 control-label">域名(要以/结尾)：</label>
                                                                        <div class="col-sm-10">
                                                                            <input type='radio' value='1' name='qiniu' checked style="display:none">  
                                                                            <input type='text' value='<?php  echo $settings['qiniu_url'];?>' name='qiniu_url'  class='form-control' > 					
                                                                            <span class="help-block"> 不是安装家校通的域名，是做了cname解析到七牛上的域名 </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <label class=" col-md-2 control-label">AccessKey:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type='text' value='<?php  echo $settings['qiniu_AccessKey'];?>' name='qiniu_AccessKey'  class='form-control'> 					
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <label class=" col-md-2 control-label">SecretKey:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type='password' value='<?php  echo $settings['qiniu_SecretKey'];?>' name='qiniu_SecretKey'  class='form-control'> 					
                                                                        </div>
                                                                    </div>                              
                                                                <div class="form-group form-md-line-input">
                                                                        <label class=" col-md-2 control-label">储存空间名<span class="font-red">[华东地区]</span>:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type='text' value='<?php  echo $settings['qiniu_bucket'];?>' name='qiniu_bucket'  class='form-control'> 					
                                                                        </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                        <label class=" col-md-2 control-label">多媒体处理空间名:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type='text' value='<?php  echo $settings['qiniu_pipeline'];?>' name='qiniu_pipeline'  class='form-control'> 					
                                                                        </div>
                                                                </div>            
                                                                    <a href="https://portal.qiniu.com/signup?code=3lmzc1e9jkcb6">去注册七牛</a>           
                                                                </div>
                                                    </div>   
                                                    <div class="panel panel-default">
                                                                <div class="panel-heading">对外服务API配置<a href="http://bbs.jiaxt.cn/thread-300.htm" target="_blank">【使用说明】</a></div>
                                                                <div class="panel-body">
                                                                  <div class="form-group form-md-radios form-md-line-input ">
                                                                        <label class="col-md-2 control-label">是否开启API服务</label>
                                                                        <?php  $api_server =  S('base','getKeywordContent',array('api_server',false))?>
                                                                        <div class="md-radio-inline">
                                                                            <div class="md-radio">
                                                                               <input type='radio' value='0'  id= 'radiolgapi1' name='api_server' class="md-radiobtn" <?php  if($api_server==0) { ?> checked <?php  } ?>/> 
                                                                                <label for="radiolgapi1">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>不开启</label>
                                                                            </div>
                                                                            <div class="md-radio">
                                                                            <input type='radio' value='1' name='api_server'  id= 'radiolgapi2' class="md-radiobtn"  <?php  if($api_server==1) { ?> checked <?php  } ?>/> 
                                                                                <label for="radiolgapi2">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>开启</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>                          
                                                                    <div class="form-group form-md-line-input">
                                                                            <label class=" col-md-2 control-label">IP白名单:</label>
                                                                            <div class="col-sm-10">
                                                                                <?php  $api_ip =  S('base','getKeywordContent',array('api_ip',false))?>
                                                                                <input type='text' value='<?php  echo $api_ip;?>' placeholder="设置为*不限制任何ip，英文逗号分隔开不同的ip" name='api_ip'  class='form-control'> 					
                                                                                 <span class="help-block">设置为*不限制任何ip，英文逗号分隔开不同的ip  </span>
                                                                            </div>
                                                                    </div>  
                                                                     <div class="form-group form-md-line-input">
                                                                            <label class=" col-md-2 control-label">账号:</label>
                                                                            <div class="col-sm-10">
                                                                                <?php  $api_passport =  S('base','getKeywordContent',array('api_passport',false))?>
                                                                                <input type='text' value='<?php  echo $api_passport;?>' name='api_passport'  class='form-control'> 					
                                                                            </div>
                                                                    </div>                                                                   
                                                                       <div class="form-group form-md-line-input">
                                                                            <label class=" col-md-2 control-label">密码:</label>
                                                                            <div class="col-sm-10">
                                                                                <?php  $api_password =  S('base','getKeywordContent',array('api_password',false))?>
                                                                                <input type='password' value='<?php  echo $api_password;?>' name='api_password'  class='form-control'> 					
                                                                            </div>
                                                                    </div>                                                                   
                                                                </div>
                                                        </div>  
                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">当前公众号的后台主题</div>
                                                                <div class="panel-body">
                                                                  <div class="form-group form-md-radios form-md-line-input ">
                                                                        <label class="col-md-2 control-label">主题颜色</label>
                                                                        <?php  $admin_theme =  S('base','getKeywordContent',array('web_admin_theme',false))?>
                                                                        <?php  if(!$admin_theme) { ?>
                                                                            <?php  $admin_theme='darkblue'?>
                                                                        <?php  } ?>
                                                                        <div class="md-radio-inline">
                                                                            <div class="md-radio">
                                                                               <input type='radio' value='default'  id= 'radiolgapidefault' name='web_admin_theme' class="md-radiobtn" <?php  if($admin_theme=='default') { ?> checked <?php  } ?>/> 
                                                                                <label for="radiolgapidefault">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span>金黑色</label>
                                                                            </div>
                                                                            <div class="md-radio">
                                                                                <input type='radio' value='darkblue' name='web_admin_theme'  id= 'radiolgapidarkblue' class="md-radiobtn"  <?php  if($admin_theme=='darkblue') { ?> checked <?php  } ?>/> 
                                                                                    <label for="radiolgapidarkblue">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>墨蓝色</label>
                                                                            </div>
                                                                             <div class="md-radio">
                                                                                <input type='radio' value='blue' name='web_admin_theme'  id= 'radiolgapiblue' class="md-radiobtn"  <?php  if($admin_theme=='blue') { ?> checked <?php  } ?>/> 
                                                                                    <label for="radiolgapiblue">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>蓝色</label>
                                                                            </div>
                                                                             <div class="md-radio">
                                                                                <input type='radio' value='grey' name='web_admin_theme'  id= 'radiolgapigrey' class="md-radiobtn"  <?php  if($admin_theme=='grey') { ?> checked <?php  } ?>/> 
                                                                                    <label for="radiolgapigrey">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>灰色</label>
                                                                            </div>
                                                                             <div class="md-radio">
                                                                                <input type='radio' value='light' name='web_admin_theme'  id= 'radiolgapilight' class="md-radiobtn"  <?php  if($admin_theme=='light') { ?> checked <?php  } ?>/> 
                                                                                    <label for="radiolgapilight">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>白色</label>
                                                                            </div>
                                                                            <div class="md-radio">
                                                                                <input type='radio' value='light2' name='web_admin_theme'  id= 'radiolgapilight2' class="md-radiobtn"  <?php  if($admin_theme=='light2') { ?> checked <?php  } ?>/> 
                                                                                    <label for="radiolgapilight2">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>白色2</label>
                                                                            </div>
                                                                        </div>

                                                                    </div>                          
                                                                </div>
                                                    </div> 
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                                                                <input type="submit" name="submit" class="btn blue" value="确认">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                    </div>
             </div>
         <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/right', TEMPLATE_INCLUDEPATH)) : (include template('../admin/right', TEMPLATE_INCLUDEPATH));?>
         </div>
       <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../admin/footer', TEMPLATE_INCLUDEPATH)) : (include template('../admin/footer', TEMPLATE_INCLUDEPATH));?>
     </body>
    </html>
           