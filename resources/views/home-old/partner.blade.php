@extends('home.layout')
@section('content')
    <div id="fh5co-page">
        @include('home.header')
        <div id="fh5co-intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <h2 class="intro-heading">合作伙伴</h2>
                        <p><span>海口长艺广告 <i class="icon-heart3"></i> 100%自有工厂 100%全市低价 100%满意付款 <a href="{{route('/')}}">尽在长艺</a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-photos-section">
            <div class="container">
                <div class="row text-center">
                    @foreach($partner as $pn)
                    <div class="col-md-4 animate-box">
                        <a href="{{$qshow.$pn->partner_img}}" class="grid-photo img-popup" style="background-image: url({{$qshow.$pn->partner_img}})">
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
