@extends('home.layout')
@section('content')

<div id="fh5co-page">
    @include('home.header')
    <div id="fh5co-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <h2 class="intro-heading">人才招聘</h2>
                    <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box ">
                    <div class="services">
                        <span><i class="icon-pen"></i></span>
                        <div class="jobs-box" id="t1">
                            <div class="jobs-item" id="c1">
                                <h3>广告设计师</h3>
                                <p>1、产品设计：设计满足用户需求的产品和功能，优化已有功能或策略以提升用户体验，并输出高品质的产品需求文档；</p>
                                <p>2、需求分析：对用户需求有清晰的理解，发现并分析存在的问题，并给出合理的解决思路；</p>
                                <p>3、视觉交互：对设计有追求，对用户体验精益求精；</p>
                                <p>4、项目推动：把握项目周期，与设计研发测试等合作部门交流沟通，保证项目的顺利进行；</p>
                                <p>5、市场分析：及时、准确地研究、监控、分析竞争对手动态，关注新产品，关注互联网金融新趋势，并提出相应策略；</p>
                            </div>
                            <div class="jobs-item" id="c2"> </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><i class="icon-map3"></i></span>
                        <div class="jobs-box" id="t2">
                            <div class="jobs-item" id="c3">
                                <h3>线下推广业务员</h3>
                                <p>1、负责公司产品——数科聚合线下扫码支付，在全国市场推广销售；</p>
                                <p>2、帮助商家使用公司产品，免费送产品给商家使用；</p>
                                <p>3、负责支付宝服务窗/微信公众号平台产品在重庆商户的推广应用；</p>
                                <p>4、帮助商家做支付宝/微信的衍生产品运营；</p>
                            </div>
                            <div class="jobs-item" id="c4"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><i class="icon-pacman"></i></span>
                        <div class="jobs-box" id="t3">
                            <div class="jobs-item" id="c5">
                                <h3>JAVA开发工程师</h3>
                                <p>1、大专及以上学历，计算机软件或相关专业；</p>
                                <p>2、三年以上J2EE平台开发经验；对J2EE体系有充分的认识，扎实的基础功底（多线程/反射/通信协议等）；</p>
                                <p>3、有独立的系统设计和开发能力。多系统交互开发；有能力处理高并发、大数据量的业务场景；</p>
                                <p>4、熟悉各种常用的开源框架及架构；</p>
                                <p>5、熟悉WEB应用服务器（nginx、tomcat等）和服务器（Linux）；</p>
                                <p>6、熟悉掌握mysql，memcached，redis等主流数据存储系统；</p>
                                <p>7、熟悉消息服务、分布式系统、SOA架构的优先；</p>
                                <p>8、有分布式、高并发、高可用性经验的优先；</p>
                                <p>9、拥有良好的团队合作和理解能力，执行力强，对技术有强烈的追求。</p>
                            </div>
                            <div class="jobs-item" id="c6"> </div>
                        </div>
                        <div class="jobs-item2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-photos-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <div class="heading-section">
                        <h2>最新案例</h2>
                        <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @foreach($trCase as $tc)
                <div class="col-md-4 animate-box">
                    <a href="{{$qshow.$tc->case_img}}" class="grid-photo img-popup" style="background-image: url({{$qshow.$tc->case_img}});">
                        <div class="desc">
                            <h3>{{$tc->case_title}}</h3>
                            <span>{{$tc->case_des}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
    <script>
        var speed=30
        var demo = document.getElementById('t1');
        var demo1 = document.getElementById('c1');
        var demo2 = document.getElementById('c2');
        demo2.innerHTML=demo1.innerHTML;
        function Marquee(){
            if(demo2.offsetHeight-demo.scrollTop<=0){

                demo.scrollTop-=demo1.offsetHeight;
            }
            else{

                demo.scrollTop++
            }
        }
        var MyMar=setInterval(Marquee,speed)
        demo.onmouseover=function() {clearInterval(MyMar)}
        demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
    </script>

    <script>
        var speed=30
        var b = document.getElementById('t2');
        var b1 = document.getElementById('c3');
        var b2 = document.getElementById('c4');
        b2.innerHTML=b1.innerHTML;
        function Marquee(){
            if(b2.offsetHeight-b.scrollTop<=0){

                b.scrollTop-=b1.offsetHeight;
            }
            else{

                b.scrollTop++
            }
        }
        var MyMar=setInterval(Marquee,speed)
        demo.onmouseover=function() {clearInterval(MyMar)}
        demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
    </script>

    <script>
        var speed=30
        var c = document.getElementById('t3');
        var c1 = document.getElementById('c5');
        var c2 = document.getElementById('c6');
        c2.innerHTML=b1.innerHTML;
        function Marquee(){
            if(c2.offsetHeight-c.scrollTop<=0){

                c.scrollTop-=c1.offsetHeight;
            }
            else{

                c.scrollTop++
            }
        }
        var MyMar=setInterval(Marquee,speed)
        demo.onmouseover=function() {clearInterval(MyMar)}
        demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
    </script>

@endsection