@extends('home.base')
@section('title')
    新闻中心-海口长艺广告
@endsection
@section('content')
    <!--关于长艺子页面开始-->
    <div class="about_warp">
        <div class="shangbuk ">
            <div class="shangbu">
                <p>新闻中心<span>/news</span></p>
            </div>
            <div class="qiyejianjie">
                <a href="#" class="qiyejianjie_a" >
                    新闻中心
                </a>
            </div>
            <div class="zhongbu">
                <div class="zhongbu1" style="background: url('{{asset("images/index_28.gif")}}') no-repeat;">
				<span>联系我们<span>
                </div>
            </div>
            <div class=xiabu>
                <h4>
                    电话：{{$webset->tel}}<br/>
                    联系人：{{$webset->contacter}}<br/>
                    手机：{{$webset->phone}}<br/>
                    公司地址：{{$webset->address}}
                </h4>
            </div>
        </div>

        <div class=youbu>
            <div class=shangm>
                <p>新闻中心</p>
            </div>
            <div class="news-list-warp">
                <ul>
                    @foreach($news as $n)
                        <li>
                        <a href="{{route('news.info',['id' => $n->id])}}">
                            <div class="news-title"><span><strong>{{$n->title}}</strong></span></div>
                            <div class="news-des"><span>{{$n->des}}</span></div>
                        </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>






    <!--关于长艺子页面结束-->
@endsection