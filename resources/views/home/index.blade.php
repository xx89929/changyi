@extends('home.layout')
@section('content')
<div id="fh5co-page">
   @include('home.header')
    <div id="fh5co-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box text-center">
                    <h2 class="intro-heading">创海南广告制作领先品牌</h2>
                    <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-photos-section">
        <div class="container">
            <div id="ri-grid" class="ri-grid animate-box">
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
    </div>
    <div id="fh5co-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box ">
                    <div class="heading-section">
                        <h2>成功案例</h2>
                        <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="index-case-show-tab col-md-3 text-center animate-box">
                    <ul class="list-unstyled">
                        <li class="index-case-title"><h3>案例展示</h3></li>
                        <li class="active"><a href="#home" data-toggle="tab">公司简介</a></li>
                        @foreach($caseType as $ct)
                        <li><a href="#type{{$ct->id}}" data-toggle="tab">{{$ct->type_name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="tab-content index-case-show-content col-md-9 animate-box">
                    <div class="tab-pane fade in active" id="home">
                        <div>{!! $contact->intro !!}</div>
                    </div>
                    @foreach($caseType as $ct)
                    <div class="tab-pane fade" id="type{{$ct->id}}">
                        <div class="index-case-show-content-item">
                            <ul class="list-inline clearfix text-center ">
                                @foreach($case as $cs)
                                    @if($cs->case_type == $ct->id)
                                    <li class="col-md-3">
                                        <img class="img-responsive" src="{{$qshow.$cs->case_img}}">
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-counters" style="background-image: url({{url('asset/images/banner.jpg')}});" data-stellar-background-ratio="0.5" id="counter-animate">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center animate-box">
                <div class="heading-section">
                    <h2>长艺广告统计</h2>
                </div>
            </div>
        </div>
        <div class="fh5co-narrow-content animate-box">
            <div class="row" >
                <div class="col-md-4 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="1130" data-speed="2000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">海南交易量（笔）</span>
                </div>
                <div class="col-md-4 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="50015100" data-speed="2000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">海南交易金额（元）</span>
                </div>
                <div class="col-md-4 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="7497" data-speed="2000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">海南成功案例（例）</span>
                </div>
            </div>
        </div>
    </div>
    <div id="index-partner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box ">
                    <div class="heading-section">
                        <h2>合作伙伴</h2>
                        <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="index-partner-row animate-box" id="index-partner-row">
                    <div id="index-partner-1">
                        <ul class="list-inline clearfix">
                            @foreach($partner as $pn)
                            <li class="col-md-2">
                                <img src="{{$qshow.$pn->partner_img}}" class="img-responsive" >
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="index-partner-2">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <script type="text/javascript">
        $(function() {

            $('#ri-grid').gridrotator( {
                rows : 3,
                // number of columns
                columns : 6,
                w1024 : { rows : 3, columns : 5 },
                w768 : {rows : 3,columns : 4 },
                w480 : {rows : 3,columns : 3 },
                w320 : {rows : 2,columns : 2 },
                w240 : {rows : 1,columns : 1 },
                preventClick : false,
                interval:2000,
            } );

        });
    </script>

    <script>
        var speed=30
        var demo = document.getElementById('index-partner-row');
        var demo1 = document.getElementById('index-partner-1');
        var demo2 = document.getElementById('index-partner-2');
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
@endsection
