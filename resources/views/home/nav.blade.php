<nav id="fh5co-main-nav" role="navigation">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
    <div class="js-fullheight fh5co-table">
        <div class="fh5co-table-cell js-fullheight">
            <ul>
                <li class="@if($pageTitle == 'index') active @endif"><a href="{{route('/')}}">首页</a></li>
                <li class="@if($pageTitle == 'case') active @endif"><a href="{{route('case')}}">成功案例</a></li>
                <li class="@if($pageTitle == 'about') active @endif"><a href="{{route('about')}}">关于长艺</a></li>
                <li class="@if($pageTitle == 'partner') active @endif"><a href="{{route('partner')}}">合作伙伴</a></li>
                <li class="@if($pageTitle == 'jobs') active @endif"><a href="{{route('jobs')}}">人才招聘</a></li>
                <li class="@if($pageTitle == 'contact') active @endif"><a href="{{route('contact')}}">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>