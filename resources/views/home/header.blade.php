<div class="header-warp">
    <div class="logo-box">
        <img src="{{url('asset/images/logo.png')}}" alt="{{$seoRs->imgseo}}">
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
                <a href="{{route('/')}}">
                    <h2>长艺首页</h2>
                </a>
            </li>
            <li >
                <a href="{{route('about')}}">
                    <h2>长艺广告</h2>
                </a>
            </li>
            <li >
                <a href="{{route('case')}}">
                    <h2>成功案例</h2>
                </a>
            </li>
            <li >
                <a href="{{route('partner')}}">
                    <h2>合作伙伴</h2>
                </a>
            </li>
            <li >
                <a href="{{route('jobs')}}">
                    <h2>人才招聘</h2>
                </a>
            </li>
            <li >
                <a href="{{route('news')}}">
                    <h2>新闻中心</h2>
                </a>
            </li>
            <li >
                <a href="{{route('contact')}}">
                    <h2>联系我们</h2>
                </a>
            </li>

        </ul>
    </div>
</div>



{{--横幅banner--}}

{{--<div style="width: 1007px; margin: 10 auto;" class="qz-banner-warp">--}}
    {{--<div id="ri-grid" class="ri-grid">--}}
        {{--<img class="ri-loading-image" src="{{url('asset/images/loading.gif')}}"/>--}}
        {{--<ul>--}}
            {{--@foreach($bannerCase as $bc)--}}
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<img src="{{$qshow.$bc->case_img}}"/>--}}
                        {{--<div class="desc">--}}
                            {{--<h3>{{$bc->case_title}}<br/><span>{{$bc->case_des}}</span></h3>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endforeach--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="js-silder">
    <div class="silder-scroll" >
        <div class="silder-main">
            @foreach($banner as $b)
            <div class="silder-main-img">
                <img src="{{$qshow.$b->b_img}}" alt="{{$seoRs->imgseo}}">
            </div>
            @endforeach
        </div>
    </div>
</div>
