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
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><i class="icon-video-camera2"></i></span>
                        <h3>Collect Video</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><i class="icon-cloud-download"></i></span>
                        <h3>Download Photos</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><i class="icon-camera2"></i></span>
                        <h3>Capture Photos</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
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
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic4.jpg')}});">
                        <div class="desc">
                            <h3>Camera</h3>
                            <span>12 Photos</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 animate-box">
                    <a href="#" class="grid-photo" style="background-image: url({{url('asset/images/pic5.jpg')}});">
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
            </div>
        </div>
    </div>
</div>

@endsection
