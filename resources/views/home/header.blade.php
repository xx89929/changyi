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
                <a href="{{route('/')}}">
                    <h2>长艺首页</h2>
                    <p>Home Page</p>
                </a>
            </li>
            <li >
                <a href="{{route('about')}}">
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
                    <h2>合作伙伴</h2>
                    <p>partner</p>
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

<div style="width: 1007px; margin: 10 auto;" class="qz-banner-warp">
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