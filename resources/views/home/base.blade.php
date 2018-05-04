<div style="display:none"><script language="javascript" src="http://count22.51yes.com/click.aspx?id=224112153&logo=1" charset="gb2312"></script>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>海口长艺广告官方</title>
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
        .index-cash-show-left-ul > ul > .active{
            background: url('http://www.hainanhecai.com/base/border/213/images/bar.gif') 0px 0px no-repeat !important;
        }
    </style>
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
</head>
<body>
@include('home.header')
@yield('content')
@include('home.footer')
<!-- jQuery -->
<script src="https://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{url('js/floatingcarousel.min.js')}}"></script>
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
@yield('jss')
</body>
</html>