<html>
<head>
    <title>点击申请</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <style>
        body { margin:0; font-size:12px; }
        img{border:0;}
        .bg-box{
            position: relative;
            background-size: 100%;
            background: none no-repeat 50% 0;
        }
        .bg-box-img{
            display: block;
            width: 100%;
        }
        #btn{
            width: 50%;
            margin-left: 20%;
            top:-50;
        }
        .bg-box-con{
            position:absolute;
            width: 100%;
            display: block;
            top:90%;
        }
        input{
            width: 100%;display: block;height: 13%;border-radius: 10px;background-color: #FACD89;border: none;font-size: 22px;
        }
        p{
            font-size: 16px;line-height: 130%;
        }
    </style>
</head>
<body>
<div class="bg-box" style="background-image: url(images/01.jpg);">
    <img src="images/01.jpg" class="bg-box-img">
</div>

<div class="bg-box">
    <img src="images/02.jpg" class="bg-box-img" alt="">
</div>
<div class="bg-box">
    <img src="images/03.jpg" class="bg-box-img" alt="">
    <div class="bg-box-con">
        <div class="bg-box">
            <form action="" style="border:1px red solid;width: 20px;height: 20px;">
<!--                <input type="text">-->
            </form>
        </div>
    </div>
    <div class="bg-box-con">
        <div class="bg-box">
            <img src="images/04.png" alt="" class="bg-box-img" id="btn">
        </div>

    </div>
</div>


</body>
</html>