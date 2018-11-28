<div style="display:none"><script language="javascript" src="http://count22.51yes.com/click.aspx?id=224112153&logo=1" charset="gb2312"></script>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title','海南广告制作-行业领先品牌-海口长艺广告')</title>
    <meta name="keywords" content="海南广告制作,海南广告,海口广告,海口广告制作">
    <meta name="description" content="海南省海口长艺广告有限公司专业从事大中型户外广告制作、亮化工程、庆典活动及印刷制品等。公司一直本着'求真务实'的公司文化，立足客户市场，致力于成为国际旅游岛最具活力、成长性的广告制作及传媒的后起之秀。">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://www.changemedia.com.cn/css.css" rel="stylesheet" type="text/css" />
    <link href="{{url('css/common.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('css/style2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('css/chenhang_css.css')}}" rel="stylesheet" type="text/css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('asset/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('asset/css/icomoon.css')}}">

    <!-- animatedresponsiveImagegrid  -->
    <link rel="stylesheet" href="{{url('asset/css/animatedresponsiveImagegrid.css')}}">
    <!-- Magnifoc Popup  -->
    <link rel="stylesheet" href="{{url('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('asset/sass/style.css')}}">
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

    <link href="{{url('css/Style.css')}}" rel="stylesheet">
    <style type="text/css">
        .clear{ clear:both;}
        body{ margin:0px; padding:0px; font-size:12px;background-color: white}
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
</head>
<body>
<div class="changyi-index">
@include('home.header')
    @yield('content')
@include('home.footer')
</div>
<!-- jQuery -->
<script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{url('js/floatingcarousel.min.js')}}"></script>
<!-- gridrotator -->
<script type="text/javascript" src="{{url('asset/js/jquery.gridrotator.js')}}"></script>
<script src="{{url('asset/js/wySilder.min.js')}}" type="text/javascript"></script>
<script>
    $(function (){
        $(".js-silder").silder({
            auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
            speed: 20,//轮播图运动速度
            sideCtrl: true,//是否需要侧边控制按钮
            bottomCtrl: true,//是否需要底部控制按钮
            defaultView: 0,//默认显示的索引
            interval: 3000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
            activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
        });
    });
</script>
@yield('jss')
</body>
</html>
