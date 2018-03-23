@extends('home.layout')
@section('content')
<div id="fh5co-page">
    @include('home.header')
    <div id="fh5co-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <h2 class="intro-heading">关于长艺</h2>
                    <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    {{--<div class="about">--}}
                        {{--<img src="{{url('asset/images/author.jpg')}}" alt="">--}}
                    {{--</div>--}}
                    <h3 class="text-center">公司简历</h3>
                    <div class="desc">
                        <div>{!! $aboutUs->about_content !!}</div>
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
                @foreach($newCase as $nc)
                <div class="col-md-4 animate-box">
                    <a href="{{$qshow.$nc->case_img}}" class="grid-photo img-popup" style="background-image: url({{$qshow.$nc->case_img}});">
                        <div class="desc">
                            <h3>{{$nc->case_title}}</h3>
                            <span>{{$nc->case_des}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
