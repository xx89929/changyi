@extends('home.base')
@section('content')


{{--横幅--}}
<div class="banner_warp">
    <div class="banner_warp_div">
        <h1>感谢以下企业对<span>长艺广告</span>的大力支持</h1>
        <p>Company Support <a href="#">更多</a></p>
        <div class="spanse"></div>
    </div>
</div>
{{--end横幅--}}

<div class="index-partner-warp">
    <div class="index-partner-tit">
        <div class="index-partner-tit-t">
            <img src="{{url('images/partner_img.jpg')}}">
        </div>
    </div>
    <div class="carousel index-partner-cont" id="carousel-responsive">
        <ul>
            @foreach($partner as $pn)
                <li>
                    <img src="{{$qshow.$pn->partner_img}}">
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="jianbian">

</div>


{{--中间--}}
<div id="content" style="width: 90%; margin: 0px auto;border: 1px dashed black;background-color: white">
    <div class="index_cash_show">
        <div class="index-cash-show-left">
            <div class="index-cash-show-left-ul" id="index-cash-show-left-ul">
                <img src="{{url('asset/images/cgal.png')}}">
                <ul>
                    @foreach($caseType as $ct)
                    <li> <!-- #e6e8eb -->
                        <a href="{{route('case',['case_type' => $ct->id])}}">
                            {{$ct->type_name}}
                        </a>
                        <span> 〉 </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="index-cash-show-right">
            @foreach($caseType as $ct)
            <div class="index-cash-show-right-item" style="display: block;" id="index-cash-show-right-item">
                <ul>
                    @foreach($case as $cs)
                        @if($cs->case_type == $ct->id)
                        <li>
                            <a href="{{route('case.info',['id' => $cs->id])}}">
                                <img src="{{$qshow.$cs->case_img}}">
                                <h4><a>@if(empty($cs->case_title)) 未定义 @else {{$cs->case_title}} @endif</a></h4>
                            </a>

                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{--中间end--}}

<div class="bottom-img">
    <img width="100%" src="{{url('asset/images/company_jj.png')}}">
</div>







@section('jss')

    <script>
        $("#index-cash-show-left-ul ul li").hover(function () {
            var index = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');

            $('.index-cash-show-right #index-cash-show-right-item').eq(index).show().siblings().hide();
        });
    </script>

    <script>
        var opts = {
                autoScroll : true,
                autoScrollSpeed : 15000,
            },
            responsiveCarousel = $('#carousel-responsive').floatingCarousel(opts);
    </script>
@endsection
@endsection