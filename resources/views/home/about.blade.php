@extends('home.layout')
@section('content')
<div id="fh5co-page">
    @include('home.header')
    <div id="fh5co-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <h2 class="intro-heading">关于我们</h2>
                    <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    {{--<div class="about">--}}
                        {{--<img src="{{url('asset/images/author.jpg')}}" alt="">--}}
                    {{--</div>--}}
                    <h3>公司简历</h3>
                    <div class="desc text-left">

                        <p>海口长艺广告有限公司专业从事大中型户外广告制作、亮化工程、庆典活动及印刷制品等。公司一直本着"求真务实"的公司文化，立足客户市场，致力于成为国际旅游岛最具活力、成长性的广告制作及传媒的后起之秀。</p>
                        <p>Haikou Changyi Advertising Co., Ltd. specializes in large and medium-sized outdoor advertising production, lighting engineering, celebration activities and printing products. The company has been committed to becoming the most dynamic and growing advertising producer and media star of the international tourism island based on the company culture of "seeking truth and pragmatism" and based on the customer market.</p>
                        {{--<p class="fh5co-social-icon">--}}
                            {{--<a href="#"><i class="icon-twitter2"></i></a>--}}
                            {{--<a href="#"><i class="icon-facebook2"></i></a>--}}
                            {{--<a href="#"><i class="icon-instagram"></i></a>--}}
                            {{--<a href="#"><i class="icon-dribbble2"></i></a>--}}
                            {{--<a href="#"><i class="icon-youtube"></i></a>--}}
                        {{--</p>--}}
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
                        <h2>最新6组案例</h2>
                        <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic7.jpg')}});">
                        <div class="desc">
                            <h3>Camera</h3>
                            <span>12 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic8.jpg')}});">
                        <div class="desc">
                            <h3>Wedding</h3>
                            <span>100 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic12.jpg')}});">
                        <div class="desc">
                            <h3>Drinks</h3>
                            <span>45 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic9.jpg')}});">
                        <div class="desc">
                            <h3>Camera</h3>
                            <span>12 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic14.jpg')}});">
                        <div class="desc">
                            <h3>Wedding</h3>
                            <span>100 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic11.jpg')}});">
                        <div class="desc">
                            <h3>Drinks</h3>
                            <span>45 Photos</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
