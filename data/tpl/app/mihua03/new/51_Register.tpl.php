<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="target-densitydpi=286, width=640, user-scalable=no" />
    <title>用户注册</title>
    <link href="<?php echo MODULE_URL;?>/style/css/bdcss.css?<?php  echo time()?>" rel="stylesheet" />
    <script src="<?php echo MODULE_URL;?>/style/js/jquery.min.js"></script>
</head>

<body style="height:1300px">
<form class="form-horizontal" method="post" role="form" action="<?php  echo $this->createMobileUrl('Register', array('submit' => '1'))?>">
    <div class="con1 mgz xi24">
    <div class="con1z">
        <span class="cheng">*</span>请仔细填写相应资料 <a href="<?php  echo $this->createMobileUrl('Login')?>" class="btn"> 去登录 </a>
    </div>
    </div>
        <div class="con2 mgz">
            <div class="con2z">
                <input placeholder="您的手机号" type="number" name='mobile' id="mobile">
            </div>
        </div>
        <div id='sendClick' class="sendClick" >
                发送验证码
        </div>

        <div class="con2 mgz">
              <div class="con2z xh">
                  <input placeholder="手机验证码"  name='code' required>
             </div>
        </div>
        <div class="con2 mgz">
              <div class="con2z ">
                  <input placeholder="设置密码[不得少于6位]" type="password" name='password1' required>
             </div>
        </div>

         <div class="con2 mgz">
              <div class="con2z xh">
                  <input placeholder="重复密码" type="password" name='password2' required>
             </div>
        </div>       

         <div class="con2 mgz">
              <div class="con2z ">
                  <input placeholder="昵称"  name='name' required>
             </div>
        </div>
        <div class=" mgz bd">
            <input type="submit" class="dlz cen xi32 bai" value="注册" name="submit">
        </div>
</body>
<script>
    var do_in = 0;
    var time_num = 60;
    var sid;
    $(function(){
        $("#sendClick").click(function(){
            if(do_in==1){
                return ;
            }
            mobile = $("#mobile").val();
            if(mobile.length!=11){
                return;
            }
            $.ajax({
                url:'<?php  echo $this->createMobileUrl('register')?>',
                type:'post',
                data:{mobile:mobile,ac:"mobile_code"},
                dataType:"json",
                success:function(obj){
                    if(obj.errcode==1){
                        alert(obj.msg);
                    }else{
                        do_in = 1;
                        time_num = 60;
                        sid = setInterval("jishi()",1000);
                    }
                }    
            });
        });
    });

    function  jishi(){
        if(time_num>0){
            $("#sendClick").html("请稍等"+time_num+"秒");
            time_num--;
        }else{
            clearInterval(sid);
            do_in=0;
             $("#sendClick").html("发送验证码");
        }

    }
</script>

</html>
