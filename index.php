<!DOCTYPE html>
<html>
<head>
    <title>findlove</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="stylesheet" href="./Css/animate.css">
    <script src="jquery-1.8.3.min.js"></script>
    <style type="text/css">
        body { margin:0; font-size:12px; }
        img{border:0;}
        .bg-box{
            background:none no-repeat 50% 0;
            background-size:100%;
            position:relative;
        }
        .bg-box-img{
            display:block;
            width:100%;
            visibility:hidden;
        }
        .bg-box-con {
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }
        .button{
            width:48%;
            background-size: 100%;
            margin: auto;
        }
        .white{
            margin-top: 3%;
            margin-left: 10.8%;
            width: 24%;
            height: 82.9%;
            float: left;
            background-size:100%;
            position: relative;
            background:none no-repeat 50% 0;
        }
        .wimg{
            display: block;
            width: 100%;
            position: absolute;
        }
        .wlist{
            margin-left: 3%;
        }
        .tl-img{
            display: block;
            margin: auto;
            width: 100%;
        }
        .activity-timeout { line-height:2; color:#FFF; text-shadow:1px 1px 1px #000; }


    </style>
</head>
<script type="text/javascript">
    //
    $(function(){
        $(".tl-img").addClass("animated zoomIn");
    });
</script>

<script type="text/javascript">
    $(function () {
        var arr = [[14341179,14592330,14316464],[13013852,14176643,14417189],[14390004,14419078
            ,14171920]],
            i = 0;
        $("#button").click(function(){
            i++;
            if(!arr[i]) i = 0;
            $(".wimg").first().attr("src","persons/"+arr[i][0]+".jpg");
            $(".wimg").eq(1).attr("src","persons/"+arr[i][1]+".jpg");
            $(".wimg").last().attr("src","persons/"+arr[i][2]+".jpg");

        });

    });

</script>
<script>

    $(function(){
        var countDownTime=parseInt(10);    //在这里设置每道题的答题时长
        function countDown(countDownTime){
            var timer=setInterval(function(){
                if(countDownTime>=0){
                    showTime(countDownTime);
                    countDownTime--;
                }else{
                    clearInterval(timer);
//                    alert();
                }
            },1000);
        }
        countDown(countDownTime);
        function showTime(countDownTime){      //这段是计算分和秒的具体数
            var hour=9;
            var minute=Math.floor(countDownTime/60);
            var second=countDownTime-minute*60;
            $("#countDownTime").text("9.20"+" "+hour+" "+minute+":"+second);
        }
    })

</script>

<body>
<div class="bg-box" style="background-image: url(./images/timeover.jpg);">
        <img src="./images/timeover.jpg" class="bg-box-img">
        <div class="bg-box-con" style="text-align:center;">
            <div class="activity-timeout" style="display:none;">
                倒计时 <span data-timeout="94565">-</span>
            </div>
        </div>
</div>

<!--    寻找真爱-->
    <div class="bg-box" style="background-image: url(./images/02.jpg);">
        <img src="./images/02.jpg" class="bg-box-img">
        <div class="bg-box-con text-center">
            <div class="bg-box center-block">
                <img class="tl-img" src="images/centerbig.png">
            </div>
        </div>
    </div>
<!--    结束-->


<!--    中间照片-->
    <div class="bg-box" style="background-image: url(./images/03.jpg);">
        <img src="./images/03.jpg" class="bg-box-img">
        <div class="bg-box-con">
            <div class="white">
                <a href=""><img class="wimg" src="persons/13013852.jpg" alt=""></a>
            </div>
            <div class="white wlist">
                <a href=""><img class="wimg" src="persons/14171920.jpg" alt=""></a>
            </div>
            <div class="white wlist">
                <a href=""><img class="wimg" src="persons/14176643.jpg" alt=""></a>
            </div>
        </div>
    </div>
<!--    中间照片结束-->

    <div class="bg-box" style="background-image: url(./images/04.jpg);">
        <img src="./images/04.jpg" class="bg-box-img">
    </div>

<!--    按钮-->
    <div class="bg-box" style="background-image: url(./images/05.jpg);">
        <img src="./images/05.jpg" class="bg-box-img">
        <div class="bg-box-con text-center">
            <div class="bg-box center-block button" id="button" style="background-image: url(images/button.png)">
                <img class="bg-box-img" src="images/button.png">
            </div>
        </div>
    </div>
<!--按钮结束-->

    <div class="bg-box" style="background-image: url(images/06.jpg);">
        <img src="./images/06.jpg" class="bg-box-img">
    </div>
<script src="//cdn.bootcss.com/moment.js/2.14.1/moment.min.js"></script>
<script>
    jQuery(function($)
    {
        $('[data-timeout]').each(function(i)
        {
            var the = $(this),
                ttl = parseInt(the.data('timeout')) || 0;
            setInterval(function()
            {
                ttl--;
                ttl >= 0 ? the.parent().show() : the.parent().hide().parents('.bg-box').css('background-image','url(images/01.jpg)');
                the.attr('data-timeout',ttl);
                pre = ttl >= 86400 ? (parseInt(ttl / 86400) + '天') : '';
                the.text(pre + moment(ttl * 1000 - 60 * 60 * 8 * 1000).format('H时m分s秒'));
            },1000);
        });

    });
</script>

</body>
</html>