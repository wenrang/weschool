<?php defined('IN_IA') or exit('Access Denied');?>    <div class='voice_display' id='voice_display' >
        <div class='micro_voice_ico' ><i class="fa fa-microphone"></i><br>还可录<span id='end_sec'>60</span>秒、录音中...</div>
        <div id='voice_stop' class='button button-highlight button-rounded button-small' style="margin-top:60px">停止录音</div>
     </div>

    <script>
        $("#plus_voice").click(function(){
            chooseVoice();
        });
        var do_end;
        function endSec(){
            val = $("#end_sec").html();
            if(val>5){
                val--;
                $("#end_sec").html(val);
            }else{
                clearInterval(do_end)
                toStopRecord("录制超过60秒，请重试");
            }
        }
        var voice = {
            localId: '',
            serverId: ''
        };   
        function chooseVoice () {
            wx.startRecord({
                cancel: function () {
                    alert('您拒绝授权录音');
                }
            });
            $("#end_sec").html(60);
            do_end = setInterval("endSec()",1000);
            $("#voice_display").show();
        }
        //停止录音
        document.querySelector('#voice_stop').onclick = function () {
            toStopRecord("录制发生错误，请重试!");
        } 

        function toStopRecord(info){
            wx.stopRecord({
                success: function (res) {
                    voice.localId = res.localId;
                    uploadVoice();
                },
                fail: function (res) {
                    alert(info);
                }
            });
        }
        //上传录音
        function uploadVoice() {
            if (voice.localId == '') {
            return;
            }
            wx.uploadVoice({
            localId: voice.localId,
            success: function (res) {
                upVoiceToChat(res.serverId);
            }
            });
        };    
        function upVoiceToChat(voice_value){
            if(voice_value){
                sendMsg(voice_value,'voice_value');
                $(".other_type_msg").hide();
                $("#voice_display").hide();
                clearInterval(do_end);
            }
        }

    </script>