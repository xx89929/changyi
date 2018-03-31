<div style="display:none"><script language="javascript" src="http://count22.51yes.com/click.aspx?id=224112153&logo=1" charset="gb2312"></script>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>上海前景广告有限公司</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <link href="http://www.changemedia.com.cn/css.css" rel="stylesheet" type="text/css" />
    <link href="http://www.hainanhecai.com/base/templates/css/common.css" rel="stylesheet" type="text/css" />
    <link href="{{url('css/style2.css')}}" rel="stylesheet" type="text/css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('asset/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('asset/css/icomoon.css')}}">

    <!-- animatedresponsiveImagegrid  -->
    <link rel="stylesheet" href="{{url('asset/css/animatedresponsiveImagegrid.css')}}">
    <!-- Magnifoc Popup  -->
    <link rel="stylesheet" href="{{url('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{url('asset/sass/qz.css')}}">


    <!-- jQuery -->
    <script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
    <!-- Modernizr JS -->
    <script src="{{url('asset/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9] -->
    <script src="{{url('asset/js/respond.min.js')}}"></script>
    <!--[endif]-->

    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="http://www.hnyxgg.com/css/Style.css" rel="stylesheet">
    <style type="text/css">
        .index-cash-show-left-ul > ul > .active{
            background: url('http://www.hainanhecai.com/base/border/213/images/bar.gif') 0px 0px no-repeat !important;
        }
    </style>
</head>
<body>
<style type="text/css">
    .clear{ clear:both;}
    body,div,ul,li{ margin:0px; padding:0px; font-size:12px;}
    ul,li{ list-style:none;}
    #nav{background:url(images/index_03.gif) no-repeat; width:824px; height:71px;}
    #nav li{ float:left; overflow:hidden; position:relative;}
    #nav li a{ display:block;  text-indent:-2000px; height:71px; width:101px; text-decoration:none;}
    #nav li a.frist{ width:115px;}
    #nav #subNav{ position:absolute; top:71px; width:100%; left:0px; text-align:center;background:#f6ab00;}
    #nav #subNav a{ color:#fff; height:25px; line-height:25px; text-indent:0px; width:auto;}
    #nav #subNav a:hover{ background:#ff4e00;}
    #scode{ position:absolute; top:15px; right:120px; width:80px; height:20px; color:#FFFFFF;}
    #scode img{ display:none; margin-top:10px;}
    #scode:hover img{ display:block; }
</style>

<div class="header-warp">
    <div class="logo-box">
        <img src="{{url('asset/images/logo.png')}}">
    </div>
    <div class="company-title">
        <h1>创海南广告行业领先品牌</h1>
        <p>踏实做事 / 高效运作 / 卓越管理 / 精英团队</p>
    </div>
    <div class="header-right">
        <div class="header-right-img">
            <i class="fa fa-phone-square fa-big"></i>
        </div>
        <div class="header-right-content">
            <p>服务热线</p>
            <h1>0898-66566954</h1>
        </div>
    </div>
</div>

<div class="nav">
    <div class="nav-box">
        <ul>
            <li >
                <a href="#">
                    <h2>长艺首页</h2>
                    <p>Home Page</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <h2>关于长艺</h2>
                    <p>synopsis</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <h2>成功案例</h2>
                    <p>exhibition</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <h2>相关文章</h2>
                    <p>Journlism</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <h2>人才招聘</h2>
                    <p>recruit</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <h2>联系我们</h2>
                    <p>telephone</p>
                </a>
            </li>

        </ul>
    </div>
</div>



{{--横幅banner--}}

<div style="width: 1019px; margin: 0 auto;" class="qz-banner-warp">
    <div id="ri-grid" class="ri-grid">
        <img class="ri-loading-image" src="{{url('asset/images/loading.gif')}}"/>
        <ul>
            @foreach($bannerCase as $bc)
                <li>
                    <a href="#">
                        <img src="{{$qshow.$bc->case_img}}"/>
                        <div class="desc">
                            <h3>{{$bc->case_title}}<br/><span>{{$bc->case_des}}</span></h3>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</div>




{{--横幅--}}
<div class="banner_warp">
    <div class="banner_warp_div">
        <h1>感谢以下企业对<span>长艺广告</span>的大力支持</h1>
        <p>Company Support <a href="#">更多</a></p>
        <div class="spanse"></div>
    </div>

{{--end横幅--}}

{{--底部滚动--}}
<div class="button-warp" style="width: 100%">
    <div class="Gundong" style="width: 1002px;  margin: 0px auto; float: none;display: table;">
        <div class="GundongPic">

            <div class="Gundong_Left bg1" style="background-color: transparent;width: auto; ">
                <dt><a href="javascript:void(0);" onmouseover="overMar(1);" onmouseout="outMar();">
                        <img src="http://www.hnyxgg.com/images/Index_32.jpg" width="35" height="82"></a>
                    <img src="http://www.hnyxgg.com/images/Index_33.jpg" width="84" height="82">
                    <img src="http://www.hnyxgg.com/images/Index_34.jpg" width="19" height="82"></dt>
            </div>

            <div class="Gundong_Main">

                <div id="demo" style="OVERFLOW: hidden;WIDTH:800px; height:80px;">
                    <table>
                        <tbody><tr>
                            <td id="demo1">
                                <div class="Gundong_Pic">
                                    <ul>
                                        <li><a href="pinpai_Show.Asp?id=181"><img src="http://www.hnyxgg.com/upload/2012191137825710.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=178"><img src="http://www.hnyxgg.com/upload/20121911342267598.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=177"><img src="http://www.hnyxgg.com/upload/20121911333310079.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=176"><img src="http://www.hnyxgg.com/upload/20121911321787274.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=174"><img src="http://www.hnyxgg.com/upload/2012191130187694.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=172"><img src="http://www.hnyxgg.com/upload/2012191127379251.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=165"><img src="http://www.hnyxgg.com/upload/20121911142317665.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=164"><img src="http://www.hnyxgg.com/upload/20121911161665715.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=163"><img src="http://www.hnyxgg.com/upload/2012191123769482.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=161"><img src="http://www.hnyxgg.com/upload/20121911213721045.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=160"><img src="http://www.hnyxgg.com/upload/20121911194977818.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=156"><img src="http://www.hnyxgg.com/upload/2012191118994071.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                    </ul>
                                </div>
                            </td>
                            <td id="demo2">
                                <div class="Gundong_Pic">
                                    <ul>

                                        <li><a href="pinpai_Show.Asp?id=181"><img src="http://www.hnyxgg.com/upload/2012191137825710.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=178"><img src="http://www.hnyxgg.com/upload/20121911342267598.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=177"><img src="http://www.hnyxgg.com/upload/20121911333310079.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=176"><img src="http://www.hnyxgg.com/upload/20121911321787274.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=174"><img src="http://www.hnyxgg.com/upload/2012191130187694.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=172"><img src="http://www.hnyxgg.com/upload/2012191127379251.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=165"><img src="http://www.hnyxgg.com/upload/20121911142317665.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=164"><img src="http://www.hnyxgg.com/upload/20121911161665715.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=163"><img src="http://www.hnyxgg.com/upload/2012191123769482.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=161"><img src="http://www.hnyxgg.com/upload/20121911213721045.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=160"><img src="http://www.hnyxgg.com/upload/20121911194977818.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                        <li><a href="pinpai_Show.Asp?id=156"><img src="http://www.hnyxgg.com/upload/2012191118994071.jpg" width="200" height="71"></a></li>
                                        <li class="bg_Line"></li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody></table>

                </div>
            </div>

            <div class="Gundong_Right">
                <dt><a href="javascript:void(0);" onmouseover="overMar(0);" onmouseout="outMar();"><img src="http://www.hnyxgg.com/images/Index_41.jpg" width="28" height="82"></a></dt>
            </div>

        </div>
    </div>
</div>
</div>
{{--底部滚动end--}}

<div class="jianbian">

</div>


{{--中间--}}
<div id="content" style="width: 1002px; margin: 0px auto;border: 1px dashed black;background-color: white">
    <div class="index_cash_show">
        <div class="index-cash-show-left" style="background: url('http://www.hainanhecai.com/base/border/213/images/line.gif') 0px 0px no-repeat;">
            <div class="index-cash-show-left-ul" id="index-cash-show-left-ul">
                <ul>
                    @foreach($caseType as $ct)
                    <li style="background: url('http://www.hainanhecai.com/base/border/213/images/bar.gif') 0px -35px no-repeat;">{{$ct->type_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="index-cash-show-right">
            @foreach($caseType as $ct)
            <div class="index-cash-show-right-item" style="display: block;" id="index-cash-show-right-item">
                <ul>
                    @foreach($case as $cs)
                        @if($cs->case_type == $ct->id)
                        <li>
                            <img src="{{$qshow.$cs->case_img}}">
                            <h4><a>{{$cs->case_title}}</a></h4>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{--中间end--}}

<div class="bottom-img">
    <img width="1002px" height="140px" src="{{url('images/bottom-img.jpg')}}">
</div>



<div class="Foot Top10" style="float: none; margin:0 auto;">
    <ul>
        版权所有  ©   海口长艺广告有限公司    办公地址：海南省海口市龙华区海垦路6号冶矿联大厦5楼　服务热线：0898-66566954<br>
        技术支持：
        <a href="www.qi-zhong.cn" target="_blank">海南企众实业有限公司</a>
    </ul>

    <div class="foot_jc">
        <a href="http://www.haikou.cyberpolice.cn" target="_blank"><img src="http://www.hnyxgg.com/images/gangting.gif" border="0px;"></a>
        <a href="http://www.haikou.cyberpolice.cn" target="_blank" style="margin-left:5px; display:inline;"><img src="http://www.hnyxgg.com/images/jingcha.gif" border="0px;"></a>
    </div>

</div>



<script type="text/javascript" src="http://www.hainanhecai.com/base/js/base.js"></script>
<script type="text/javascript" src="{{url('js/common.js')}}"></script>
<script type="text/javascript" src="http://www.hainanhecai.com/base/js/form.js"></script>
<script type="text/javascript" src="http://www.hainanhecai.com/base/js/blockui.js"></script>
<SCRIPT type=text/javascript src="http://www.hainanhecai.com/js/swfobject.js"></SCRIPT>


<!-- jQuery -->
<script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<!-- gridrotator -->
<script type="text/javascript" src="{{url('asset/js/jquery.gridrotator.js')}}"></script>

<script type="text/javascript">

        $(document).ready(function () {
            $('#ri-grid').gridrotator( {
                rows : 3,
                // number of columns
                columns : 6,
                w1024 : { rows : 2, columns : 5 },
                preventClick : false,
                interval:2000,
            } );
        })
</script>


<script>
    var speed=10//速度数值越大速度越慢
    var MyMar;
    document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML;

    //左移动
    function MarqueeAdd(){
        if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft<=0){
            document.getElementById("demo").scrollLeft=document.getElementById("demo").scrollLeft-document.getElementById("demo1").offsetWidth;
        }else{
            document.getElementById("demo").scrollLeft++;
        }
    }
    //右移动
    function MarqueeDes(){
        if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft>=0){
            document.getElementById("demo").scrollLeft=document.getElementById("demo").scrollLeft+document.getElementById("demo1").offsetWidth;
        }else{
            document.getElementById("demo").scrollLeft--;
        }
    }
    //鼠标画出停止
    function outMar(){
        clearInterval(MyMar);
    }
    //鼠标滑过滚动
    function overMar(jadge){
        if(jadge==0){
            MyMar=setInterval(MarqueeAdd,speed);
        }else{
            MyMar=setInterval(MarqueeDes,speed);
        }
    }

    //MyMar=setInterval(MarqueeAdd,speed);//自动左移动
    //MyMar=setInterval(MarqueeDes,speed);//自动右移动
</script>
<script>
    $("#index-cash-show-left-ul ul li").hover(function () {
        var index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');

        $('.index-cash-show-right #index-cash-show-right-item').eq(index).show().siblings().hide();
    });
</script>
</body>
</html>